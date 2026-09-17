import re
import os

# 1. Create user_laporan.blade.php
history = open('resources/views/history.blade.php').read()

# Replace the title and header
content = history.replace('Riwayat - Bakti Merah Putih', 'Laporan - Bakti Merah Putih')
content = content.replace('Riwayat Donasi', 'Laporan Keuangan & Penyaluran')
content = content.replace('Riwayat &amp; Bukti Donasi', 'Laporan Tahunan')
content = content.replace('Setiap transaksi tersimpan dengan kuitansi resmi dan link penelusuran program.', 'Transparansi dana donasi dan pengeluaran Bakti Merah Putih.')

# We need to replace the content of the mobile view and desktop view
# But actually, instead of complex parsing, I'll just write a fresh PHP script to generate it cleanly or use a regex to replace the section.
