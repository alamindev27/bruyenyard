<?php

namespace Illuminate\Foundation\Auth;

use App\Models\ReferUser;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

trait RegistersUsers
{
    use RedirectsUsers;

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));




        $this->guard()->login($user);
        if ($request->invite && !empty($request->invite)){
            $user =  User::where('profile_id', $request->invite)->first();
            if ($user) {
                $id = ReferUser::insertGetId([
                    'refer_id' => $user->id,
                    'auth_id' => auth()->user()->id,
                    'created_at' => Carbon::now()
                ]);

                $firstGenerationUser = ReferUser::where('auth_id', auth()->user()->id)->first();
                if ($firstGenerationUser) {
                    User::where('id', $firstGenerationUser->refer_id)->increment('first_gen_toaal_invite', 1);

                    $secondGenerationUser = ReferUser::where('auth_id', $firstGenerationUser->refer_id)->first();
                    if ($secondGenerationUser) {
                        User::where('id', $secondGenerationUser->refer_id)->increment('second_gen_toaal_invite', 1);

                        $thirdGenerationUser = ReferUser::where('auth_id', $secondGenerationUser->refer_id)->first();
                        if ($thirdGenerationUser) {
                            User::where('id', $thirdGenerationUser->refer_id)->increment('third_gen_toaal_invite', 1);
                        }
                    }
                }
            }else{
                return redirect()->route('register')->with('referNotFound', 'Invalid Refer ID');
            }
        }

        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        return $request->wantsJson()
                    ? new JsonResponse([], 201)
                    : redirect($this->redirectPath());
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {
        //
    }
}
