<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Mighty Finance Solution | Reset Password</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/web/images/favicon.png') }}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            margin: 0;
            overflow-x: hidden;
            color: #444;
            background-color: #f5f5f5;
        }

        #background-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(102, 45, 145, 0.85), rgba(145, 45, 115, 0.9)),
                url('https://cdn03.allafrica.com/download/pic/main/main/csiid/00611742:63e77387f56223a1509fb944791b01eb:arc614x376:w735:us1.jpg');
            background-size: cover;
            background-position: center;
            animation: gradientShift 15s ease infinite;
        }

        @keyframes gradientShift {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        .authincation {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px 0;
        }

        .container {
            width: 100%;
            max-width: 700px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .authincation-content {
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }

        .authincation-content:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        .mini-logo {
            margin-bottom: 25px;
        }

        .mini-logo img {
            transition: transform 0.5s ease;
        }

        .mini-logo:hover img {
            transform: scale(1.05);
        }

        .card-title {
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 30px;
            background: linear-gradient(135deg, #662d91, #912d73);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: fadeIn 1s ease-out;
        }

        .auth-form {
            padding: 30px;
        }

        .card {
            border: none;
            border-radius: 20px !important;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }

        .form-group {
            margin-bottom: 25px;
            position: relative;
        }

        .form-label {
            font-weight: 500;
            color: #555;
            margin-bottom: 8px;
            display: block;
            font-size: 15px;
        }

        .form-control {
            height: 55px;
            border-radius: 12px;
            border: 2px solid #e9e9e9;
            padding: 10px 20px;
            font-size: 16px;
            transition: all 0.3s ease;
            box-shadow: none;
            background-color: rgba(255, 255, 255, 0.7);
        }

        .form-control:focus {
            border-color: rgba(102, 45, 145, 0.5);
            box-shadow: 0 0 0 3px rgba(102, 45, 145, 0.2);
            background-color: white;
        }

        .btn {
            display: inline-block;
            font-weight: 600;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            user-select: none;
            border: none;
            padding: 12px 30px;
            font-size: 16px;
            line-height: 1.5;
            border-radius: 30px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            cursor: pointer;
        }

        .btn-primary {
            background: linear-gradient(135deg, #662d91, #912d73);
            color: #fff;
            box-shadow: 0 5px 15px rgba(102, 45, 145, 0.3);
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #7b35ac, #a73587);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(102, 45, 145, 0.4);
        }

        .btn-primary:active {
            transform: translateY(1px);
        }

        .btn-block {
            display: block;
            width: 100%;
        }

        .btn::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: 0.5s;
        }

        .btn:hover::before {
            left: 100%;
        }

        .text-danger {
            color: #dc3545;
            font-size: 14px;
            margin-top: 5px;
        }

        .new-account {
            text-align: center;
            margin-top: 20px;
            font-size: 15px;
        }

        .new-account p {
            margin-bottom: 0;
        }

        .text-primary {
            color: #662d91;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .text-primary:hover {
            color: #912d73;
            text-decoration: underline;
        }

        .text-white {
            color: #fff;
        }

        /* Input icon */
        .input-with-icon {
            position: relative;
        }

        .input-icon {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #662d91;
        }

        /* Floating labels effect */
        .floating-label {
            position: relative;
        }

        .floating-input {
            padding: 20px 15px 10px;
        }

        .floating-label label {
            position: absolute;
            top: 15px;
            left: 15px;
            font-size: 16px;
            color: #888;
            pointer-events: none;
            transition: all 0.3s ease;
        }

        .floating-input:focus + label,
        .floating-input:not(:placeholder-shown) + label {
            top: 5px;
            left: 15px;
            font-size: 12px;
            color: #662d91;
        }

        /* Animation classes */
        .fade-in {
            animation: fadeIn 1s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive adjustments */
        @media (max-width: 767px) {
            .authincation-content {
                margin: 15px;
            }

            .auth-form {
                padding: 20px;
            }

            .card-title {
                font-size: 24px;
            }

            .form-control {
                height: 50px;
            }
        }

        /* Progress indicator */
        .password-strength {
            height: 5px;
            background-color: #e9e9e9;
            border-radius: 5px;
            margin-top: 10px;
            overflow: hidden;
        }

        .password-strength-bar {
            height: 100%;
            width: 0;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        /* Custom checkbox */
        .custom-checkbox {
            display: flex;
            align-items: center;
        }

        .custom-checkbox input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        .checkmark {
            height: 20px;
            width: 20px;
            background-color: #eee;
            border-radius: 4px;
            position: relative;
            margin-right: 10px;
            transition: all 0.3s ease;
        }

        .custom-checkbox:hover input ~ .checkmark {
            background-color: #ccc;
        }

        .custom-checkbox input:checked ~ .checkmark {
            background-color: #662d91;
        }

        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        .custom-checkbox input:checked ~ .checkmark:after {
            display: block;
        }

        .custom-checkbox .checkmark:after {
            left: 7px;
            top: 3px;
            width: 6px;
            height: 12px;
            border: solid white;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }
    </style>
</head>

<body class="@@dashboard">
    <div id="background-container"></div>
    <div id="main-wrapper">
        <div class="authincation section-padding">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-xl-4 col-md-5">
                        <div class="my-3 text-center mini-logo animate__animated animate__fadeInDown">
                            <a href="{{ route('welcome') }}">
                                <img width="100" src="{{ asset('/public/web/images/01-ft-logo.png') }}" alt="Mighty Finance Logo" />
                            </a>
                            <h4 class="mt-5 text-white card-title" style="color:#fff">Reset Your Password</h4>
                        </div>
                        <div class="auth-form card animate__animated animate__fadeIn" style="border-radius:1.3rem">
                            <x-jet-validation-errors class="w-full text-sm text-center text-danger" />
                        <div class="card-body">
                                <p class="mb-4 text-center">Enter your email address and we'll send you a link to reset your password.</p>
                                <form class="row g-3" method="POST" action="{{ route('password.email') }}">
                                    @csrf
                                    <div class="form-group col-12 input-with-icon">
                                        <label class="form-label">Email Address</label>
                                        <input type="email" name="email" class="form-control" placeholder="Your Email Address" autocomplete="email" required>
                                        <i class="fas fa-envelope-open input-icon"></i>
                                    </div>
                                    <div class="mt-4 text-center col-12">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            <i class="fas fa-paper-plane me-2"></i> Send Reset Link
                                        </button>
                                    </div>
                                </form>
                                <div class="mt-4 new-account">
                                    <div class="d-flex justify-content-between">
                                        <a class="text-primary" href="{{ route('login') }}">
                                            <i class="fas fa-arrow-left me-1"></i> Back to Login
                                        </a>
                                        <a class="text-primary" href="#">
                                            <i class="fas fa-sync-alt me-1"></i> Resend Code
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>