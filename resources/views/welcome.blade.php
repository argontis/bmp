<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakti Merah Putih - Yayasan Sosial & Kemanusiaan</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #D62828; /* Red */
            --primary-dark: #DC2626;
            --text-light: #F9FAFB;
            --text-gray: #9CA3AF;
            --glass-bg: rgba(31, 41, 55, 0.4);
            --glass-border: rgba(255, 255, 255, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: #0F172A; /* Fallback dark blue */
            color: var(--text-light);
            overflow-x: hidden;
        }

        /* Hero Section */
        .hero {
            position: relative;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background-image: url('/images/hero-bg.png');
            background-size: cover;
            background-position: center;
        }

        /* Overlays */
        .hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(90deg, rgba(15, 23, 42, 0.95) 0%, rgba(15, 23, 42, 0.8) 40%, rgba(15, 23, 42, 0.4) 100%);
            z-index: 1;
        }

        .hero::after {
            content: '';
            position: absolute;
            inset: 0;
            background-image: radial-gradient(rgba(255, 255, 255, 0.1) 1px, transparent 1px);
            background-size: 24px 24px;
            z-index: 2;
            opacity: 0.5;
            mask-image: linear-gradient(to right, black 20%, transparent 80%);
            -webkit-mask-image: linear-gradient(to right, black 20%, transparent 80%);
        }

        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 24px;
            width: 100%;
            position: relative;
            z-index: 10;
        }

        /* Navbar */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 24px 0;
        }

        .logo {
            display: flex;
            align-items: center;
            font-size: 28px;
            font-weight: 800;
            color: white;
            text-decoration: none;
        }

        .logo svg {
            margin-right: -4px;
        }

        .logo span {
            font-weight: 400;
            font-size: 16px;
            display: block;
            margin-top: -4px;
            color: #E2E8F0;
        }

        .nav-links {
            display: flex;
            gap: 24px;
        }

        .nav-link {
            color: #E2E8F0;
            text-decoration: none;
            font-size: 13px;
            font-weight: 500;
            position: relative;
            transition: color 0.2s;
        }

        .nav-link:hover {
            color: white;
        }

        .nav-link.active {
            color: white;
        }

        .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: -6px;
            left: 50%;
            transform: translateX(-50%);
            width: 4px;
            height: 4px;
            background-color: var(--primary);
            border-radius: 50%;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 12px 24px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 13px;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.2s;
            border: none;
        }

        .btn-primary {
            background-color: var(--primary);
            color: white;
            box-shadow: 0 4px 14px rgba(239, 68, 68, 0.4);
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
        }

        .btn-outline {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
        }

        .btn-outline:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        /* Main Content Grid */
        .hero-content {
            flex: 1;
            display: grid;
            grid-template-columns: 1.35fr 0.65fr;
            gap: 60px;
            align-items: center;
            padding-top: 80px;
            padding-bottom: 60px;
        }

        /* Left Column */
        .badge-top {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background-color: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.15);
            padding: 6px 16px;
            border-radius: 30px;
            font-size: 13px;
            font-weight: 500;
            color: #E2E8F0;
            margin-bottom: 24px;
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
        }

        .badge-top .dot {
            width: 8px;
            height: 8px;
            background-color: #10B981;
            border-radius: 50%;
            animation: pulse-green 2s infinite ease-in-out;
        }

        @keyframes pulse-green {
            0% {
                background-color: #047857; /* Hijau Tua */
                box-shadow: 0 0 0 0 rgba(110, 231, 183, 0.4);
            }
            50% {
                background-color: #6EE7B7; /* Hijau Muda */
                box-shadow: 0 0 0 6px rgba(110, 231, 183, 0);
            }
            100% {
                background-color: #047857; /* Hijau Tua */
                box-shadow: 0 0 0 0 rgba(110, 231, 183, 0);
            }
        }

        .headline {
            font-size: 64px;
            line-height: 1.1;
            font-weight: 800;
            margin-bottom: 24px;
            letter-spacing: -0.02em;
        }

        .headline .highlight {
            color: var(--primary);
            position: relative;
            display: inline-block;
        }

        .headline .highlight::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 4px;
            width: 100%;
            height: 6px;
            background-color: var(--primary);
            border-radius: 4px;
            opacity: 0.8;
            transform: rotate(-1deg);
        }

        .description {
            font-size: 18px;
            line-height: 1.6;
            color: #CBD5E1;
            margin-bottom: 40px;
            max-width: 90%;
        }

        .cta-group {
            display: flex;
            gap: 16px;
            margin-bottom: 40px;
        }

        .trust-badges-bottom {
            display: flex;
            gap: 24px;
            font-size: 13px;
            color: #94A3B8;
        }

        .trust-badge-item {
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .trust-badge-item svg {
            color: #10B981;
        }

        /* Right Column - Glass Card */
        .glass-card {
            background-color: var(--glass-bg);
            border: 1px solid var(--glass-border);
            border-radius: 24px;
            padding: 32px;
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        }

        .card-header {
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 600;
            font-size: 14px;
            margin-bottom: 32px;
        }

        .card-header-icon {
            background-color: rgba(245, 158, 11, 0.2);
            color: #F59E0B;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .stats-list {
            display: flex;
            flex-direction: column;
            gap: 24px;
            margin-bottom: 32px;
        }

        .stat-item {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .stat-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .icon-red { background-color: rgba(239, 68, 68, 0.15); color: #D62828; }
        .icon-blue { background-color: rgba(59, 130, 246, 0.15); color: #3B82F6; }
        .icon-green { background-color: rgba(16, 185, 129, 0.15); color: #10B981; }
        .icon-orange { background-color: rgba(245, 158, 11, 0.15); color: #F59E0B; }

        .stat-info h3 {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 2px;
        }

        .stat-info p {
            font-size: 13px;
            color: #94A3B8;
        }

        .update-card {
            background-color: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 16px;
            padding: 20px;
        }

        .update-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            color: #10B981;
            font-size: 11px;
            font-weight: 600;
            margin-bottom: 12px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .update-badge .dot {
            width: 4px;
            height: 4px;
            background-color: currentColor;
            border-radius: 50%;
        }

        .update-text {
            font-size: 14px;
            line-height: 1.5;
            font-weight: 500;
            margin-bottom: 12px;
        }

        .update-meta {
            font-size: 12px;
            color: #94A3B8;
        }

        /* Pagination Dots */
        .pagination {
            position: absolute;
            bottom: 40px;
            right: 40px;
            display: flex;
            gap: 8px;
            z-index: 10;
        }

        .page-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.3);
            cursor: pointer;
            transition: all 0.2s;
        }

        .page-dot.active {
            width: 24px;
            border-radius: 4px;
            background-color: white;
        }

        @media (max-width: 1024px) {
            .hero-content {
                grid-template-columns: 1fr;
                gap: 40px;
            }
            .headline {
                font-size: 48px;
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            .headline {
                font-size: 40px;
            }
            .cta-group {
                flex-direction: column;
            }
            .trust-badges-bottom {
                flex-wrap: wrap;
            }
        }

        /* Stats Bar */
        .stats-floating {
            background-color: #FBFAF7;
            border-radius: 24px;
            padding: 32px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 10px 40px -10px rgba(0, 0, 0, 0.08);
            max-width: 1280px;
            margin: 60px auto;
            width: calc(100% - 48px);
        }

        .stat-box {
            text-align: center;
            flex: 1;
            position: relative;
        }

        .stat-box:not(:last-child)::after {
            content: '';
            position: absolute;
            right: 0;
            top: 10%;
            height: 80%;
            width: 1px;
            background-color: #E5E7EB;
        }

        .stat-box-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 16px;
        }

        .stat-box-icon.red { background-color: #FEE2E2; color: #D62828; }
        .stat-box-icon.blue { background-color: #DBEAFE; color: #3B82F6; }
        .stat-box-icon.green { background-color: #D1FAE5; color: #10B981; }
        .stat-box-icon.orange { background-color: #FFEDD5; color: #F97316; }
        .stat-box-icon.yellow { background-color: #FEF3C7; color: #F59E0B; }

        .stat-box h3 {
            font-size: 28px;
            font-weight: 800;
            color: #111827;
            margin-bottom: 4px;
        }

        .stat-box p {
            font-size: 13px;
            font-weight: 600;
            color: #6B7280;
        }

        /* Program Section */
        .program-section {
            padding: 120px 24px 100px;
            max-width: 1280px;
            margin: 0 auto;
            background-color: #FBFAF7;
        }

        body {
            background-color: #FBFAF7;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-bottom: 40px;
        }

        .section-label {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #D62828;
            font-size: 13px;
            font-weight: 800;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 16px;
        }

        .section-label::before {
            content: '';
            width: 32px;
            height: 2px;
            background-color: #D62828;
        }

        .section-title {
            font-size: 40px;
            font-weight: 800;
            color: #0F172A;
            line-height: 1.1;
            letter-spacing: -0.02em;
        }

        .btn-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 12px 24px;
            border-radius: 30px;
            border: 1px solid #CBD5E1;
            color: #334155;
            font-weight: 600;
            font-size: 14px;
            text-decoration: none;
            transition: all 0.2s;
            background-color: white;
        }

        .btn-link:hover {
            border-color: #94A3B8;
            color: #0F172A;
        }

        .program-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
        }

        .program-card {
            background-color: white;
            border: 1px solid #E2E8F0;
            border-radius: 20px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            transition: transform 0.2s, box-shadow 0.2s;
            position: relative;
        }

        .program-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 24px -10px rgba(0, 0, 0, 0.1);
        }

        .card-image-wrap {
            position: relative;
            height: 180px;
        }

        .card-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .card-badge {
            position: absolute;
            top: 16px;
            left: 16px;
            background-color: white;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 800;
        }

        .card-badge.blue { color: #3B82F6; }
        .card-badge.red { color: #D62828; }
        .card-badge.green { color: #10B981; }
        .card-badge.orange { color: #F97316; }

        .card-icon-float {
            position: absolute;
            bottom: -16px;
            left: 20px;
            width: 32px;
            height: 32px;
            background-color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            z-index: 2;
        }

        .card-icon-float.blue { color: #3B82F6; }
        .card-icon-float.red { color: #D62828; }
        .card-icon-float.green { color: #10B981; }
        .card-icon-float.orange { color: #F97316; }

        .card-content {
            padding: 32px 20px 24px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .card-title {
            font-size: 18px;
            font-weight: 800;
            color: #0F172A;
            margin-bottom: 12px;
        }

        .card-desc {
            font-size: 13px;
            color: #64748B;
            line-height: 1.6;
            margin-bottom: 24px;
            flex-grow: 1;
            font-weight: 500;
        }

        .card-footer {
            border-top: 1px solid #F1F5F9;
            padding-top: 16px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 11px;
            font-weight: 700;
        }

        .card-stat {
            color: #64748B;
        }

        .card-link {
            display: flex;
            align-items: center;
            gap: 4px;
            text-decoration: none;
        }
        
        .card-link.blue { color: #3B82F6; }
        .card-link.red { color: #D62828; }
        .card-link.green { color: #10B981; }
        .card-link.orange { color: #F97316; }

        @media (max-width: 1024px) {
            .stats-floating {
                flex-wrap: wrap;
                gap: 24px;
                padding: 24px;
            }
            .stat-box {
                flex: 1 1 calc(33.333% - 24px);
            }
            .stat-box::after { display: none; }
            
            .program-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        /* How to Donate Section */
        .how-to-donate {
            padding: 80px 24px 100px;
            max-width: 1280px;
            margin: 0 auto;
            text-align: center;
            background-color: #FBFAF7;
        }

        .htd-header {
            margin-bottom: 64px;
        }

        .htd-steps {
            display: flex;
            justify-content: space-between;
            position: relative;
            max-width: 1100px;
            margin: 0 auto;
        }

        /* The connecting dotted line */
        .htd-steps::before {
            content: '';
            position: absolute;
            top: 40px; /* half of 80px block */
            left: 10%;
            right: 10%;
            height: 0;
            border-top: 2px dashed rgba(239, 68, 68, 0.3); /* Red dashed line */
            z-index: 1;
        }

        .htd-step-item {
            flex: 1;
            position: relative;
            z-index: 2;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 0 12px;
        }

        .htd-icon-box {
            width: 80px;
            height: 80px;
            background-color: white;
            border-radius: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.08);
            margin-bottom: 24px;
            position: relative;
        }

        .htd-icon-box svg {
            color: #D62828;
            width: 28px;
            height: 28px;
        }

        .htd-step-num {
            position: absolute;
            top: -6px;
            right: -6px;
            width: 22px;
            height: 22px;
            background-color: #1E293B;
            color: white;
            border-radius: 50%;
            font-size: 11px;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 3px solid #F8FAFC;
            box-sizing: content-box;
        }

        .htd-title {
            font-size: 15px;
            font-weight: 800;
            color: #0F172A;
            margin-bottom: 12px;
        }

        .htd-desc {
            font-size: 12px;
            color: #64748B;
            line-height: 1.6;
            font-weight: 500;
        }

        @media (max-width: 768px) {
            .htd-steps {
                flex-direction: column;
                gap: 48px;
            }
            .htd-steps::before {
                display: none;
            }
        }

        /* Donation Section */
        .donation-section {
            padding: 80px 40px 100px;
            max-width: 1280px;
            margin: 0 auto;
            position: relative;
            background-color: #FFFFFF;
            border-radius: 40px;
        }

        /* Ambient backgrounds */
        .ambient-glow-left {
            position: absolute;
            top: 20%;
            left: -10%;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(239,68,68,0.06) 0%, rgba(255,255,255,0) 70%);
            z-index: 0;
            pointer-events: none;
        }

        .ambient-glow-right {
            position: absolute;
            bottom: -10%;
            right: -10%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(59,130,246,0.04) 0%, rgba(255,255,255,0) 70%);
            z-index: 0;
            pointer-events: none;
        }

        .donation-header {
            text-align: center;
            margin-bottom: 48px;
            position: relative;
            z-index: 2;
        }

        .donation-label {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            color: #D62828;
            font-size: 13px;
            font-weight: 800;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 16px;
        }

        .donation-label::before,
        .donation-label::after {
            content: '';
            width: 32px;
            height: 1px;
            background-color: #D62828;
            opacity: 0.5;
        }

        .donation-title {
            font-size: 40px;
            font-weight: 800;
            color: #0F172A;
            margin-bottom: 16px;
        }

        .donation-subtitle {
            font-size: 15px;
            color: #64748B;
            max-width: 500px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .donation-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            position: relative;
            z-index: 2;
        }

        .donate-card {
            background-color: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 20px 25px -5px rgba(0, 0, 0, 0.05);
            display: flex;
            flex-direction: column;
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .donate-card:hover {
            transform: translateY(-8px);
        }

        .d-card-image {
            position: relative;
            height: 220px;
        }

        .d-card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .d-card-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.7) 0%, transparent 60%);
        }

        .d-badge-group {
            position: absolute;
            top: 16px;
            left: 16px;
            display: flex;
            gap: 8px;
        }

        .d-badge {
            background-color: white;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 800;
            color: #0F172A;
        }

        .d-badge.warning {
            background-color: #F59E0B;
            color: white;
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .d-timer {
            position: absolute;
            bottom: 16px;
            right: 16px;
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
            color: white;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .d-card-body {
            padding: 24px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .d-card-title {
            font-size: 17px;
            font-weight: 800;
            color: #0F172A;
            line-height: 1.4;
            margin-bottom: 24px;
        }

        .d-progress-wrap {
            margin-bottom: 24px;
            margin-top: auto;
        }

        .d-progress-stats {
            display: flex;
            justify-content: space-between;
            font-size: 11px;
            margin-bottom: 10px;
        }

        .d-terkumpul {
            color: #94A3B8;
            font-weight: 500;
        }

        .d-terkumpul span {
            color: #D62828;
            font-weight: 800;
        }

        .d-donatur {
            color: #94A3B8;
            font-weight: 500;
        }

        .d-progress-bar {
            width: 100%;
            height: 6px;
            background-color: #E2E8F0;
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 16px;
        }

        .d-progress-fill {
            height: 100%;
            background-color: #D62828;
            border-radius: 10px;
        }

        .d-amount-row {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .d-amount-current {
            font-size: 18px;
            font-weight: 800;
            color: #0F172A;
        }

        .d-amount-target {
            font-size: 11px;
            color: #94A3B8;
            font-weight: 500;
        }

        .btn-donate-full {
            display: block;
            width: 100%;
            text-align: center;
            background-color: var(--primary);
            color: white;
            padding: 14px;
            border-radius: 30px;
            font-weight: 700;
            font-size: 14px;
            text-decoration: none;
            transition: all 0.2s;
        }

        .btn-donate-full:hover {
            background-color: var(--primary-dark);
        }

        @media (max-width: 1024px) {
            .donation-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .donation-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Gallery Section (Bento Grid) */
        .gallery-section {
            padding: 100px 40px;
            max-width: 1280px;
            margin: 0 auto;
            background-color: #FFFFFF;
            border-radius: 40px;
        }

        .gallery-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-bottom: 48px;
        }

        .gallery-header-left {
            max-width: 600px;
        }

        .gallery-title {
            font-size: 40px;
            font-weight: 800;
            color: #0F172A;
            line-height: 1.2;
            margin-bottom: 0;
        }
        
        .gallery-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #0F172A;
            font-size: 14px;
            font-weight: 700;
            text-decoration: none;
            transition: color 0.2s;
            margin-bottom: 8px; /* align nicely with the text */
        }
        
        .gallery-link:hover {
            color: #D62828;
        }

        .bento-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(2, 280px);
            gap: 24px;
        }

        .bento-item {
            border-radius: 24px;
            overflow: hidden;
            position: relative;
        }

        .bento-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .bento-item:hover img {
            transform: scale(1.05);
        }

        .bento-1 {
            grid-column: span 1;
            grid-row: span 2;
        }

        .bento-2 {
            grid-column: span 2;
            grid-row: span 1;
        }

        .bento-3 {
            grid-column: span 1;
            grid-row: span 1;
        }

        .bento-4 {
            grid-column: span 1;
            grid-row: span 1;
        }
        
        .bento-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 32px 24px 24px;
            background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, transparent 100%);
            color: white;
            font-size: 13px;
            font-weight: 600;
        }

        @media (max-width: 1024px) {
            .bento-grid {
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: auto;
            }
            .bento-1 {
                grid-column: span 2;
                height: 400px;
            }
            .bento-2 {
                grid-column: span 2;
                height: 300px;
            }
            .bento-3, .bento-4 {
                grid-column: span 1;
                height: 250px;
            }
            .gallery-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 24px;
            }
        }

        @media (max-width: 768px) {
            .bento-grid {
                grid-template-columns: 1fr;
            }
            .bento-1, .bento-2, .bento-3, .bento-4 {
                grid-column: span 1;
                height: 300px;
            }
        }

        /* Testimonial & Partners Section */
        .tp-section {
            background-color: #1E293B; /* Or #0F172A depending on color picker */
            padding: 100px 24px;
            position: relative;
            overflow: hidden;
        }

        .tp-ambient {
            position: absolute;
            top: 0;
            right: 0;
            width: 800px;
            height: 800px;
            background: radial-gradient(circle, rgba(239,68,68,0.05) 0%, rgba(30,41,59,0) 60%);
            pointer-events: none;
            transform: translate(30%, -30%);
        }

        .tp-container {
            max-width: 1280px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 64px;
            position: relative;
            z-index: 2;
        }

        /* Left: Testimonial */
        .tp-left {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .tp-quote-icon {
            color: #D62828;
            margin-bottom: 24px;
            opacity: 0.9;
        }

        .tp-quote-text {
            font-size: 32px;
            font-weight: 800;
            color: white;
            line-height: 1.4;
            margin-bottom: 32px;
        }

        .tp-profile {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 48px;
        }

        .tp-avatar-wrapper {
            position: relative;
            width: 56px;
            height: 56px;
        }

        .tp-avatar {
            width: 100%;
            height: 100%;
            border-radius: 12px;
            object-fit: cover;
        }

        .tp-status-dot {
            position: absolute;
            bottom: -2px;
            right: -2px;
            width: 14px;
            height: 14px;
            background-color: #10B981;
            border: 2px solid #1E293B;
            border-radius: 50%;
        }

        .tp-name {
            font-size: 16px;
            font-weight: 700;
            color: white;
            margin-bottom: 4px;
        }

        .tp-role {
            font-size: 13px;
            color: #94A3B8;
        }

        .tp-rating {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .tp-stars {
            display: flex;
            gap: 4px;
            color: #F59E0B;
        }

        .tp-rating-text {
            font-size: 13px;
            color: #94A3B8;
        }

        /* Right: Partners */
        .tp-right {
            display: flex;
            flex-direction: column;
        }

        .tp-right-label {
            font-size: 12px;
            font-weight: 700;
            color: #94A3B8;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 24px;
        }

        .tp-partners-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 16px;
            margin-bottom: 32px;
        }

        .tp-partner-box {
            background-color: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 16px;
            padding: 16px 20px;
            display: flex;
            align-items: center;
            gap: 16px;
            transition: background-color 0.2s;
        }
        
        .tp-partner-box:hover {
            background-color: rgba(255, 255, 255, 0.08);
        }

        .tp-partner-icon {
            color: #94A3B8;
            width: 24px;
            height: 24px;
            flex-shrink: 0;
        }

        .c-gov { color: #E2E8F0; }
        .c-corp { color: #E2E8F0; }
        .c-edu { color: #F59E0B; }
        .c-ngo { color: #3B82F6; }

        .tp-partner-info {
            display: flex;
            flex-direction: column;
            gap: 2px;
        }

        .tp-partner-name {
            font-size: 14px;
            font-weight: 700;
            color: white;
        }

        .tp-partner-cat {
            font-size: 11px;
            color: #64748B;
        }

        .tp-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }

        .tp-badge {
            background-color: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 8px 16px;
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 12px;
            color: #E2E8F0;
            font-weight: 600;
        }

        .tp-badge svg {
            color: #10B981; /* teal/emerald */
            width: 14px;
            height: 14px;
        }

        @media (max-width: 1024px) {
            .tp-container {
                grid-template-columns: 1fr;
                gap: 80px;
            }
            .tp-quote-text {
                font-size: 28px;
            }
        }
        @media (max-width: 640px) {
            .tp-partners-grid {
                grid-template-columns: 1fr;
            }
        }

        /* News Section */
        .news-section {
            padding: 100px 24px;
            max-width: 1280px;
            margin: 0 auto;
            background-color: #FBFAF7;
        }

        .news-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-bottom: 48px;
        }

        .news-header-left {
            max-width: 600px;
        }

        .news-title {
            font-size: 40px;
            font-weight: 800;
            color: #0F172A;
            line-height: 1.2;
            margin-bottom: 0;
        }

        .news-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #1E293B;
            font-size: 14px;
            font-weight: 700;
            text-decoration: none;
            transition: color 0.2s;
            margin-bottom: 8px;
        }
        
        .news-link:hover {
            color: #D62828;
        }

        .news-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .news-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.04);
            border: 1px solid #F1F5F9;
            transition: transform 0.3s, box-shadow 0.3s;
            display: flex;
            flex-direction: column;
        }

        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.08);
        }

        .news-image-wrapper {
            position: relative;
            height: 240px;
            overflow: hidden;
        }

        .news-image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .news-card:hover .news-image-wrapper img {
            transform: scale(1.05);
        }

        .news-badge {
            position: absolute;
            bottom: 16px;
            left: 16px;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 700;
            color: white;
            z-index: 2;
        }

        .badge-red { background-color: #D62828; }
        .badge-blue { background-color: #3B82F6; }
        .badge-green { background-color: #10B981; }

        .news-content {
            padding: 24px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .news-meta {
            display: flex;
            align-items: center;
            gap: 16px;
            font-size: 12px;
            color: #94A3B8;
            margin-bottom: 12px;
            font-weight: 500;
        }
        
        .news-meta-item {
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .news-meta-item svg {
            width: 14px;
            height: 14px;
        }

        .news-card-title {
            font-size: 18px;
            font-weight: 800;
            color: #0F172A;
            line-height: 1.4;
            margin-bottom: 12px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .news-card-desc {
            font-size: 13px;
            color: #64748B;
            line-height: 1.6;
            margin-bottom: 24px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            flex-grow: 1;
        }

        .news-read-more {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            color: #D62828;
            font-size: 13px;
            font-weight: 700;
            text-decoration: none;
        }

        .news-read-more:hover {
            text-decoration: underline;
        }

        @media (max-width: 1024px) {
            .news-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .news-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 24px;
            }
        }
        @media (max-width: 768px) {
            .news-grid {
                grid-template-columns: 1fr;
            }
        }

        /* CTA / Newsletter Section */
        .cta-section {
            padding: 40px 24px 100px;
            max-width: 1280px;
            margin: 0 auto;
            background-color: #FBFAF7;
        }

        .cta-box {
            background: linear-gradient(135deg, #D62828 0%, #DC2626 100%);
            border-radius: 32px;
            padding: 80px 40px;
            text-align: center;
            position: relative;
            overflow: hidden;
            box-shadow: 0 40px 100px -20px rgba(239, 68, 68, 0.4);
        }

        /* Subtle dot pattern background */
        .cta-box::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background-image: radial-gradient(rgba(255, 255, 255, 0.15) 1.5px, transparent 1.5px);
            background-size: 24px 24px;
            opacity: 0.6;
            pointer-events: none;
        }

        .cta-content {
            position: relative;
            z-index: 2;
            max-width: 600px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .cta-icon-wrapper {
            width: 48px;
            height: 48px;
            background-color: rgba(255, 255, 255, 0.15);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            margin-bottom: 24px;
            backdrop-filter: blur(4px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .cta-title {
            font-size: 36px;
            font-weight: 800;
            color: white;
            margin-bottom: 16px;
            line-height: 1.2;
        }

        .cta-desc {
            font-size: 14px;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 40px;
            line-height: 1.6;
            font-weight: 500;
        }

        .cta-form {
            display: flex;
            gap: 12px;
            width: 100%;
            max-width: 480px;
        }

        .cta-input {
            flex-grow: 1;
            padding: 0 24px;
            height: 48px;
            border-radius: 24px;
            border: 2px solid transparent;
            background-color: white;
            font-size: 14px;
            font-family: inherit;
            outline: none;
            transition: all 0.2s;
        }

        .cta-input:focus {
            border-color: rgba(255, 255, 255, 0.5);
            box-shadow: 0 0 0 4px rgba(255, 255, 255, 0.1);
        }

        .cta-input::placeholder {
            color: #94A3B8;
        }

        .cta-button {
            height: 48px;
            padding: 0 32px;
            border-radius: 24px;
            background-color: #1E293B;
            color: white;
            font-weight: 700;
            font-size: 14px;
            border: none;
            cursor: pointer;
            transition: background-color 0.2s, transform 0.2s;
            font-family: inherit;
        }

        .cta-button:hover {
            background-color: #0F172A;
            transform: translateY(-2px);
        }
        
        .cta-button:active {
            transform: translateY(0);
        }

        @media (max-width: 640px) {
            .cta-form {
                flex-direction: column;
            }
            .cta-box {
                padding: 60px 24px;
            }
            .cta-title {
                font-size: 28px;
            }
        }

        /* Footer Section */
        .footer {
            background-color: #0F172A; /* Darker blue for footer */
            color: #94A3B8;
            padding: 80px 24px 40px;
            position: relative;
        }

        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 35%;
            height: 4px;
            background-color: #D62828;
        }

        .footer-container {
            max-width: 1280px;
            margin: 0 auto;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1.5fr;
            gap: 48px;
            margin-bottom: 64px;
        }

        .footer-brand {
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        .footer-logo {
            display: flex;
            align-items: center;
            gap: 12px;
            color: white;
            text-decoration: none;
            font-size: 24px;
            font-weight: 800;
            letter-spacing: -0.5px;
        }

        .footer-desc {
            font-size: 14px;
            line-height: 1.6;
            max-width: 320px;
        }

        .footer-socials {
            display: flex;
            gap: 12px;
        }

        .social-link {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #1E293B;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #94A3B8;
            transition: all 0.2s;
            text-decoration: none;
        }

        .social-link:hover {
            background-color: #D62828;
            color: white;
            transform: translateY(-2px);
        }

        .footer-title {
            font-size: 12px;
            font-weight: 700;
            color: white;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 24px;
        }

        .footer-links {
            display: flex;
            flex-direction: column;
            gap: 16px;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-link {
            color: #94A3B8;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.2s;
        }

        .footer-link:hover {
            color: white;
        }

        .footer-contact {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            font-size: 14px;
            line-height: 1.5;
        }

        .contact-icon {
            width: 20px;
            height: 20px;
            color: #D62828;
            flex-shrink: 0;
            margin-top: 2px;
        }

        .btn-download {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 12px 24px;
            background-color: #1E293B;
            color: white;
            border-radius: 8px;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            margin-top: 12px;
            transition: background-color 0.2s;
            border: 1px solid rgba(255, 255, 255, 0.05);
            width: fit-content;
        }

        .btn-download:hover {
            background-color: #334155;
        }

        .footer-bottom {
            padding-top: 32px;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 13px;
        }

        .footer-bottom-links {
            display: flex;
            gap: 24px;
            align-items: center;
        }
        
        .footer-dot {
            width: 4px;
            height: 4px;
            background-color: #64748B;
            border-radius: 50%;
        }

        @media (max-width: 1024px) {
            .footer-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 640px) {
            .footer-grid {
                grid-template-columns: 1fr;
            }
            .footer-bottom {
                flex-direction: column;
                align-items: flex-start;
                gap: 16px;
            }
            .footer-bottom-links {
                flex-wrap: wrap;
                gap: 12px;
            }
        }
    </style>
</head>
<body>

    <div class="hero">
        <div class="container">
            <!-- Navbar -->
            <nav class="navbar">
                <a href="#" class="logo">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" fill="#D62828"/>
                    </svg>
                    <div>
                        Bakti <span>Merah Putih</span>
                    </div>
                </a>

                <div class="nav-links">
                    <a href="#" class="nav-link active">Beranda</a>
                    <a href="#" class="nav-link">Tentang Kami</a>
                    <a href="#" class="nav-link">Program</a>
                    <a href="#" class="nav-link">Donasi</a>
                    <a href="#" class="nav-link">Laporan</a>
                    <a href="#" class="nav-link">Artikel</a>
                    <a href="#" class="nav-link">Galeri</a>
                    <a href="#" class="nav-link">Relawan</a>
                    <a href="#" class="nav-link">Kontak</a>
                </div>

                <a href="#" class="btn btn-primary">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                    </svg>
                    Donasi Sekarang
                </a>
            </nav>

            <!-- Main Content -->
            <div class="hero-content">
                <!-- Left Column -->
                <div class="content-text">
                    <div class="badge-top">
                        <div class="dot"></div>
                        Yayasan Sosial & Kemanusiaan — Est. 2015
                    </div>

                    <h1 class="headline">
                        Bersama Menebar <br>
                        <span class="highlight">Kebaikan</span> untuk <br>
                        Indonesia.
                    </h1>

                    <p class="description">
                        Bakti Merah Putih bergerak di bidang pendidikan, kesehatan, lingkungan, dan kemanusiaan untuk menghadirkan perubahan nyata bagi jutaan masyarakat di seluruh pelosok Indonesia.
                    </p>

                    <div class="cta-group">
                        <a href="#" class="btn btn-primary" style="padding: 16px 32px; font-size: 16px;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                            </svg>
                            Donasi Sekarang 
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 4px;"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </a>
                        <a href="#" class="btn btn-outline" style="padding: 16px 32px; font-size: 16px;">
                            Lihat Program
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 4px;"><path d="M9 18l6-6-6-6"/></svg>
                        </a>
                    </div>

                    <div class="trust-badges-bottom">
                        <div class="trust-badge-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                            Terverifikasi Kemenkumham
                        </div>
                        <div class="trust-badge-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                            Laporan Audit Terbuka
                        </div>
                        <div class="trust-badge-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                            Donasi Real-time
                        </div>
                    </div>
                </div>

                <!-- Right Column (Glass Card) -->
                <div class="glass-card">
                    <div class="card-header">
                        <div class="card-header-icon">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        </div>
                        Dampak Kebaikan Kita
                    </div>

                    <div class="stats-list">
                        <div class="stat-item">
                            <div class="stat-icon icon-red">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="5" width="20" height="14" rx="2"></rect><path d="M2 10h20"></path></svg>
                            </div>
                            <div class="stat-info">
                                <h3>Rp 12,85 M</h3>
                                <p>Total Donasi</p>
                            </div>
                        </div>

                        <div class="stat-item">
                            <div class="stat-icon icon-blue">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                            </div>
                            <div class="stat-info">
                                <h3>12.500+</h3>
                                <p>Penerima Manfaat</p>
                            </div>
                        </div>

                        <div class="stat-item">
                            <div class="stat-icon icon-green">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                            </div>
                            <div class="stat-info">
                                <h3>78</h3>
                                <p>Program Aktif</p>
                            </div>
                        </div>

                        <div class="stat-item">
                            <div class="stat-icon icon-orange">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                            </div>
                            <div class="stat-info">
                                <h3>5.000+</h3>
                                <p>Donatur Setia</p>
                            </div>
                        </div>
                    </div>

                    <div class="update-card">
                        <div class="update-badge">
                            <div class="dot"></div> Update terbaru
                        </div>
                        <p class="update-text">
                            "Relawan kami baru saja menyelesaikan distribusi ke 120 keluarga terdampak banjir di Kalimantan Selatan."
                        </p>
                        <p class="update-meta">— 2 jam lalu - Tim Lapangan</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="pagination">
            <div class="page-dot active"></div>
            <div class="page-dot"></div>
            <div class="page-dot"></div>
        </div>

    </div>

    <!-- Stats Bar -->
    <div class="stats-floating">
        <div class="stat-box">
            <div class="stat-box-icon red">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
            </div>
            <h3>12.500+</h3>
            <p>Penerima Manfaat</p>
        </div>
        <div class="stat-box">
            <div class="stat-box-icon blue">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s-8-4.5-8-11.8A8 8 0 0 1 12 2a8 8 0 0 1 8 8.2c0 7.3-8 11.8-8 11.8z"></path><circle cx="12" cy="10" r="3"></circle></svg>
            </div>
            <h3>350+</h3>
            <p>Program Sosial</p>
        </div>
        <div class="stat-box">
            <div class="stat-box-icon green">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
            </div>
            <h3>28</h3>
            <p>Provinsi</p>
        </div>
        <div class="stat-box">
            <div class="stat-box-icon red">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
            </div>
            <h3>5.000+</h3>
            <p>Donatur</p>
        </div>
        <div class="stat-box">
            <div class="stat-box-icon orange">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
            </div>
            <h3>700+</h3>
            <p>Relawan Aktif</p>
        </div>
    </div>

    <!-- Program Kami Section -->
    <section class="program-section">
        <div class="section-header">
            <div>
                <div class="section-label">PROGRAM KAMI</div>
                <h2 class="section-title">Bersama Hadirkan<br>Perubahan Nyata</h2>
            </div>
            <a href="#" class="btn-link">
                Lihat Semua Program
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>

        <div class="program-grid">
            <!-- Card 1 -->
            <div class="program-card">
                <div class="card-image-wrap">
                    <img src="/images/program-guru.png" alt="Bakti Guru" class="card-image">
                    <div class="card-badge blue">Pendidikan</div>
                    <div class="card-icon-float blue">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                    </div>
                </div>
                <div class="card-content">
                    <h3 class="card-title">Bakti Guru</h3>
                    <p class="card-desc">Melatih dan mendampingi guru-guru di wilayah 3T agar mampu menghadirkan pendidikan berkualitas bagi generasi penerus bangsa.</p>
                    <div class="card-footer">
                        <span class="card-stat">1.200 guru didampingi</span>
                        <a href="#" class="card-link blue">
                            Selengkapnya 
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="program-card">
                <div class="card-image-wrap">
                    <img src="/images/program-beasiswa.png" alt="Bakti Pendidikan" class="card-image">
                    <div class="card-badge red">Beasiswa</div>
                    <div class="card-icon-float red">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"></path><path d="M6 12v5c3 3 9 3 12 0v-5"></path></svg>
                    </div>
                </div>
                <div class="card-content">
                    <h3 class="card-title">Bakti Pendidikan</h3>
                    <p class="card-desc">Memberikan beasiswa penuh dan perlengkapan belajar bagi anak-anak dari keluarga prasejahtera di seluruh kepulauan Indonesia.</p>
                    <div class="card-footer">
                        <span class="card-stat">4.500 beasiswa aktif</span>
                        <a href="#" class="card-link red">
                            Selengkapnya 
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="program-card">
                <div class="card-image-wrap">
                    <img src="/images/program-lingkungan.png" alt="Bakti Lingkungan" class="card-image">
                    <div class="card-badge green">Lingkungan</div>
                    <div class="card-icon-float green">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                    </div>
                </div>
                <div class="card-content">
                    <h3 class="card-title">Bakti Lingkungan</h3>
                    <p class="card-desc">Penanaman pohon, pengelolaan sampah komunitas, dan edukasi lingkungan hidup untuk menjaga keasrian alam Indonesia.</p>
                    <div class="card-footer">
                        <span class="card-stat">180.000 pohon ditanam</span>
                        <a href="#" class="card-link green">
                            Selengkapnya 
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="program-card">
                <div class="card-image-wrap">
                    <img src="/images/program-kesehatan.png" alt="Bakti Kesehatan" class="card-image">
                    <div class="card-badge orange">Kesehatan</div>
                    <div class="card-icon-float orange">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
                    </div>
                </div>
                <div class="card-content">
                    <h3 class="card-title">Bakti Kesehatan</h3>
                    <p class="card-desc">Klinik keliling, pemeriksaan gratis, dan penyuluhan gizi bagi masyarakat terpencil yang jauh dari fasilitas layanan kesehatan.</p>
                    <div class="card-footer">
                        <span class="card-stat">38.000 pasien dilayani</span>
                        <a href="#" class="card-link orange">
                            Selengkapnya 
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Donation Section -->
    <section class="donation-section">
        <div class="ambient-glow-left"></div>
        <div class="ambient-glow-right"></div>
        
        <div class="donation-header">
            <div class="donation-label">DONASI TERBUKA</div>
            <h2 class="donation-title">Program Terbaru</h2>
            <p class="donation-subtitle">Pilih program yang menyentuh hati Anda. Setiap donasi tercatat transparan.</p>
        </div>

        <div class="donation-grid">
            <!-- Card 1 -->
            <div class="donate-card">
                <div class="d-card-image">
                    <img src="/images/donasi-pendidikan.png" alt="Pendidikan">
                    <div class="d-card-overlay"></div>
                    <div class="d-badge-group">
                        <span class="d-badge" style="color: #3B82F6;">Pendidikan</span>
                    </div>
                    <div class="d-timer">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                        18 hari lagi
                    </div>
                </div>
                <div class="d-card-body">
                    <h3 class="d-card-title">Beasiswa untuk 100 Anak Berprestasi di NTT</h3>
                    <div class="d-progress-wrap">
                        <div class="d-progress-stats">
                            <div class="d-terkumpul">Terkumpul <span>75%</span></div>
                            <div class="d-donatur">843 donatur</div>
                        </div>
                        <div class="d-progress-bar">
                            <div class="d-progress-fill" style="width: 75%;"></div>
                        </div>
                        <div class="d-amount-row">
                            <div class="d-amount-current">Rp 112.500.000</div>
                            <div class="d-amount-target">dari Rp 150.000.000</div>
                        </div>
                    </div>
                    <a href="#" class="btn-donate-full">Donasi Sekarang</a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="donate-card">
                <div class="d-card-image">
                    <img src="/images/donasi-pangan.png" alt="Pangan">
                    <div class="d-card-overlay"></div>
                    <div class="d-badge-group">
                        <span class="d-badge" style="color: #F97316;">Pangan</span>
                        <span class="d-badge warning">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0zM12 9v4m0 4h.01"/></svg>
                            Mendesak
                        </span>
                    </div>
                    <div class="d-timer">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                        9 hari lagi
                    </div>
                </div>
                <div class="d-card-body">
                    <h3 class="d-card-title">Dapur Umum & Distribusi Pangan Untuk 500 KK Miskin Ekstrem</h3>
                    <div class="d-progress-wrap">
                        <div class="d-progress-stats">
                            <div class="d-terkumpul">Terkumpul <span>82%</span></div>
                            <div class="d-donatur">1.204 donatur</div>
                        </div>
                        <div class="d-progress-bar">
                            <div class="d-progress-fill" style="width: 82%;"></div>
                        </div>
                        <div class="d-amount-row">
                            <div class="d-amount-current">Rp 163.000.000</div>
                            <div class="d-amount-target">dari Rp 200.000.000</div>
                        </div>
                    </div>
                    <a href="#" class="btn-donate-full">Donasi Sekarang</a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="donate-card">
                <div class="d-card-image">
                    <img src="/images/donasi-bencana.png" alt="Kebencanaan">
                    <div class="d-card-overlay"></div>
                    <div class="d-badge-group">
                        <span class="d-badge" style="color: #D62828;">Kebencanaan</span>
                    </div>
                    <div class="d-timer">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                        30 hari lagi
                    </div>
                </div>
                <div class="d-card-body">
                    <h3 class="d-card-title">Pemulihan Pasca Banjir — Membangun Kembali 120 Rumah Warga</h3>
                    <div class="d-progress-wrap">
                        <div class="d-progress-stats">
                            <div class="d-terkumpul">Terkumpul <span>43%</span></div>
                            <div class="d-donatur">3.102 donatur</div>
                        </div>
                        <div class="d-progress-bar">
                            <div class="d-progress-fill" style="width: 43%;"></div>
                        </div>
                        <div class="d-amount-row">
                            <div class="d-amount-current">Rp 344.000.000</div>
                            <div class="d-amount-target">dari Rp 800.000.000</div>
                        </div>
                    </div>
                    <a href="#" class="btn-donate-full">Donasi Sekarang</a>
                </div>
            </div>
        </div>
    </section>

    <!-- How To Donate Section -->
    <section class="how-to-donate">
        <div class="htd-header donation-header">
            <div class="donation-label">CARA BERDONASI</div>
            <h2 class="donation-title">Mudah, Cepat, dan Aman</h2>
        </div>

        <div class="htd-steps">
            <!-- Step 1 -->
            <div class="htd-step-item">
                <div class="htd-icon-box">
                    <div class="htd-step-num">1</div>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                </div>
                <h3 class="htd-title">Pilih Program</h3>
                <p class="htd-desc">Temukan program yang ingin Anda dukung dari ratusan kampanye terverifikasi</p>
            </div>

            <!-- Step 2 -->
            <div class="htd-step-item">
                <div class="htd-icon-box">
                    <div class="htd-step-num">2</div>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                </div>
                <h3 class="htd-title">Isi Nominal</h3>
                <p class="htd-desc">Tentukan jumlah donasi sesuai kemampuan, mulai dari Rp10.000</p>
            </div>

            <!-- Step 3 -->
            <div class="htd-step-item">
                <div class="htd-icon-box">
                    <div class="htd-step-num">3</div>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><path d="M9 12l2 2 4-4"></path></svg>
                </div>
                <h3 class="htd-title">Pembayaran Aman</h3>
                <p class="htd-desc">Lebih dari 10 metode pembayaran tersedia, semua terenkripsi SSL</p>
            </div>

            <!-- Step 4 -->
            <div class="htd-step-item">
                <div class="htd-icon-box">
                    <div class="htd-step-num">4</div>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                </div>
                <h3 class="htd-title">Berhasil & Tercatat</h3>
                <p class="htd-desc">Bukti donasi dikirim otomatis ke email Anda dalam hitungan detik</p>
            </div>

            <!-- Step 5 -->
            <div class="htd-step-item">
                <div class="htd-icon-box">
                    <div class="htd-step-num">5</div>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                </div>
                <h3 class="htd-title">Laporan Transparan</h3>
                <p class="htd-desc">Pantau penggunaan dana secara real-time lewat dashboard donatur</p>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery-section">
        <div class="gallery-header">
            <div class="gallery-header-left">
                <div class="donation-label" style="justify-content: flex-start;">
                    <div style="width: 32px; height: 1px; background-color: #D62828; opacity: 0.5;"></div>
                    GALERI LAPANGAN
                </div>
                <h2 class="gallery-title">Wajah Perubahan<br>Nyata</h2>
            </div>
            <a href="#" class="gallery-link">
                Lihat Galeri Lengkap 
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
            </a>
        </div>

        <div class="bento-grid">
            <div class="bento-item bento-1">
                <img src="/images/galeri-1.png" alt="Anak kecil makan">
            </div>
            <div class="bento-item bento-2">
                <img src="/images/galeri-2.png" alt="Anak-anak ceria membentuk tanda perdamaian">
                <div class="bento-caption">Lima anak ceria membentuk tanda perdamaian bersama relawan</div>
            </div>
            <div class="bento-item bento-3">
                <img src="/images/galeri-3.png" alt="Ibu menenun kain">
            </div>
            <div class="bento-item bento-4">
                <img src="/images/galeri-4.png" alt="Warga desa di sore hari">
            </div>
        </div>
    </section>


    <!-- Testimonial & Partners Section -->
    <section class="tp-section">
        <div class="tp-ambient"></div>
        <div class="tp-container">
            <!-- Left: Testimonial -->
            <div class="tp-left">
                <div class="donation-label" style="justify-content: flex-start; margin-bottom: 24px;">
                    <div style="width: 32px; height: 1px; background-color: #D62828; opacity: 0.5;"></div>
                    KISAH NYATA
                </div>
                
                <div class="tp-quote-icon">
                    <span style="font-family: Georgia, serif; font-size: 80px; line-height: 0; position: relative; top: 20px;">&ldquo;</span>
                </div>

                <h2 class="tp-quote-text">"Beasiswa dari Bakti Merah Putih membuat saya bisa kembali bersekolah dan meraih mimpi menjadi guru."</h2>

                <div class="tp-profile">
                    <div class="tp-avatar-wrapper">
                        <img src="/images/galeri-1.png" alt="Siti Rahayu" class="tp-avatar">
                        <div class="tp-status-dot"></div>
                    </div>
                    <div>
                        <div class="tp-name">Siti Rahayu, 16 tahun</div>
                        <div class="tp-role">Penerima Beasiswa 2025 — Nusa Tenggara Timur</div>
                    </div>
                </div>

                <div class="tp-rating">
                    <div class="tp-stars">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                    </div>
                    <div class="tp-rating-text">4.9/5 dari 1.200+ ulasan donatur</div>
                </div>
            </div>

            <!-- Right: Partners -->
            <div class="tp-right">
                <div class="tp-right-label">DIPERCAYA & DIDUKUNG OLEH</div>
                
                <div class="tp-partners-grid">
                    <!-- Partner 1 -->
                    <div class="tp-partner-box">
                        <svg class="tp-partner-icon c-gov" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="2" width="16" height="20" rx="2" ry="2"></rect><path d="M9 22v-4h6v4"></path><path d="M8 6h.01"></path><path d="M16 6h.01"></path><path d="M12 6h.01"></path><path d="M12 10h.01"></path><path d="M12 14h.01"></path><path d="M16 10h.01"></path><path d="M16 14h.01"></path><path d="M8 10h.01"></path><path d="M8 14h.01"></path></svg>
                        <div class="tp-partner-info">
                            <div class="tp-partner-name">Kemendikbud RI</div>
                            <div class="tp-partner-cat">Pemerintah</div>
                        </div>
                    </div>
                    <!-- Partner 2 -->
                    <div class="tp-partner-box">
                        <svg class="tp-partner-icon c-gov" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21l1.65-3.8a9 9 0 1 1 3.4 2.9L3 21"></path><path d="M9 10a.5.5 0 0 0 1 0V9a.5.5 0 0 0-1 0v1a5 5 0 0 0 5 5h1a.5.5 0 0 0 0-1h-1a.5.5 0 0 0 0 1"></path></svg>
                        <div class="tp-partner-info">
                            <div class="tp-partner-name">Kemenkes RI</div>
                            <div class="tp-partner-cat">Pemerintah</div>
                        </div>
                    </div>
                    <!-- Partner 3 -->
                    <div class="tp-partner-box">
                        <svg class="tp-partner-icon c-corp" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                        <div class="tp-partner-info">
                            <div class="tp-partner-name">Bank BRI</div>
                            <div class="tp-partner-cat">Perusahaan</div>
                        </div>
                    </div>
                    <!-- Partner 4 -->
                    <div class="tp-partner-box">
                        <svg class="tp-partner-icon c-corp" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12.55a11 11 0 0 1 14.08 0"></path><path d="M1.42 9a16 16 0 0 1 21.16 0"></path><path d="M8.53 16.11a6 6 0 0 1 6.95 0"></path><line x1="12" y1="20" x2="12.01" y2="20"></line></svg>
                        <div class="tp-partner-info">
                            <div class="tp-partner-name">Telkom Indonesia</div>
                            <div class="tp-partner-cat">Perusahaan</div>
                        </div>
                    </div>
                    <!-- Partner 5 -->
                    <div class="tp-partner-box">
                        <svg class="tp-partner-icon c-edu" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"></path><path d="M6 12v5c3 3 9 3 12 0v-5"></path></svg>
                        <div class="tp-partner-info">
                            <div class="tp-partner-name">Universitas Indonesia</div>
                            <div class="tp-partner-cat">Akademik</div>
                        </div>
                    </div>
                    <!-- Partner 6 -->
                    <div class="tp-partner-box">
                        <svg class="tp-partner-icon c-edu" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"></path><path d="M6 12v5c3 3 9 3 12 0v-5"></path></svg>
                        <div class="tp-partner-info">
                            <div class="tp-partner-name">UGM Yogyakarta</div>
                            <div class="tp-partner-cat">Akademik</div>
                        </div>
                    </div>
                    <!-- Partner 7 -->
                    <div class="tp-partner-box">
                        <svg class="tp-partner-icon c-ngo" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                        <div class="tp-partner-info">
                            <div class="tp-partner-name">BNPB</div>
                            <div class="tp-partner-cat">NGO / Lembaga</div>
                        </div>
                    </div>
                    <!-- Partner 8 -->
                    <div class="tp-partner-box">
                        <svg class="tp-partner-icon c-ngo" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                        <div class="tp-partner-info">
                            <div class="tp-partner-name">UNDP Indonesia</div>
                            <div class="tp-partner-cat">NGO / Lembaga</div>
                        </div>
                    </div>
                </div>

                <div class="tp-badges">
                    <div class="tp-badge">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><polyline points="9 12 11 14 15 10"></polyline></svg>
                        Legalitas Resmi
                    </div>
                    <div class="tp-badge">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        Terdaftar Kemenkumham
                    </div>
                    <div class="tp-badge">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
                        ISO 9001:2015
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section class="news-section">
        <div class="news-header">
            <div class="news-header-left">
                <div class="donation-label" style="justify-content: flex-start;">
                    <div style="width: 32px; height: 1px; background-color: #D62828; opacity: 0.5;"></div>
                    BERITA & CERITA
                </div>
                <h2 class="news-title">Dari Lapangan</h2>
            </div>
            <a href="#" class="news-link">
                Semua Artikel 
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="M12 5l7 7-7 7"></path></svg>
            </a>
        </div>

        <div class="news-grid">
            <!-- News 1 -->
            <div class="news-card">
                <div class="news-image-wrapper">
                    <img src="/images/galeri-2.png" alt="Program Beasiswa">
                    <div class="news-badge badge-red">Program</div>
                </div>
                <div class="news-content">
                    <div class="news-meta">
                        <div class="news-meta-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                            15 Juli 2026
                        </div>
                        <div class="news-meta-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                            4 menit baca
                        </div>
                    </div>
                    <h3 class="news-card-title">500 Anak NTT Terima Beasiswa Bakti Merah Putih 2026</h3>
                    <p class="news-card-desc">Program beasiswa tahunan kami kembali menyentuh ratusan kehidupan di ujung timur Indonesia.</p>
                    <div>
                        <a href="#" class="news-read-more">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>
            </div>

            <!-- News 2 -->
            <div class="news-card">
                <div class="news-image-wrapper">
                    <img src="/images/donasi-bencana.png" alt="Relawan Banjir">
                    <div class="news-badge badge-blue">Kebencanaan</div>
                </div>
                <div class="news-content">
                    <div class="news-meta">
                        <div class="news-meta-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                            8 Juli 2026
                        </div>
                        <div class="news-meta-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                            6 menit baca
                        </div>
                    </div>
                    <h3 class="news-card-title">Sigap di Lapangan: Tim Relawan Bakti Pulihkan 3 Desa Pasca Banjir</h3>
                    <p class="news-card-desc">Dalam 48 jam pertama, 120 relawan kami bergerak cepat mendistribusikan logistik.</p>
                    <div>
                        <a href="#" class="news-read-more">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>
            </div>

            <!-- News 3 -->
            <div class="news-card">
                <div class="news-image-wrapper">
                    <img src="/images/program-lingkungan.png" alt="Menanam Pohon">
                    <div class="news-badge badge-green">Lingkungan</div>
                </div>
                <div class="news-content">
                    <div class="news-meta">
                        <div class="news-meta-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                            1 Juli 2026
                        </div>
                        <div class="news-meta-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                            5 menit baca
                        </div>
                    </div>
                    <h3 class="news-card-title">Gerakan 10.000 Pohon: Pulihkan Ekosistem Hutan Sulawesi</h3>
                    <p class="news-card-desc">Bersama komunitas adat dan 700 donatur setia, kami menghijaukan 45 hektar lahan kritis.</p>
                    <div>
                        <a href="#" class="news-read-more">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA / Newsletter Section -->
    <section class="cta-section">
        <div class="cta-box">
            <div class="cta-content">
                <div class="cta-icon-wrapper">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                </div>
                <h2 class="cta-title">Dapatkan Update Kegiatan<br>Kami</h2>
                <p class="cta-desc">Ikuti perkembangan program dan dampak donasi Anda langsung di inbox.<br>Tanpa spam, selamanya.</p>
                <form class="cta-form" action="#" method="POST" onsubmit="event.preventDefault();">
                    <input type="email" class="cta-input" placeholder="nama@email.com" required>
                    <button type="submit" class="cta-button">Daftar Sekarang</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-grid">
                <!-- Column 1 -->
                <div class="footer-brand">
                    <a href="#" class="footer-logo">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="24" height="24" rx="8" fill="#D62828"/>
                            <path d="M12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18C15.3137 18 18 15.3137 18 12" stroke="white" stroke-width="2" stroke-linecap="round"/>
                            <path d="M12 6V18" stroke="white" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                        Bakti Merah Putih
                    </a>
                    <p class="footer-desc">Bergerak bersama untuk Indonesia yang lebih baik. Sejak 2015, kami telah menyentuh jutaan kehidupan di 28 provinsi.</p>
                    <div class="footer-socials">
                        <a href="#" class="social-link"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></a>
                        <a href="#" class="social-link"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg></a>
                        <a href="#" class="social-link"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg></a>
                        <a href="#" class="social-link"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33 2.78 2.78 0 0 0 1.94 2c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.33 29 29 0 0 0-.46-5.33z"></path><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon></svg></a>
                    </div>
                </div>

                <!-- Column 2 -->
                <div>
                    <h3 class="footer-title">NAVIGASI</h3>
                    <ul class="footer-links">
                        <li><a href="#" class="footer-link">Beranda</a></li>
                        <li><a href="#" class="footer-link">Tentang Kami</a></li>
                        <li><a href="#" class="footer-link">Program</a></li>
                        <li><a href="#" class="footer-link">Donasi</a></li>
                        <li><a href="#" class="footer-link">Laporan & Keuangan</a></li>
                    </ul>
                </div>

                <!-- Column 3 -->
                <div>
                    <h3 class="footer-title">PROGRAM</h3>
                    <ul class="footer-links">
                        <li><a href="#" class="footer-link">Bakti Guru</a></li>
                        <li><a href="#" class="footer-link">Bakti Pendidikan</a></li>
                        <li><a href="#" class="footer-link">Bakti Lingkungan</a></li>
                        <li><a href="#" class="footer-link">Bakti Kesehatan</a></li>
                        <li><a href="#" class="footer-link">Bakti Pangan & Gizi</a></li>
                        <li><a href="#" class="footer-link">Bakti Bencana</a></li>
                    </ul>
                </div>

                <!-- Column 4 -->
                <div>
                    <h3 class="footer-title">KONTAK</h3>
                    <div class="footer-contact">
                        <div class="contact-item">
                            <svg class="contact-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            <span>Jl. Sudirman No. 45, Kel. Karet Semanggi, Jakarta Pusat 10220</span>
                        </div>
                        <div class="contact-item">
                            <svg class="contact-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            <span>+62 21 5550 1234</span>
                        </div>
                        <div class="contact-item">
                            <svg class="contact-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                            <span>info@baktimerahputih.org</span>
                        </div>
                        <a href="#" class="btn-download">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                            Unduh Laporan 2025
                        </a>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div>&copy; 2026 Yayasan Bakti Merah Putih. Seluruh hak cipta dilindungi undang-undang.</div>
                <div class="footer-bottom-links">
                    <a href="#" class="footer-link">Kebijakan Privasi</a>
                    <div class="footer-dot"></div>
                    <a href="#" class="footer-link">Syarat & Ketentuan</a>
                    <div class="footer-dot"></div>
                    <a href="#" class="footer-link">Laporan Keuangan</a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
