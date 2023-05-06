<!DOCTYPE html>
<html lang="en">

    <head>
        @include('admin.include.head')
    </head>

    <body>
        <div class="auth-layout-wrap" style="background-color: #363740">
            <div class="auth-content ">
                <div class="text-center">
                     <img src="{{asset('assets/images/logologin.png')}}" style="width:350px !important; margin:10px;" alt="">
                </div>
                
                <div class="card o-hidden">
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="p-4">
                                <div class="text-center mb-4">
                                    <!--<img src="{{asset('assets/images/logog.png')}}" style="width:200px !important;" alt="">-->
                                     <h1 class="mb-3 text-18">Log In to <br> Triple Crown Bingo</h1>
                                </div>
                                <div class="auth-logo text-center mb-4">
                                <label for="email">Enter your email and password below </label>
</div>
                                <form method="POST" action="/login">
                                    @csrf
                                    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input id="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            name="email" placeholder="Email Address" value="{{ old('email') }}" required autocomplete="email"
                                            autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <span style="padding-left:150px; font-size:10px;">Forgot Password?</span>
                                        <input id="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            name="password" placeholder="Password" required autocomplete="current-password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <br>
                                    <div class="form-group ">
                                        <div class="">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
<br>
                                    <button class="btn btn-info btn-block mt-2">Log In</button>

                                </form>
                                @if (Route::has('password.request'))

                                <div class="mt-3 text-center">

                                    <a href="{{ route('password.request') }}" class="text-muted"><u>Forgot
                                            Password?</u></a>
                                </div>
                                @endif
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>

        @include('admin.include.script')
    </body>

</html>