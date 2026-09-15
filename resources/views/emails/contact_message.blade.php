<!DOCTYPE html>
<html>
<head>
    <title>Pesan dari Website</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <h2>Anda mendapatkan pesan baru dari Website Bakti Merah Putih</h2>
    
    <p><strong>Nama:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Subjek (Kategori):</strong> {{ ucfirst($data['subject']) }}</p>
    
    <br>
    <p><strong>Isi Pesan:</strong></p>
    <div style="background-color: #f9f9f9; padding: 15px; border-left: 4px solid #D62828;">
        {!! nl2br(e($data['message'])) !!}
    </div>

    <br>
    <p style="font-size: 12px; color: #777;">Email ini dikirim secara otomatis dari halaman form kontak website Bakti Merah Putih.</p>
</body>
</html>
