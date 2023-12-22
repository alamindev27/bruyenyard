<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.tutorialjinni.com/intl-tel-input/17.0.19/css/intlTelInput.css"/>
    <title>Register</title>
    <style>
        .iti {
            display: block !important;
        }
    </style>
  </head>
  <body>
    <section class="vh-100" style="background: linear-gradient(0deg, rgba(165,11,250,1) 0%, rgba(46,65,219,1) 100%);">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="card shadow-2-strong" style="border-radius: 1rem; background:radial-gradient(circle at 77%, #1A767E, #0F212F 65%, #0F212F 100%)">
                      <div class="card-body p-4">
                        <h3 class="mb-3 text-center text-white">Sign Up</h3>

                        <div class="form-outline mb-2">
                            <label class="form-label text-white" for="name">Name</label>
                            <input type="text" id="name" name="name" placeholder="Enter name" value="{{ old('name') }}" class="form-control" />
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-outline mb-2">
                            <label class="form-label text-white" for="email">Email</label>
                            <input type="text" id="email" name="email" placeholder="Enter email" value="{{ old('email') }}" class="form-control" />
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-outline mb-2">
                            <label class="form-label text-white" for="phone">Phone</label> <br>
                            <input type="text" id="phone" name="phone" placeholder="Enter phone" value="{{ old('phone') }}" class="form-control w-100" />
                            @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-outline mb-2">
                            <label class="form-label text-white" for="invite">Refer User</label>
                            <input type="number" id="invite" name="invite" placeholder="Enter refer" value="{{ isset($_GET['invite']) && !empty($_GET['invite']) ? $_GET['invite'] : old('invite') }}" autocomplete="off" class="form-control"/>
                            @error('invite')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            @if (session('referNotFound'))
                                <span class="text-danger">{{ session('referNotFound') }}</span>
                            @endif
                        </div>

                        <div class="form-outline mb-2">
                            <label class="form-label text-white" for="password">Password</label>
                            <div class="input-group">
                                {{-- <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username"> --}}
                                <input type="password" id="password" name="password" placeholder="Enter password" class="form-control" />
                                <div class="input-group-prepend" style="cursor: pointer;">
                                    <div class="input-group-text" onclick="myFunction()" id="show-pass">
                                        <i class="fa fa-eye" id="eye" style="font-size: 18px; margin:3px"></i>
                                        {{-- <i class="fa fa-eye-slash" style="font-size: 18px; margin:3px"></i> --}}
                                    </div>
                                </div>
                            </div>
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-outline mb-2">
                            <label class="form-label text-white" for="password_confirmation">Re-type Password</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Enter password confirmation" class="form-control" />
                            @error('password_confirmation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="text-center">
                            <button class="btn text-white btn-block " type="submit" style="background: linear-gradient(0deg, rgba(165,11,250,1) 0%, rgba(46,65,219,1) 100%)">Register</button>
                        </div>
                        <div class="text-white">
                            Already have an account <a href="{{ route('login') }}">Sign In</a>
                        </div>

                      </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.tutorialjinni.com/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>

    <script>
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
            separateDialCode: true
        });

        function myFunction() {
        var x = document.getElementById("password");
        // var y = document.getElementById("eye");

            if (x.type === "password") {
                x.type = "text";
                // $('#eye').removeClass('fa-eye-slash');
                // $('#eye').addClass('fa-eye');
            } else {
                x.type = "password";
                // $('#eye').addClass('fa-eye-slash');
                // $('#eye').removeClass('fa-eye');
            }
        }

//         password
// show-pass
    </script>
  </body>
</html>





