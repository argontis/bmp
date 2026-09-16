<!DOCTYPE html>
<html>
<head>
    <title>Konfirmasi Kehadiran Relawan - Bakti Merah Putih</title>
</head>
<body style="font-family: Arial, sans-serif; color: #333; line-height: 1.6;">
    <div style="max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 10px;">
        <h2 style="color: #D62828;">Terima Kasih atas Konfirmasi Anda, {{ $volunteer->name }}!</h2>
        
        <p>Kami telah menerima konfirmasi kehadiran Anda untuk program kerelawanan berikut:</p>
        
        <table style="width: 100%; border-collapse: collapse; margin: 20px 0;">
            <tr>
                <td style="padding: 10px; border-bottom: 1px solid #eee; font-weight: bold; width: 120px;">Program</td>
                <td style="padding: 10px; border-bottom: 1px solid #eee;">{{ $volunteer->campaign->name ?? 'Kegiatan Relawan Umum' }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; border-bottom: 1px solid #eee; font-weight: bold;">Tanggal</td>
                <td style="padding: 10px; border-bottom: 1px solid #eee;">
                    @if($volunteer->campaign && $volunteer->campaign->activity_date)
                        {{ \Carbon\Carbon::parse($volunteer->campaign->activity_date)->translatedFormat('l, d F Y') }}
                    @else
                        Menunggu Informasi
                    @endif
                </td>
            </tr>
            <tr>
                <td style="padding: 10px; border-bottom: 1px solid #eee; font-weight: bold;">Status</td>
                <td style="padding: 10px; border-bottom: 1px solid #eee;"><span style="color: #16A34A; font-weight: bold;">Hadir</span></td>
            </tr>
        </table>
        
        <p>Kehadiran Anda sangat berarti bagi kelancaran program ini. Pastikan Anda datang tepat waktu dan membawa perlengkapan yang dibutuhkan (jika ada).</p>
        
        <p>Jika ada pertanyaan lebih lanjut, jangan ragu untuk menghubungi tim Bakti Merah Putih.</p>
        
        <p style="margin-top: 30px;">Salam Hangat,<br><strong>Tim Bakti Merah Putih</strong></p>
    </div>
</body>
</html>
