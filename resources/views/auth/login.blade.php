{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}





<!DOCTYPE html>
<html lang="en">
    <head>
      <!-- Required meta tags-->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="author" content="">
      <meta name="keywords" content="admin template,html 5 admin template , dmeki admin , dashboard template, bootstrap 5 admin template, responsive admin template">
      <title>CPMS |Connexion
      </title>
      <!-- shortcut icon-->
      <link rel="icon" href="{{asset('assets/images/logo/icon-logo.png')}}" type="image/x-icon">
      <link rel="shortcut icon" href="{{asset('assets/images/logo/icon-logo.png')}}" type="image/x-icon">
      <!-- Fonts css-->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
      <!-- Font awesome -->
      <link href="{{asset('assets/css/vendor/font-awesome.css')}}" rel="stylesheet">
      <!-- themify icon-->
      <link href="{{asset('assets/css/vendor/themify-icons.css')}}" rel="stylesheet">
      <!-- Scrollbar-->
      <link href="{{asset('assets/css/vendor/simplebar.css')}}" rel="stylesheet">
      <!-- Bootstrap css-->
      <link href="{{asset('assets/css/vendor/bootstrap.css')}}" rel="stylesheet">
      <!-- Custom css-->
      <link href="{{asset('assets/css/style.css')}}" id="customstyle" rel="stylesheet">
    </head>
  <body>
    <!-- Login Start-->
    <div class="auth-main">
      <div class="codex-authbox">
        <div class="auth-header">
          <div class="codex-brand"><a href="index.html"><img class="img-fluid light-logo" src="{{asset('logo_cpms.png')}}" alt=""><img class="img-fluid dark-logo" src="{{asset('assets/images/logo/dark-logo.png')}}" alt=""></a></div>
          <h3>Système Intégré de Gestion</h3>
          {{-- <h6>don't have an account? <a class="text-primary" href="register.html">creat an account</a></h6> --}}
        </div>
        <form method="POST" action="{{ route('login') }}">
            @csrf

          <div class="form-group">
            <label class="form-label">Email</label>
            <input class="form-control" type="text" name="email" required placeholder="Enter Your Email">
          </div>
          <div class="form-group">
            <label class="form-label" for="Password">Password</label>
            <div class="input-group group-input">
              <input class="form-control showhide-password" name="password" type="password" id="Password" placeholder="Enter Your Password" required=""><span class="input-group-text toggle-show fa fa-eye"></span>
            </div>
          </div>

          <div class="form-group">
            <button class="btn btn-primary" type="submit"><i class="fa fa-sign-in"></i> Connexion</button>
          </div>
        </form>

      </div>
    </div>
    <!-- Login End-->

      <!-- main jquery-->
      <script src="{{asset('assets/js/jquery-3.6.0.js')}}"></script>
      <!-- Theme Customizer-->
      <script src="{{asset('assets/js/layout-storage.js')}}"></script>
      <script src="{{asset('assets/js/customizer.js')}}"></script>
      <!-- Feather icons js-->
      <script src="{{asset('assets/js/icons/feather-icon/feather.js')}}"></script>
      <!-- Bootstrap js-->
      <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
      <!-- Scrollbar-->
      <script src="{{asset('assets/js/vendors/simplebar.js')}}"></script>
      <!-- Custom script-->
      <script src="{{asset('assets/js/custom-script.js')}}"></script>
  </body>
</html>
