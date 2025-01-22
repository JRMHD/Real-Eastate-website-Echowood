<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EchoWood Enquiry</title>
    <style>
        body {
            font-family: 'Space Grotesk', sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background: white;
            color: #2A3342;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 2.5rem;
            background: linear-gradient(145deg, rgba(255, 255, 255, 0.95), rgba(255, 255, 255, 0.9));
            backdrop-filter: blur(10px);
            border: 1px solid rgba(139, 69, 19, 0.1);
            border-radius: 24px;
            box-shadow:
                0 8px 32px rgba(139, 69, 19, 0.08),
                inset 0 0 32px rgba(255, 255, 255, 0.6);
        }

        .logo {
            text-align: center;
            margin-bottom: 2rem;
            font-size: 1.5rem;
            font-weight: 700;
            background: linear-gradient(135deg, #8B4513, #A0522D);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .header {
            text-align: left;
            margin-bottom: 2rem;
        }

        .notification-badge {
            display: inline-block;
            background: linear-gradient(135deg, rgba(139, 69, 19, 0.1), rgba(160, 82, 45, 0.1));
            padding: 0.5rem 1rem;
            border-radius: 12px;
            margin-bottom: 1.5rem;
            font-size: 0.95rem;
            color: #8B4513;
        }

        .content {
            background: rgba(255, 255, 255, 0.8);
            padding: 2rem;
            border-radius: 20px;
            border: 1px solid rgba(139, 69, 19, 0.1);
            backdrop-filter: blur(5px);
        }

        .field {
            margin-bottom: 1.5rem;
            position: relative;
            overflow: hidden;
        }

        .field:last-child {
            margin-bottom: 0;
        }

        .field-label {
            font-weight: 600;
            color: #8B4513;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .field-label::before {
            content: '🌱';
            font-size: 0.8rem;
        }

        .field-value {
            color: #2A3342;
            font-size: 1rem;
            background: white;
            padding: 1rem;
            border-radius: 12px;
            border: 1px solid rgba(139, 69, 19, 0.1);
            transition: all 0.3s ease;
        }

        .field-value:hover {
            transform: translateX(4px);
            border-color: rgba(139, 69, 19, 0.2);
        }

        .message-field .field-value {
            white-space: pre-wrap;
        }

        .footer {
            text-align: center;
            margin-top: 2.5rem;
            padding-top: 1.5rem;
            border-top: 1px solid rgba(139, 69, 19, 0.1);
        }

        .thank-you {
            color: #8B4513;
            font-weight: 500;
            margin-bottom: 1rem;
        }

        .copyright {
            color: #6B7280;
            font-size: 0.9rem;
        }

        @media (max-width: 640px) {
            .container {
                padding: 1.5rem;
                margin: 1rem;
            }

            .content {
                padding: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Hello Mary! 👋</h1>
        </div>

        <div class="notification-badge">
            New Enquiry Received
        </div>

        <div class="content">
            <div class="field">
                <div class="field-label">Name</div>
                <div class="field-value">{{ $enquiry->name }}</div>
            </div>

            <div class="field">
                <div class="field-label">Email</div>
                <div class="field-value">{{ $enquiry->email }}</div>
            </div>

            <div class="field">
                <div class="field-label">Phone</div>
                <div class="field-value">{{ $enquiry->phone }}</div>
            </div>

            <div class="field">
                <div class="field-label">Interest</div>
                <div class="field-value">{{ $enquiry->echo_wood_interest }}</div>
            </div>

            <div class="field">
                <div class="field-label">Preferred Date</div>
                <div class="field-value">{{ $enquiry->preferred_date }}</div>
            </div>

            <div class="field">
                <div class="field-label">Follow-up Date</div>
                <div class="field-value">{{ $enquiry->follow_up_date }}</div>
            </div>

            <div class="field message-field">
                <div class="field-label">Message</div>
                <div class="field-value">{{ $enquiry->message }}</div>
            </div>
        </div>

        <div class="footer">
            <div class="thank-you">Thank you for choosing EchoWood! 🌳</div>
            <div class="copyright">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script> {{ config('app.name') }} •
            </div>
        </div>
    </div>
</body>

</html>
