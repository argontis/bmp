<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - Bakti Merah Putih</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #D32F2F;
            --primary-dark: #B71C1C;
            --text-main: #1F2937;
            --text-muted: #6B7280;
            --bg-gray: #F3F4F6;
            --border-color: #E5E7EB;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: #f9fafb;
            display: flex;
            justify-content: center;
            min-height: 100vh;
        }

        .app-container {
            width: 100%;
            max-width: 480px;
            background-color: #ffffff;
            position: relative;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            display: flex;
            flex-direction: column;
            overflow-x: hidden;
        }

        /* Hero Section */
        .hero {
            position: relative;
            height: 340px;
            background-image: url('/images/bg.png');
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 24px;
            color: white;
            text-align: center;
            z-index: 1;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, rgba(31, 41, 55, 0.6) 0%, rgba(211, 47, 47, 0.85) 100%);
            z-index: -1;
        }

        .back-btn {
            position: absolute;
            top: 24px;
            left: 24px;
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: 500;
            font-size: 14px;
        }

        .logo-container {
            margin-top: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .logo-text {
            font-size: 32px;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .logo-text span {
            font-weight: 400;
        }

        .logo-badge {
            background-color: #D32F2F;
            padding: 2px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 600;
            margin-left: 4px;
        }

        .hero-subtitle {
            margin-top: 16px;
            font-size: 14px;
            font-weight: 500;
        }

        .badges {
            display: flex;
            gap: 12px;
            margin-top: 16px;
        }

        .badge {
            background-color: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.4);
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        /* Form Section */
        .form-section {
            background-color: #ffffff;
            border-top-left-radius: 24px;
            border-top-right-radius: 24px;
            padding: 32px 24px;
            margin-top: -30px;
            z-index: 2;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .welcome-title {
            color: #1e3a8a; /* Dark blue */
            font-size: 24px;
            font-weight: 700;
            text-align: center;
        }

        .welcome-subtitle {
            color: var(--text-muted);
            text-align: center;
            font-size: 14px;
            margin-top: 8px;
            margin-bottom: 24px;
        }

        .tabs {
            display: flex;
            background-color: var(--bg-gray);
            border-radius: 12px;
            padding: 4px;
            margin-bottom: 24px;
        }

        .tab {
            flex: 1;
            text-align: center;
            padding: 12px 0;
            font-weight: 600;
            font-size: 14px;
            color: var(--text-muted);
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .tab.active {
            background-color: #ffffff;
            color: var(--text-main);
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }

        .google-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            width: 100%;
            padding: 14px;
            border: 1px solid var(--border-color);
            border-radius: 12px;
            background-color: #ffffff;
            font-weight: 600;
            font-size: 14px;
            color: var(--text-main);
            cursor: pointer;
            transition: background-color 0.2s;
            margin-bottom: 24px;
        }

        .google-btn:hover {
            background-color: var(--bg-gray);
        }

        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            margin-bottom: 24px;
            color: var(--text-muted);
            font-size: 12px;
        }

        .divider::before, .divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid var(--border-color);
        }

        .divider::before { margin-right: 12px; }
        .divider::after { margin-left: 12px; }

        .input-group {
            position: relative;
            margin-bottom: 16px;
        }

        .input-group input {
            width: 100%;
            padding: 16px 16px 16px 48px;
            border: none;
            background-color: var(--bg-gray);
            border-radius: 12px;
            font-size: 14px;
            color: var(--text-main);
            outline: none;
            transition: ring 0.2s;
        }
        
        .input-group input:focus {
            box-shadow: 0 0 0 2px var(--primary);
        }

        .input-icon {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #9CA3AF;
            display: flex;
            align-items: center;
        }

        .eye-icon {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #9CA3AF;
            cursor: pointer;
            display: flex;
            align-items: center;
        }

        .forgot-password {
            display: block;
            text-align: right;
            color: var(--primary);
            font-size: 13px;
            font-weight: 600;
            text-decoration: none;
            margin-bottom: 24px;
        }

        .submit-btn {
            width: 100%;
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 16px;
            border-radius: 12px;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 8px;
            transition: background-color 0.2s, transform 0.1s;
            box-shadow: 0 4px 14px rgba(211, 47, 47, 0.4);
        }

        .submit-btn:hover {
            background-color: var(--primary-dark);
        }
        
        .submit-btn:active {
            transform: scale(0.98);
        }

        .trust-badges {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 12px;
            margin-top: 24px;
            font-size: 12px;
            color: #9CA3AF;
        }

        .trust-badge {
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .trust-badge svg {
            color: #10B981; /* Emerald green */
        }
        
        .dot {
            width: 4px;
            height: 4px;
            background-color: #D1D5DB;
            border-radius: 50%;
        }

        .terms {
            text-align: center;
            font-size: 11px;
            color: #9CA3AF;
            margin-top: 24px;
            line-height: 1.5;
        }

        .terms a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
        }

    </style>
</head>
<body>
    <div class="app-container">
        <!-- Hero Section -->
        <div class="hero">
            <a href="#" class="back-btn">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 12H5M12 19l-7-7 7-7"/>
                </svg>
                Kembali
            </a>

            <div class="logo-container">
                <div class="logo-text">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-right:-8px;">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" fill="#D32F2F"/>
                    </svg>
                    Bakti <span>Merah Putih</span>
                </div>
            </div>

            <p class="hero-subtitle">Bersama Menebar Kebaikan untuk Indonesia</p>

            <div class="badges">
                <div class="badge">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                    Terverifikasi
                </div>
                <div class="badge">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                    78 Program Aktif
                </div>
            </div>
        </div>

        <!-- Form Section -->
        <div class="form-section">
            <h1 class="welcome-title">Selamat Datang</h1>
            <p class="welcome-subtitle">Masuk untuk mulai berdonasi</p>

            <div class="tabs">
                <div class="tab active">Masuk</div>
                <div class="tab">Daftar</div>
            </div>

            <button class="google-btn">
                <svg width="20" height="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                    <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                    <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                    <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                </svg>
                Lanjutkan dengan Google
            </button>

            <div class="divider">atau dengan email</div>

            <form action="#" method="POST">
                <div class="input-group">
                    <div class="input-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    </div>
                    <input type="email" placeholder="Alamat email" required>
                </div>

                <div class="input-group">
                    <div class="input-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                    </div>
                    <input type="password" placeholder="Kata sandi" required>
                    <div class="eye-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                    </div>
                </div>

                <a href="#" class="forgot-password">Lupa kata sandi?</a>

                <button type="submit" class="submit-btn">
                    Masuk Sekarang
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                </button>
            </form>

            <div class="trust-badges">
                <div class="trust-badge">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><polyline points="9 12 11 14 15 10"></polyline></svg>
                    Data aman & terenkripsi
                </div>
                <div class="dot"></div>
                <div class="trust-badge">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                    Terverifikasi resmi
                </div>
            </div>

            <p class="terms">
                Dengan masuk, Anda menyetujui <a href="#">Syarat & Ketentuan</a> dan <a href="#">Kebijakan Privasi</a> Bakti Merah Putih
            </p>
        </div>
    </div>
</body>
</html>
