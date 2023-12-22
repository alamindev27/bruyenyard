<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>

  </head>
  <body>
    <section class="vh-100" style="background: linear-gradient(0deg, rgba(165,11,250,1) 0%, rgba(46,65,219,1) 100%);">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <form action="{{ route('password.email') }}" method="POST">
                    @csrf
                    <div class="card shadow-2-strong text-white" style="border-radius: 1rem; background:radial-gradient(circle at 77%, #1A767E, #0F212F 65%, #0F212F 100%)">
                      <div class="card-body p-4">

                        <h3 class="mb-3 text-center">Reset Password</h3>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="form-outline mb-2">
                            <label class="form-label" for="email">Email</label>
                            <input type="text" id="email" name="email" placeholder="Enter email" value="{{ old('email') }}" class="form-control" />
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="text-center">
                            <button class="btn text-white btn-block " style="background: linear-gradient(0deg, rgba(165,11,250,1) 0%, rgba(46,65,219,1) 100%)" type="submit">Send Password Reset Link</button>
                        </div>

                        <div class="">
                            Back to login <a href="{{ route('login') }}" >Sign In</a>
                        </div>

                      </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if (session('success'))
    <script>
        swal({
            title: "Success",
            text: "{{ session('success') }}",
            icon: "success",
            button: "Ok",
        });
    </script>
@endif
  </body>
</html>





