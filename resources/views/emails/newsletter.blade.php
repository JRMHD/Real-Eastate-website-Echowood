<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Newsletter Subscriber</title>
    <style>
        body {
            font-family: 'Space Grotesk', sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background: white;
            color: #1F2937;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 2rem;
            background: linear-gradient(145deg, rgba(255, 255, 255, 0.95), rgba(255, 255, 255, 0.9));
            backdrop-filter: blur(10px);
            border: 1px solid rgba(99, 102, 241, 0.1);
            border-radius: 20px;
            box-shadow:
                0 8px 32px rgba(0, 0, 0, 0.05),
                inset 0 0 32px rgba(255, 255, 255, 0.6);
        }

        .header {
            margin-bottom: 2rem;
        }

        .greeting {
            font-size: 1.25rem;
            font-weight: 600;
            color: #4F46E5;
            margin-bottom: 1rem;
        }

        .notification {
            background: linear-gradient(135deg, rgba(79, 70, 229, 0.1), rgba(99, 102, 241, 0.1));
            padding: 1rem;
            border-radius: 12px;
            margin-bottom: 1.5rem;
        }

        .email-box {
            background: white;
            padding: 1rem;
            border-radius: 12px;
            border: 1px solid rgba(99, 102, 241, 0.2);
            margin-top: 1rem;
        }

        .label {
            font-weight: 600;
            color: #4F46E5;
            margin-right: 0.5rem;
        }

        .footer {
            text-align: center;
            margin-top: 2rem;
            padding-top: 1.5rem;
            border-top: 1px solid rgba(99, 102, 241, 0.1);
            color: #6B7280;
            font-size: 0.9rem;
        }

        @media (max-width: 640px) {
            .container {
                padding: 1.5rem;
                margin: 1rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="greeting">Hello, Mary! ✨</div>
        </div>

        <div class="notification">
            <p>A new subscriber has joined the newsletter with the following email:</p>
            <div class="email-box">
                <span class="label">Email:</span>
                <span>{{ $email }}</span>
            </div>
        </div>

        <div class="footer">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script> {{ config('app.name') }} •
        </div>
    </div>
</body>

</html>
