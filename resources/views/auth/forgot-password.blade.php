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
<!-- Tailwind CSS CDN -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Custom Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
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

        .text-primary {
            color: #662d91;
        }

        .text-primary:hover {
            color: #912d73;
        }

        .bg-primary-gradient {
            background: linear-gradient(135deg, #662d91, #912d73);
        }

        .card-title-gradient {
            background: linear-gradient(135deg, #662d91, #912d73);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div id="background-container"></div>
    <div id="main-wrapper">
        <div class="flex items-center justify-center min-h-screen px-4 py-8">
            <div class="w-full max-w-md">
                <div class="mb-8 text-center animate__animated animate__fadeInDown">
                    <a href="{{ route('welcome') }}" class="inline-block transition-transform duration-500 hover:scale-105">
                        <img width="100" src="{{ asset('/public/web/images/01-ft-logo.png') }}" alt="Mighty Finance Logo" />
                    </a>
                    <h4 class="mt-5 text-2xl font-semibold text-white">Reset Your Password</h4>
                </div>
                <div class="transition-all duration-300 transform bg-white shadow-xl bg-opacity-95 rounded-3xl hover:-translate-y-1 hover:shadow-2xl animate__animated animate__fadeIn" style="border-radius:1.3rem">
                    <x-jet-validation-errors class="w-full text-sm text-center text-red-500" />
                    <div class="p-8">
                        <p class="mb-6 text-center text-gray-600">Enter your email address and we'll send you a link to reset your password.</p>
                        <form class="space-y-6" method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="relative">
                                <label class="block mb-2 font-medium text-gray-700">Email Address</label>
                                <div class="relative">
                                    <input type="email" name="email" class="w-full px-4 py-2 transition-all duration-300 bg-white border-2 border-gray-200 h-14 rounded-xl focus:border-purple-400 focus:outline-none focus:ring-2 focus:ring-purple-200 bg-opacity-70" placeholder="Your Email Address" autocomplete="email" required>
                                    <i class="absolute text-purple-600 transform -translate-y-1/2 fas fa-envelope-open right-4 top-1/2"></i>
                                </div>
                            </div>
                            <div class="mt-6 text-center">
                                <button type="submit" class="w-full relative bg-primary-gradient text-white font-semibold py-3 px-6 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-0.5 overflow-hidden btn">
                                    <i class="mr-2 fas fa-paper-plane"></i> Send Reset Link
                                </button>
                            </div>
                        </form>
                        <div class="mt-6 text-center">
                            <div class="flex justify-between text-sm">
                                <a class="font-semibold transition-all duration-300 text-primary hover:underline" href="{{ route('login') }}">
                                    <i class="mr-1 fas fa-arrow-left"></i> Back to Login
                                </a>
                                <a class="font-semibold transition-all duration-300 text-primary hover:underline" href="#">
                                    <i class="mr-1 fas fa-sync-alt"></i> Resend Code
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
