<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Birthstone+Bounce:wght@400;500&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Carattere&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        scroll-behavior: smooth;
    }

    body {
        font-family: Poppins, sans-serif;
        background: #170E05;
    }

    .navbar {
        padding: 4rem 3rem;
        position: absolute;
        z-index: 1000;
        transition: all 0.3s ease;
        z-index: 10;
    }

    .navbar.scrolled {
        padding: 0.7rem 0;
        box-shadow: 0 6px 25px rgba(0, 0, 0, 0.12);
    }

    .nav-container {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 2rem;
    }

    .nav-brand:hover strong {
        transform: scale(1.05);
    }

    .nav-menu {
        display: flex;
        list-style: none;
        gap: 2.5rem;
        align-items: center;
    }

    .nav-menu li {
        position: relative;
    }

    .nav-menu a {
        color: #fff;
        text-decoration: none;
        font-size: 1rem;
        font-weight: 500;
        transition: all 0.3s ease;
        position: relative;
        display: block;
        letter-spacing: 0.5px;
        padding: 0.5rem 0;
    }

    .nav-menu a::before {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: 0;
        left: 50%;
        background: linear-gradient(90deg, #fff, #fff);
        transition: all 0.3s ease;
        transform: translateX(-50%);
    }

    .nav-menu a:hover {
        color: #fff;
    }

    .nav-menu a:hover::before {
        width: 100%;
    }

    .nav-menu a.active {
        color: #fff;
    }

    .nav-menu a.active::before {
        width: 100%;
    }

    .logo {
        position: absolute;
        top: 30%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1;
    }

    .logo #logo {
        width: 200px;
    }

    .hero-title {
        display: flex;
        gap: 20px;
        position: absolute;
        top: 55%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: #fff;
        z-index: 1;
        font-family: "Birthstone Bounce", cursive;
        font-size: 7rem;
        text-shadow: black 6px 3px 2px;
    }

    .hero-isi {
        position: absolute;
        top: 75%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: #fff;
        z-index: 1;
        letter-spacing: 2px;
        font-family: "Birthstone Bounce", cursive;
        text-shadow: black 6px 3px 2px;
    }

    .hero-isi p:first-child {
        font-size: 2rem;
    }

    .hero-isi p:last-child {
        font-size: 4.5rem;
    }

    .tamu {
        position: absolute;
        top: 111%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 1rem 2rem;
        background: gray;
        color: white;
        font-size: 1.3rem;
        font-weight: 700;
        border-radius: 0.5rem;
        border: 2px solid #000;
        box-shadow: inset 0 0 0 0px #000;
        transition: border-radius 0.3s, box-shadow 0.3s, color 0.3s;
        transition-timing-function: cubic-bezier(0.7, 0, 0.2, 1);
        z-index: 20;
        cursor: pointer;
    }

    .tamu:hover {
        color: #e7e7e7;
        border-radius: 50%;
        box-shadow: inset 0 0 0 40px #000;
        transition-delay: 0s, 0s, 0.2s;
    }

    .hero {
        padding: 7rem 6rem;
        height: 1300px;
    }

    .hero .bg-hero {
        width: 100%;
        height: 100vh;
        object-fit: cover;
        border-radius: 40px;
        border: #D6C8BD 2px solid;
    }

    /* ========================= */
    /*  RESPONSIVE HP VERSION   */
    /* ========================= */

    @media(max-width: 768px) {

        .navbar {
            padding: 1rem 1.5rem;
            position: relative;
        }

        .nav-container {
            padding: 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Hide desktop menu */
        .nav-menu {
            display: none;
            flex-direction: column;
            position: absolute;
            top: 100%;
            right: 0;
            background: rgba(0, 0, 0, 0.95);
            padding: 1.5rem 2rem;
            border-radius: 12px;
            gap: 1.2rem;
            min-width: 200px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            margin-top: 1rem;
        }

        .nav-menu.active {
            display: flex;
        }

        /* Hamburger icon */
        .hamburger {
            width: 35px;
            height: 25px;
            position: relative;
            cursor: pointer;
            display: block;
            z-index: 999;
            margin-left: auto;
        }

        .hamburger span {
            position: absolute;
            width: 100%;
            height: 4px;
            background: white;
            border-radius: 5px;
            transition: .3s;
        }

        .hamburger span:nth-child(1) {
            top: 0;
        }

        .hamburger span:nth-child(2) {
            top: 10px;
        }

        .hamburger span:nth-child(3) {
            top: 20px;
        }

        /* animasi X */
        .hamburger.active span:nth-child(1) {
            transform: rotate(45deg);
            top: 10px;
        }

        .hamburger.active span:nth-child(2) {
            opacity: 0;
        }

        .hamburger.active span:nth-child(3) {
            transform: rotate(-45deg);
            top: 10px;
        }

        /* Hero */

        .hero {
            padding: 3rem 2rem;
            height: 1000px;
        }

        .hero-title {
            font-size: 3rem;
            top: 45%;
        }

        .hero-title h1 {
            font-size: 3rem;
        }

        .hero-isi p:first-child {
            font-size: 1.2rem;
        }

        .hero-isi p:last-child {
            font-size: 2.5rem;
        }

        .hero-isi {
            top: 65%;
        }

        /* Logo mengecil */
        .logo #logo {
            width: 120px;
        }

        /* Tombol tamu */
        .tamu {
            top: 95%;
            font-size: 1rem;
            padding: .7rem 1.3rem;
        }

        /* Bunga background mengecil */
        .flower {
            transform: scale(0.7);
        }

        .bg-hero {
            height: 85vh;
            border-radius: 20px;
        }
    }


    .container {
        top: 20%;
        position: absolute;
        width: 100%;
        height: 100vh;
        opacity: .7;
    }

    .flower {
        position: absolute;
        animation: float 6s ease-in-out infinite;
    }

    .flower1 {
        top: 10%;
        left: 15%;
        animation-delay: 0s;
    }

    .flower2 {
        top: 60%;
        left: 70%;
        animation-delay: 2s;
    }

    .flower3 {
        top: 30%;
        right: 10%;
        animation-delay: 4s;
    }

    .flower4 {
        bottom: 20%;
        left: 25%;
        animation-delay: 1s;
    }

    .flower5 {
        top: 50%;
        left: 50%;
        animation-delay: 3s;
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0) rotate(0deg);
        }

        25% {
            transform: translateY(-20px) rotate(5deg);
        }

        50% {
            transform: translateY(-10px) rotate(-5deg);
        }

        75% {
            transform: translateY(-30px) rotate(3deg);
        }
    }

    @keyframes rotate {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    @keyframes pulse {

        0%,
        100% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.1);
        }
    }

    .petal {
        animation: pulse 3s ease-in-out infinite;
    }

    .center {
        animation: rotate 20s linear infinite;
    }

    .falling-petals {
        position: absolute;
        width: 100%;
        height: 100%;
        pointer-events: none;
    }

    .petal-fall {
        position: absolute;
        animation: fall 10s linear infinite;
    }

    @keyframes fall {
        0% {
            top: -10%;
            opacity: 1;
        }

        100% {
            top: 110%;
            opacity: 0;
        }
    }

    .petal-fall:nth-child(1) {
        left: 10%;
        animation-delay: 0s;
    }

    .petal-fall:nth-child(2) {
        left: 30%;
        animation-delay: 3s;
    }

    .petal-fall:nth-child(3) {
        left: 50%;
        animation-delay: 6s;
    }

    .petal-fall:nth-child(4) {
        left: 70%;
        animation-delay: 2s;
    }

    .petal-fall:nth-child(5) {
        left: 85%;
        animation-delay: 5s;
    }

    .our-story {
        position: relative;
        width: 100%;
        min-height: 100vh;
        background: url(/public/assets/image/bg-story.png) no-repeat center center/cover;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 8rem 2rem;
    }

    .our-story .container {
        max-width: 1000px;
        width: 100%;
        margin: 0 auto;
    }

    .text-story {
        padding: 4rem 5rem;
        color: #5B4C3D;
    }

    .text-story h1 {
        font-size: 5rem;
        margin-bottom: 3rem;
        font-family: "Carattere", cursive;
        color: #5B4C3D;
        position: relative;
        display: inline-block;
    }

    .text-story h1::after {
        content: '';
        display: inline-block;
        width: 150px;
        height: 2px;
        background: #5B4C3D;
        margin-left: 2rem;
        vertical-align: middle;
        position: relative;
        top: -5px;
    }

    .text-story p {
        font-size: 1.8rem;
        line-height: 1.9;
        margin-bottom: 2rem;
        text-align: justify;
        color: #5B4C3D;
        font-weight: 400;
    }

    .text-story .signature {
        font-size: 1.8rem;
        margin-top: 3rem;
        margin-bottom: 0;
        text-align: left;
        font-weight: 400;
        color: #5B4C3D;
        position: relative;
        padding-left: 2rem;
    }

    .text-story .signature::before {
        content: '';
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        width: 40px;
        height: 2px;
        background: #5B4C3D;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .our-story {
            padding: 5rem 1.5rem;
        }

        .text-story {
            padding: 3rem 2rem;
        }

        .text-story h1 {
            font-size: 3.5rem;
        }

        .text-story h1::after {
            width: 80px;
            margin-left: 1rem;
        }

        .text-story p {
            font-size: 1.5rem;
        }
    }

    @media (max-width: 480px) {
        .text-story h1 {
            font-size: 2.5rem;
            display: block;
        }

        .text-story h1::after {
            display: block;
            margin-left: 0;
            margin-top: 1rem;
            width: 100px;
        }

        .text-story p {
            font-size: 1rem;
        }

        .text-story {
            padding: 2.5rem 1.5rem;
        }
    }

    .our-gallery {
        position: relative;
        width: 100%;
        min-height: 100vh;
        padding: 6rem 2rem;
        display: flex;
        align-items: center;
        justify-content: center;;
    }

    .our-gallery .container {
        max-width: 1400px;
        width: 100%;
        margin: 0 auto;
    }

    .our-gallery h1 {
        font-size: 5rem;
        color: #ffffff;
        text-align: center;
        margin-bottom: 4rem;
        font-family: "Carattere", cursive;
        position: relative;
    }

    .our-gallery h1::before {
        content: '';
        position: absolute;
        left: 42%;
        top: 50%;
        transform: translate(calc(-100% - 20px), -50%);
        width: 150px;
        height: 2px;
        background: #ffffff;
    }

    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 2rem;
        align-items: start;
    }

    .gallery-item {
        position: relative;
        overflow: hidden;
        border: 3px solid #553636;
        border-radius: 5px;
        background: #1a1410;
    }

    .gallery-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.3s ease;
    }

    .gallery-item:hover img {
        transform: scale(1.2);
    }

    .gallery-large {
        grid-row: span 1;
    }

    .gallery-tall {
        grid-row: span 2;
    }

    .gallery-column {
        display: flex;
        flex-direction: column;
        gap: 2rem;
    }

    .gallery-medium {
        height: 100%;
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
        .gallery-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .gallery-tall {
            grid-row: span 1;
        }

        .our-gallery h1::before {
            left: -130px;
            width: 100px;
        }
    }

    @media (max-width: 768px) {
        .our-gallery {
            padding: 4rem 1.5rem;
        }

        .our-gallery h1 {
            font-size: 3.5rem;
        }

        .gallery-grid {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        .gallery-column {
            gap: 1.5rem;
        }

        .our-gallery h1::before {
            display: none;
        }
    }

    @media (max-width: 480px) {
        .our-gallery h1 {
            font-size: 2.8rem;
        }

        .gallery-grid {
            gap: 1rem;
        }
    }
</style>

<body>

    <section class="hero" id="hero">
        <div class="navbar">
            <div class="nav-container">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <ul class="nav-menu">
                    <li><a href="#our-story" class="nav-link">Our Story</a></li>
                    <li><a href="#our-gallery" class="nav-link">Our Gallery</a></li>
                    <li><a href="#the-date" class="nav-link">The Date</a></li>
                    <li><a href="#location" class="nav-link">Location</a></li>
                </ul>
            </div>
        </div>
        <div class="logo">
            <img src="/public/assets/image/cmo.png" id="logo" alt="logo">
        </div>
        <div class="hero-text">
            <div class="hero-title">
                <h1>Cinta</h1>
                <h1>&</h1>
                <h1>Mikail</h1>
            </div>
            <div class="hero-isi">
                <p>welcome to our</p>
                <p>Yogayakarta’s wedding</p>
            </div>
        </div>
        <button class="tamu">
            Masukkan Data Tamu Anda
        </button>
        <img src="/public/assets/image/bg-hero.png" class="bg-hero" alt="hero-bg">
    </section>

    <div class="container">
        <!-- Kelopak bunga jatuh -->
        <div class="falling-petals">
            <svg class="petal-fall" width="30" height="30" viewBox="0 0 30 30">
                <ellipse cx="15" cy="15" rx="8" ry="15" fill="rgba(255,255,255,0.6)" transform="rotate(45 15 15)" />
            </svg>
            <svg class="petal-fall" width="30" height="30" viewBox="0 0 30 30">
                <ellipse cx="15" cy="15" rx="8" ry="15" fill="rgba(255,255,255,0.6)" transform="rotate(45 15 15)" />
            </svg>
            <svg class="petal-fall" width="30" height="30" viewBox="0 0 30 30">
                <ellipse cx="15" cy="15" rx="8" ry="15" fill="rgba(255,255,255,0.6)" transform="rotate(45 15 15)" />
            </svg>
            <svg class="petal-fall" width="30" height="30" viewBox="0 0 30 30">
                <ellipse cx="15" cy="15" rx="8" ry="15" fill="rgba(255,255,255,0.6)" transform="rotate(45 15 15)" />
            </svg>
            <svg class="petal-fall" width="30" height="30" viewBox="0 0 30 30">
                <ellipse cx="15" cy="15" rx="8" ry="15" fill="rgba(255,255,255,0.6)" transform="rotate(45 15 15)" />
            </svg>
        </div>

        <!-- Bunga 1 -->
        <svg class="flower flower1" width="120" height="120" viewBox="0 0 120 120">
            <g class="petal">
                <ellipse cx="60" cy="30" rx="15" ry="25" fill="white" opacity="0.9" />
                <ellipse cx="90" cy="60" rx="15" ry="25" fill="white" opacity="0.9" transform="rotate(90 90 60)" />
                <ellipse cx="60" cy="90" rx="15" ry="25" fill="white" opacity="0.9" />
                <ellipse cx="30" cy="60" rx="15" ry="25" fill="white" opacity="0.9" transform="rotate(90 30 60)" />
                <ellipse cx="80" cy="40" rx="15" ry="25" fill="white" opacity="0.85" transform="rotate(45 80 40)" />
                <ellipse cx="80" cy="80" rx="15" ry="25" fill="white" opacity="0.85" transform="rotate(-45 80 80)" />
                <ellipse cx="40" cy="80" rx="15" ry="25" fill="white" opacity="0.85" transform="rotate(45 40 80)" />
                <ellipse cx="40" cy="40" rx="15" ry="25" fill="white" opacity="0.85" transform="rotate(-45 40 40)" />
            </g>
            <circle class="center" cx="60" cy="60" r="12" fill="#ffd700" />
            <circle cx="60" cy="60" r="8" fill="#ffed4e" />
        </svg>

        <!-- Bunga 2 -->
        <svg class="flower flower2" width="100" height="100" viewBox="0 0 120 120">
            <g class="petal">
                <ellipse cx="60" cy="30" rx="15" ry="25" fill="white" opacity="0.9" />
                <ellipse cx="90" cy="60" rx="15" ry="25" fill="white" opacity="0.9" transform="rotate(90 90 60)" />
                <ellipse cx="60" cy="90" rx="15" ry="25" fill="white" opacity="0.9" />
                <ellipse cx="30" cy="60" rx="15" ry="25" fill="white" opacity="0.9" transform="rotate(90 30 60)" />
                <ellipse cx="80" cy="40" rx="15" ry="25" fill="white" opacity="0.85" transform="rotate(45 80 40)" />
                <ellipse cx="80" cy="80" rx="15" ry="25" fill="white" opacity="0.85" transform="rotate(-45 80 80)" />
                <ellipse cx="40" cy="80" rx="15" ry="25" fill="white" opacity="0.85" transform="rotate(45 40 80)" />
                <ellipse cx="40" cy="40" rx="15" ry="25" fill="white" opacity="0.85" transform="rotate(-45 40 40)" />
            </g>
            <circle class="center" cx="60" cy="60" r="12" fill="#ffd700" />
            <circle cx="60" cy="60" r="8" fill="#ffed4e" />
        </svg>

        <!-- Bunga 3 -->
        <svg class="flower flower3" width="90" height="90" viewBox="0 0 120 120">
            <g class="petal">
                <ellipse cx="60" cy="30" rx="15" ry="25" fill="white" opacity="0.9" />
                <ellipse cx="90" cy="60" rx="15" ry="25" fill="white" opacity="0.9" transform="rotate(90 90 60)" />
                <ellipse cx="60" cy="90" rx="15" ry="25" fill="white" opacity="0.9" />
                <ellipse cx="30" cy="60" rx="15" ry="25" fill="white" opacity="0.9" transform="rotate(90 30 60)" />
                <ellipse cx="80" cy="40" rx="15" ry="25" fill="white" opacity="0.85" transform="rotate(45 80 40)" />
                <ellipse cx="80" cy="80" rx="15" ry="25" fill="white" opacity="0.85" transform="rotate(-45 80 80)" />
                <ellipse cx="40" cy="80" rx="15" ry="25" fill="white" opacity="0.85" transform="rotate(45 40 80)" />
                <ellipse cx="40" cy="40" rx="15" ry="25" fill="white" opacity="0.85" transform="rotate(-45 40 40)" />
            </g>
            <circle class="center" cx="60" cy="60" r="12" fill="#ffd700" />
            <circle cx="60" cy="60" r="8" fill="#ffed4e" />
        </svg>

        <!-- Bunga 4 -->
        <svg class="flower flower4" width="110" height="110" viewBox="0 0 120 120">
            <g class="petal">
                <ellipse cx="60" cy="30" rx="15" ry="25" fill="white" opacity="0.9" />
                <ellipse cx="90" cy="60" rx="15" ry="25" fill="white" opacity="0.9" transform="rotate(90 90 60)" />
                <ellipse cx="60" cy="90" rx="15" ry="25" fill="white" opacity="0.9" />
                <ellipse cx="30" cy="60" rx="15" ry="25" fill="white" opacity="0.9" transform="rotate(90 30 60)" />
                <ellipse cx="80" cy="40" rx="15" ry="25" fill="white" opacity="0.85" transform="rotate(45 80 40)" />
                <ellipse cx="80" cy="80" rx="15" ry="25" fill="white" opacity="0.85" transform="rotate(-45 80 80)" />
                <ellipse cx="40" cy="80" rx="15" ry="25" fill="white" opacity="0.85" transform="rotate(45 40 80)" />
                <ellipse cx="40" cy="40" rx="15" ry="25" fill="white" opacity="0.85" transform="rotate(-45 40 40)" />
            </g>
            <circle class="center" cx="60" cy="60" r="12" fill="#ffd700" />
            <circle cx="60" cy="60" r="8" fill="#ffed4e" />
        </svg>

        <!-- Bunga 5 -->
        <svg class="flower flower5" width="130" height="130" viewBox="0 0 120 120">
            <g class="petal">
                <ellipse cx="60" cy="30" rx="15" ry="25" fill="white" opacity="0.9" />
                <ellipse cx="90" cy="60" rx="15" ry="25" fill="white" opacity="0.9" transform="rotate(90 90 60)" />
                <ellipse cx="60" cy="90" rx="15" ry="25" fill="white" opacity="0.9" />
                <ellipse cx="30" cy="60" rx="15" ry="25" fill="white" opacity="0.9" transform="rotate(90 30 60)" />
                <ellipse cx="80" cy="40" rx="15" ry="25" fill="white" opacity="0.85" transform="rotate(45 80 40)" />
                <ellipse cx="80" cy="80" rx="15" ry="25" fill="white" opacity="0.85" transform="rotate(-45 80 80)" />
                <ellipse cx="40" cy="80" rx="15" ry="25" fill="white" opacity="0.85" transform="rotate(45 40 80)" />
                <ellipse cx="40" cy="40" rx="15" ry="25" fill="white" opacity="0.85" transform="rotate(-45 40 40)" />
            </g>
            <circle class="center" cx="60" cy="60" r="12" fill="#ffd700" />
            <circle cx="60" cy="60" r="8" fill="#ffed4e" />
        </svg>
    </div>

    <section class="our-story" id="our-story">
        <div class="container">
            <div class="text-story">
                <h1>Long Story Short</h1>
                <p>
                    Pertemuan sederhana kami tumbuh menjadi ikatan yang penuh makna.
                    Dalam balutan adat Yogyakarta—beskap, kebaya beludru, dan lantunan
                    gamelan — kami memulai langkah baru sebagai dua hati yang dipersatukan
                    tradisi dan doa keluarga. Inilah awal perjalanan kami, sederhana
                    namun penuh cinta.
                </p>
                <p class="signature">Cinta dan Mikail</p>
            </div>
        </div>
    </section>

    <section class="our-gallery" id="our-gallery">
        <div class="container">
            <h1>Gallery</h1>

            <div class="gallery-grid">
                <div class="gallery-item gallery-large">
                    <img src="/public/assets/image/gallery-1.png" alt="Gallery 1">
                </div>

                <div class="gallery-item gallery-tall">
                    <img src="/public/assets/image/gallery-2.png" alt="Gallery 2">
                </div>

                <div class="gallery-column">
                    <div class="gallery-item gallery-medium">
                        <img src="/public/assets/image/gallery-3.png" alt="Gallery 3">
                    </div>
                    <div class="gallery-item gallery-medium">
                        <img src="/public/assets/image/gallery-4.png" alt="Gallery 4">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        const sections = document.querySelectorAll('section');

        window.addEventListener('scroll', () => {
            let current = '';

            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (scrollY >= (sectionTop - 200)) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href').slice(1) === current) {
                    link.classList.add('active');
                }
            });

            // Navbar scroll effect
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Hamburger Toggle
        const hamburger = document.querySelector(".hamburger");
        const menu = document.querySelector(".nav-menu");
        const navLinks = document.querySelectorAll(".nav-link");

        hamburger.addEventListener("click", () => {
            hamburger.classList.toggle("active");
            menu.classList.toggle("active");
        });

        // Close menu when link clicked
        navLinks.forEach(link => {
            link.addEventListener("click", () => {
                hamburger.classList.remove("active");
                menu.classList.remove("active");
            });
        });

    </script>

</body>

</html>