<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sertifikat Kebaikan</title>
    <style>
        body { font-family: sans-serif; text-align: center; }
        .certificate { border: 10px solid #12355B; padding: 50px; margin: 20px; }
        .title { font-size: 36px; color: #D62828; margin-bottom: 20px; font-weight: bold; }
        .subtitle { font-size: 18px; color: #62758A; margin-bottom: 40px; }
        .name { font-size: 28px; font-weight: bold; color: #1B1B1B; border-bottom: 2px solid #D62828; display: inline-block; padding-bottom: 10px; margin-bottom: 40px; min-width: 300px; }
        .message { font-size: 16px; color: #5B5B5B; line-height: 1.6; margin-bottom: 50px; padding: 0 40px; }
        .footer { font-size: 14px; color: #888; margin-top: 50px; border-top: 1px solid #ccc; padding-top: 20px; }
        .logo { font-size: 24px; font-weight: bold; color: #12355B; margin-bottom: 30px; }
    </style>
</head>
<body>
    <div class="certificate">
        <div class="logo">
            <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('images/logo.webp'))) }}" alt="Bakti Merah Putih Logo" style="height: 100px; display: block; margin: 0 auto;">
        </div>
        <div class="title">SERTIFIKAT KEBAIKAN</div>
        <div class="subtitle">Diberikan dengan penuh rasa terima kasih kepada:</div>
        <div class="name">{{ auth()->check() ? auth()->user()->name : 'Relawan/Donatur Kebaikan' }}</div>
        <div class="message">
            Atas dedikasi, kontribusi, dan semangat kepedulian sosial yang telah diberikan dalam berbagai program kemanusiaan, pendidikan, dan lingkungan bersama Bakti Merah Putih.<br><br>
            Kebaikan Anda telah membawa perubahan positif bagi mereka yang membutuhkan.
        </div>
        <div class="footer">
            Diterbitkan pada: {{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}<br>
            <strong>Bakti Merah Putih</strong>
        </div>
    </div>
</body>
</html>
