<!DOCTYPE html>
<html>
<head>
    <title>OTP Verification</title>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');

        body {
            font-family: 'Poppins', Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }

        .header {
            background: linear-gradient(135deg, #6a3093 0%, #ad49e7 100%);
            padding: 30px 20px;
            text-align: center;
        }

        .header h1 {
            color: white;
            margin: 0;
            font-size: 24px;
            font-weight: 700;
        }

        .content {
            padding: 30px;
        }

        .otp-box {
            background: #f8f3ff;
            border: 1px dashed #6a3093;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            margin: 25px 0;
        }

        .otp-code {
            font-size: 36px;
            font-weight: 700;
            letter-spacing: 3px;
            color: #6a3093;
            margin: 10px 0;
        }

        .divider {
            height: 2px;
            background: linear-gradient(90deg, rgba(110,69,226,0.1) 0%, rgba(168, 69, 226, 0.5) 50%, rgba(155, 69, 226, 0.1) 100%);
            margin: 30px 0;
        }

        .footer {
            padding: 20px;
            text-align: center;
            font-size: 12px;
            color: #888;
            background: #fafafa;
        }

        .highlight {
            color: #ffc107;
            font-weight: 600;
        }

        .btn {
            display: inline-block;
            background: #6a3093;
            color: white !important;
            text-decoration: none;
            padding: 12px 25px;
            border-radius: 30px;
            font-weight: 600;
            margin: 15px 0;
        }

        p {
            line-height: 1.6;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <h1>Your Verification Code</h1>
        </div>

        <div class="content">
            <p>Hello <span class="highlight">{{ auth()->user()->name ?? 'User' }}</span>,</p>

            <p>We're excited to have you on board! Here's your one-time verification code:</p>

            <div class="otp-box">
                <p>Enter this code in the app:</p>
                <div class="otp-code">{{ $otp }}</div>
                <p style="font-size: 12px; color: #888;">(This code expires in 10 minutes)</p>
            </div>

            <p>For security reasons, please don't share this code with anyone.</p>

            <div class="divider"></div>

            <p>If you didn't request this code, you can safely ignore this email.</p>
        </div>

        <div class="footer">
            <p>© 2023 The Team. All rights reserved.</p>
            <p>Need help? <a href="mailto:support@example.com" style="color: #521b63;">Contact our support team</a></p>
        </div>
    </div>
</body>
</html>