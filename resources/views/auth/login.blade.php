<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from tende.vercel.app/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Nov 2023 16:21:43 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Mighty Finance Solution | Sign In</title>
    <!-- Favicon icon -->
    <!-- Custom Stylesheet -->
    <link href="{{ 'public/theme/css/style.css' }}" rel="stylesheet">
    <style>
        a {
            color: rgb(255, 187, 0);
        }

        .auth-form .btn {
            height: 45px;
            font-weight: 700;
            border-radius: 2.5rem;
            box-shadow: none !important;
        }

        .auth-form.card {
            max-width: 400px;
            margin: 0 auto;
            padding: 1.5rem !important;
        }

        .auth-form .w-full {
            margin-bottom: 1rem;
        }

        .auth-form h2 {
            margin-bottom: 0.5rem !important;
        }

        .auth-form p {
            margin-bottom: 1rem !important;
        }

        .security-badge {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 11px;
            color: #666;
            margin-top: 10px;
        }

        .security-badge i {
            color: #792db8;
        }

        .input-group-text {
            background: transparent;
            border: none;
        }

        .form-control {
            border-radius: 0.5rem;
            padding: 0.6rem 1rem;
            height: 45px;
        }

        .form-control:focus {
            border-color: #792db8;
            box-shadow: 0 0 0 0.2rem rgba(121, 45, 184, 0.25);
        }

        .row.g-3 {
            margin-top: 0.5rem;
        }

        .col-12 {
            margin-bottom: 0.5rem;
        }

        .mt-2 {
            margin-top: 0.5rem !important;
        }

        .pt-3 {
            padding-top: 0.5rem !important;
        }

        .privacy-link {
            text-align: center;
            font-size: 11px;
            margin-top: 1rem;
        }

        .privacy-link a {
            color: #ff9b00;
            text-decoration: none;
        }

        .privacy-link a:hover {
            color: #792db8;
        }

        .privacy-link svg {
            width: 12px;
            height: 12px;
            margin-right: 4px;
        }

        .security-assurance {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 0.75rem;
            font-size: 11px;
            color: #ff9b00;
        }

        .security-assurance i {
            color: #ff9b00;
        }
    </style>
</head>

<body class="@@dashboard" style="margin: 0; overflow: hidden; overflow-y: auto;">
    <div id="preloader"><i>.</i><i>.</i><i>.</i></div>
    <div
        style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(to right, rgba(102, 45, 145, 0.947), rgba(145, 45, 115, 0.893)), url('https://cdn03.allafrica.com/download/pic/main/main/csiid/00611742:63e77387f56223a1509fb944791b01eb:arc614x376:w735:us1.jpg'); background-size: cover; background-position: center;">
    </div>
    <div id="main-wrapper">
        <div class="authincation section-padding">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-xl-5 col-md-6">
                        <div class="my-4 text-center mini-logo">
                            <a href="{{ route('welcome') }}">
                                <img width="160" src="{{ asset('/public/web/images/01-ft-logo.png') }}"
                                    alt="" />
                            </a>
                            <h4 class="text-white" style="margin-top:2rem" id="slogan-text">Financial Inclusion for All!
                            </h4>
                        </div>

                        <div class="auth-form card"
                            style="box-shadow: rgba(255, 255, 255, 0.219) 0px 5px 15px 0px; border-radius:1.3rem">
                            <div class="w-full">
                                <h2 id="create-text" style="color: #792db8" class="mb-2 text-center"> <b>Sign In</b>
                                </h2>
                                <p style="color: #792db8" class="text-center">Do not have an account? <a
                                        class="text-warning" href="{{ route('register') }}">Sign Up</a></p>
                            </div>

                            <x-jet-validation-errors class="text-xs text-center alert alert-danger text-danger" />
                            <div class="">

                                <form name="myform" class=" row g-3" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="col-12">
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="fas fa-envelope text-purple"></i>
                                            </span>
                                            <input type="email" name="email" :value="old('email')" class="form-control"
                                                placeholder="hello@example.com" name="email" />
                                        </div>
                                    </div>
                                    <div class="mt-2 col-12">
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="fas fa-lock text-purple"></i>
                                            </span>
                                            <input type="password" name="password" required class="form-control"
                                                placeholder="Password" id="password" />
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox"
                                                id="flexSwitchCheckDefault" />
                                            <label class="form-check-label" for="flexSwitchCheckDefault">Remember
                                                me</label>
                                        </div>
                                    </div>
                                    <div class="text-right col-6">
                                        <a href="{{ route('password.request') }}">Forgot Password?</a>
                                    </div>
                                    <div class="pt-3 col-12">
                                        <button
                                            style="background-color:#792db8; box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;"
                                            type="submit" class="text-white btn col-12">Login</button>
                                        
                                       
                                    </div>
                                </form>
                                <p class="mt-3 mb-0">
                                    Don't have an account?
                                    <a class="text-primary" href="{{ route('register') }}">Sign up</a>
                                </p>
                            </div>
                        </div>
                        <div class="privacy-link">
                            <a href="{{ route('pp') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                    <path
                                        d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                                </svg>
                                Privacy Policy</a>
                        </div>
                        <div class="security-assurance">
                            <span><i class="fas fa-shield-alt"></i> Secure</span>
                            <span><i class="fas fa-lock"></i> Encrypted</span>
                            <span><i class="fas fa-user-shield"></i> Protected</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ 'public/mfs/vendor/jquery/jquery.min.js' }}"></script>
    <script src="{{ 'public/mfs/vendor/bootstrap/js/bootstrap.bundle.min.js' }}"></script>
    <script src="{{ 'public/mfs/js/scripts.js' }}"></script>
    
    <!-- Add Font Awesome for the eye icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <script>
        // Password toggle functionality
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const icon = this.querySelector('i');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
    </script>
</body>
<!-- Mirrored from tende.vercel.app/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Nov 2023 16:21:44 GMT -->

</html>
