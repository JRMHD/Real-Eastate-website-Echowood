<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EchoWood Enquiry Confirmation</title>
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

        .greeting {
            font-size: 1.2rem;
            color: #8B4513;
            margin-bottom: 1.5rem;
            font-weight: 500;
        }

        .message {
            background: linear-gradient(135deg, rgba(139, 69, 19, 0.1), rgba(160, 82, 45, 0.1));
            padding: 1.5rem;
            border-radius: 16px;
            margin-bottom: 2rem;
            color: #2A3342;
        }

        .details {
            background: rgba(255, 255, 255, 0.8);
            padding: 2rem;
            border-radius: 20px;
            border: 1px solid rgba(139, 69, 19, 0.1);
            backdrop-filter: blur(5px);
            margin-bottom: 2rem;
        }

        .details-header {
            font-weight: 600;
            color: #8B4513;
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .details-header::before {
            content: '🌱';
            font-size: 1rem;
        }

        .field {
            margin-bottom: 1.5rem;
            position: relative;
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
        }

        .field-value {
            color: #2A3342;
            font-size: 1rem;
            background: white;
            padding: 1rem;
            border-radius: 12px;
            border: 1px solid rgba(139, 69, 19, 0.1);
        }

        .closing {
            color: #2A3342;
            margin-bottom: 1.5rem;
        }

        .signature {
            color: #8B4513;
            font-weight: 500;
        }

        .footer {
            text-align: center;
            margin-top: 2.5rem;
            padding-top: 1.5rem;
            border-top: 1px solid rgba(139, 69, 19, 0.1);
            color: #6B7280;
            font-size: 0.9rem;
        }

        @media (max-width: 640px) {
            .container {
                padding: 1.5rem;
                margin: 1rem;
            }

            .details {
                padding: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="greeting">
            Dear {{ $enquiry->name }},
        </div>

        <div class="message">
            Thank you for contacting EchoWood. We have received your enquiry and will get back to you as soon as
            possible.
        </div>

        <div class="details">
            <div class="details-header">Enquiry Details</div>

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

            {{-- <div class="field">
                <div class="field-label">Follow-up Date</div>
                <div class="field-value">{{ $enquiry->follow_up_date }}</div>
            </div> --}}
        </div>

        <div class="closing">
            We appreciate your interest, and someone from our team will be in touch soon!
        </div>

        <div class="signature">
            Best regards,<br>
            {{ config('app.name') }} Team
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
