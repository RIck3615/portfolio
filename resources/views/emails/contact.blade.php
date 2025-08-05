<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nouveau message de contact</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .content {
            background: #f9f9f9;
            padding: 20px;
            border-radius: 0 0 8px 8px;
        }
        .field {
            margin-bottom: 15px;
        }
        .field-label {
            font-weight: bold;
            color: #555;
        }
        .field-value {
            background: white;
            padding: 10px;
            border-radius: 4px;
            border-left: 4px solid #667eea;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            color: #666;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Nouveau message de contact</h1>
        <p>Vous avez reçu un nouveau message via votre portfolio</p>
    </div>

    <div class="content">
        <div class="field">
            <div class="field-label">Nom :</div>
            <div class="field-value">{{ $name }}</div>
        </div>

        <div class="field">
            <div class="field-label">Email :</div>
            <div class="field-value">{{ $email }}</div>
        </div>

        <div class="field">
            <div class="field-label">Message :</div>
            <div class="field-value">{{ $message }}</div>
        </div>
    </div>

    <div class="footer">
        <p>Ce message a été envoyé depuis votre portfolio Rick Kasenga</p>
        <p>Date : {{ now()->format('d/m/Y H:i') }}</p>
    </div>
</body>
</html>
