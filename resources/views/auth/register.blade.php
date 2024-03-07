

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Register</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
        <link rel="manifest" href="/favicon/site.webmanifest">
    <!-- Latest compiled JavaScript -->
    </head>
<style>
        h2{
            margin-top: 5px;
            margin-bottom: 5px;
            width: 100%;
            color: white;
            text-align: center;
            font-size: 15px;
        }
        .txtSignup{
            padding: 0px 0px 1em;
            margin-top: 0px;
            margin-bottom: 10px;
            font-size: 18px;
            line-height: 26px;
            letter-spacing: 0px;
            color: white;
            font-weight: 700;
        }
       .label-sign{
            color:white;
        }
        .labelSignup{
            box-sizing: border-box;
            padding-bottom: 24px;
            display: block;
        }
        .label-group{
            font-size: 0.875rem;
            line-height: 1.25rem;
            font-weight: 700;
            display: flex;
            width: 100%;
            padding-bottom: 8px;
        }
        .input-group{
           
            font-size: 1rem;
            line-height: 1.5rem;
            font-weight: 1000;
            width: 100%;
            margin-top: 0px;
            margin-bottom: 0px;
            border-radius: 4px;
            padding: 10px;
            box-shadow: inset 0 0 0 1px var(--essential-subdued,#878787);
          
        }
        .form-control{
            background-color: black;
            
            border: none;
        }
        .form-control[type=name]{
            color: white;
            background-color: black;
        }
        .form-control[type=name]:focus{
            color: white;
        }
        .form-control[type=email]{
            color: white;
            background-color: black;
        }
        .form-control[type=email]:focus{
            color: white;
        }
        .form-control[type=password]{
            color: white;
            background-color: black;
        }
        .form-control[type=password]:focus{
            color: white;
        }
        .submit-btn{
           
            margin-left: 35%;
            padding-top:15px;
            padding-bottom: 15px;
            width: 30%;
            border: 0px;
            border-radius: 500px;
            font-weight: 700;
            background-color: #FB5B21;
            color: white;

        }
        p{
            color:white;
            padding-top: 20px;
            display: inline-block;
           
        }
        .sn a{
            display: inline-block;
        }
        
        .form-check-label{
            color: white;
        }
        .form-check{
            display: inline-block;
        }
        .fp{
            width: 50%;
            margin-right: 50%;
        }
        .fp .btn{
            padding-left: 0px;
            padding-top: 0px;
            text-decoration: none;
            color: #878787;
            font-size: 16px;
            font-size: 0.875rem;

        }
    </style>

<body style="background-color:black;";>             
    <!-- <img src="/img/logoSTF.png" alt="STF logo" class="img-fluid mx-auto d-block p-4 my-4"> -->
    <!-- <h2>Sign up for free to start tasting your favorite Milktea!</h2> -->

    <div class="container p-5 my-5 col-md-5">        
        <form method="POST" action="{{ route('register') }}">
        @csrf
            <!-- <h2 class="txtSignup ">Log in instead</h2> -->
            <div >
                <img src="/frontend/img/condamlogo.png" alt="logo" class="img-fluid mx-auto d-block" style="width: 100px; height:100px;">
            </div>   
            
            <div class="labelSignup">
                <div class="label-group">
                    <label class="label-sign col-md-4 col-form-label" for="name">Name</label>
                </div>
                <div class="input-group">
                    <input class="form-control @error('name') is-invalid @enderror" type="name" placeholder="Your Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="labelSignup">
                <div class="label-group">
                    <label class="label-sign col-md-4 col-form-label" for="name">Username</label>
                </div>
                <div class="input-group">
                    <input class="form-control @error('username') is-invalid @enderror" type="name" id="username" placeholder="Your Username" name="username" :value="old('username')" required autofocus autocomplete="username">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="labelSignup">
                <div class="label-group">
                    <label class="label-sign col-md-4 col-form-label" for="email">Phone Number</label>
                </div>
                <div class="input-group">
                    <input class="form-control @error('email') is-invalid @enderror" type="number" name="phone" placeholder="Phone Number" :value="old('phone')" required autofocus autocomplete="phone" />
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            
            <div class="labelSignup">
                <div class="label-group">
                    <label class="label-sign col-md-4 col-form-label" for="email">Email</label>
                </div>
                <div class="input-group">
                    <input class="form-control @error('email') is-invalid @enderror" type="email" placeholder="Email" name="email" :value="old('email')" required />
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="labelSignup">
                <div class="label-group">
                    <label class="label-sign col-md-4 col-form-label" for="password">Password</label>
                </div>
                <div class="input-group">
                    <input class="form-control @error('password') is-invalid @enderror" type="password" placeholder="Password"  name="password" required autocomplete="new-password" />
                     @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                     @enderror
                </div>
            </div>

            <div class="labelSignup">
                <div class="label-group">
                    <label class="label-sign col-md-4 col-form-label" for="password-confirm">Confirm Passowrd</label>
                </div>
                <div class="input-group">
                    <input id="password-confirm" class="form-control @error('password') is-invalid @enderror" type="password" placeholder="Confirm your Password" name="password_confirmation" required autocomplete="new-password" />
                     @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                     @enderror
                </div>
            </div>
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif
                                
                <div class="fp">
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                </div>

                <button type="submit" class="submit-btn">
                {{ __('Register') }}
                </button>
                <div class="sn">
                    <p>Already have an account?<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></p>
                </div>              
        </form>    
    </div>
</body>
