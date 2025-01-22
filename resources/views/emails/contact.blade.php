<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
    <style>
        body {
            font-family: 'Space Grotesk', sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background: white;
            color: #14162E;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 2.5rem;
            background: linear-gradient(145deg, rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.85));
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 24px;
            box-shadow:
                0 8px 32px rgba(0, 0, 0, 0.08),
                inset 0 0 32px rgba(255, 255, 255, 0.6);
        }

        .header {
            text-align: left;
            margin-bottom: 2.5rem;
            background: linear-gradient(135deg, #6366F1, #8B5CF6);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .header h1 {
            font-size: 2rem;
            margin: 0;
            font-weight: 700;
        }

        .meta-info {
            display: inline-block;
            background: linear-gradient(135deg, rgba(99, 102, 241, 0.1), rgba(139, 92, 246, 0.1));
            padding: 0.5rem 1rem;
            border-radius: 12px;
            margin-bottom: 2rem;
            font-size: 0.9rem;
            color: #6366F1;
        }

        .content {
            background: rgba(255, 255, 255, 0.8);
            padding: 2rem;
            border-radius: 20px;
            border: 1px solid rgba(99, 102, 241, 0.1);
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
            color: #6366F1;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .field-label::before {
            content: '';
            display: inline-block;
            width: 8px;
            height: 8px;
            background: linear-gradient(135deg, #6366F1, #8B5CF6);
            border-radius: 50%;
        }

        .field-value {
            color: #14162E;
            font-size: 1rem;
            background: white;
            padding: 1rem;
            border-radius: 12px;
            border: 1px solid rgba(99, 102, 241, 0.1);
            transition: all 0.3s ease;
        }

        .field-value:hover {
            transform: translateX(4px);
            border-color: rgba(99, 102, 241, 0.3);
        }

        .message-field .field-value {
            white-space: pre-wrap;
        }

        .footer {
            text-align: center;
            color: #6366F1;
            font-size: 0.9rem;
            margin-top: 2.5rem;
            padding-top: 1.5rem;
            border-top: 1px solid rgba(99, 102, 241, 0.1);
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

        <div class="meta-info">
            New message received from your website
        </div>

        <div class="content">
            <div class="field">
                <div class="field-label">From</div>
                <div class="field-value">{{ $contact->name }} {{ $contact->last_name }}</div>
            </div>

            <div class="field">
                <div class="field-label">Email</div>
                <div class="field-value">{{ $contact->email }}</div>
            </div>

            <div class="field">
                <div class="field-label">Phone</div>
                <div class="field-value">{{ $contact->phone }}</div>
            </div>

            <div class="field">
                <div class="field-label">Subject</div>
                <div class="field-value">{{ $contact->subject }}</div>
            </div>

            <div class="field message-field">
                <div class="field-label">Message</div>
                <div class="field-value">{{ $contact->message }}</div>
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
