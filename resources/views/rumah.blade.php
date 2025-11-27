<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cinta & Mikail</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/image/cmo.png') }}">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Birthstone+Bounce:wght@400;500&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Carattere&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Carattere&family=Fleur+De+Leah&display=swap');

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

    .bunga-kiri-hero {
        position: absolute;
        top: 40%;
        left: 0;
        width: 25%;
        z-index: 5;
    }

    .bunga-kanan-hero {
        position: absolute;
        top: 68%;
        right: 0;
        width: 25%;
        z-index: 5;
    }

    @media(max-width: 768px) {
        .bunga-kiri-hero {
            width: 50%;
            top: -5%;
        }

        .bunga-kanan-hero {
            width: 50%;
            top: 80%;
        }
    }

    .navbar {
        padding: 4rem 3rem;
        position: absolute;
        z-index: 1000;
        transition: all 0.3s ease;
        z-index: 10;
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
        z-index: 10000;
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

    .arrow-left, .arrow-right {
        color: white;
        font-size: 2rem;
        font-weight: bold;
    }

    .arrow-left {
        animation: slideRight 1s ease-in-out infinite;
    }

    .arrow-right {
        animation: slideLeft 1s ease-in-out infinite;
    }

    @keyframes slideRight {
        0%, 100% { transform: translateX(0); }
        50% { transform: translateX(10px); }
    }

    @keyframes slideLeft {
        0%, 100% { transform: translateX(0); }
        50% { transform: translateX(-10px); }
    }

    .tamu {
        padding: 1rem 2rem;
        cursor: pointer;
        background: rgba(0, 0, 0, 0.7);
        color: white;
        backdrop-filter: blur(10px);
        border-radius: 20px;
        border: white 2px solid;
        font-size: 1.3rem;
        transition: all 0.3s ease;
        font-weight: bold;
    }

    .tamu:hover {
        background: white;
        color: black;
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

    @media(max-width: 768px) {

        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            padding: 1.5rem;
            z-index: 100;
            background: linear-gradient(180deg, rgba(0, 0, 0, 0.5) 0%, transparent 100%);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0;
        }

        /* --- 2. Hamburger Button --- */
        .hamburger {
            display: block;
            cursor: pointer;
            width: 30px;
            height: 24px;
            position: relative;
            z-index: 102;
            margin-left: auto;
            -webkit-tap-highlight-color: transparent;
        }

        .hamburger span {
            display: block;
            position: absolute;
            width: 100%;
            height: 3px;
            background-color: white;
            border-radius: 3px;
            transition: all 0.3s ease-in-out;
            left: 0;
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

        .hamburger.active span:nth-child(1) {
            top: 10px;
            transform: rotate(45deg);
        }

        .hamburger.active span:nth-child(2) {
            opacity: 0;
            transform: translateX(20px);
        }

        .hamburger.active span:nth-child(3) {
            top: 10px;
            transform: rotate(-45deg);
        }

        /* --- 3. Nav Menu Dropdown --- */
        .nav-menu {
            display: flex;
            flex-direction: column;
            gap: 1.2rem;
            position: fixed;
            top: 70px;
            right: 1.5rem;
            min-width: 200px;
            padding: 1.5rem 2rem;
            border-radius: 12px;
            background: rgba(0, 0, 0, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
            opacity: 0;
            visibility: hidden;
            transform: translateY(-15px);
            transition: all 0.3s ease-in-out;
            z-index: 101;
        }

        .nav-menu.active {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .nav-menu li {
            list-style: none;
            text-align: center;
        }

        .nav-link {
            display: block;
            color: white;
            text-decoration: none;
        }

        /* --- 4. HERO FULL SCREEN --- */
        .hero {
            padding: 0;
            height: 100vh;
            position: relative;
        }

        .bg-hero {
            width: 100%;
            height: 100vh;
            object-fit: cover;
            border-radius: 0 !important;
            border: none !important;
            -webkit-mask-image: linear-gradient(to bottom, black 75%, transparent 100%);
            mask-image: linear-gradient(to bottom, black 75%, transparent 100%);
        }


        /* --- 5. Konten Hero (sesuaikan posisi) --- */
        .logo {
            position: absolute;
            top: 25%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10;
        }

        .logo #logo {
            width: 100px;
        }

        .hero-title {
            position: absolute;
            top: 45%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 2.5rem;
            gap: 15px;
            z-index: 10;
        }

        .hero-title h1 {
            font-size: 2.5rem;
        }

        .hero-isi {
            position: absolute;
            top: 58%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10;
        }

        .hero-isi p:first-child {
            font-size: 1rem;
        }

        .hero-isi p:last-child {
            font-size: 2rem;
        }

        /* --- 6. Tombol Tamu DIMASUKKAN KE HERO (di tengah bawah) --- */
        .tamu {
            position: absolute;
            top: 0%;
            /* Masih di dalam hero */
            left: 50%;
            transform: translateX(-50%);
            font-size: 0.5rem;
            padding: 0.8rem 1.5rem;
            z-index: -1;
            width: 250%;
        }

        .btn-tamu {
            position: absolute; 
            top: b0%; 
            left: 50%; 
            transform: translate(-50%, -50%); 
        }

        
    }


    .container-bunga {
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
        background: url("{{ asset('assets/image/bg-story.webp') }}") no-repeat center center/cover;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 8rem 2rem;
    }

    .our-story .container {
        max-width: 1400px;
        height: 700px;
        width: 100%;
        margin: 0 auto;
        border-radius: 40px;
        padding: 9rem 4rem;
        align-items: center;
    }

    .our-story h1 {
        font-size: 5rem;
        color: #5B4C3D;
        margin-bottom: 4rem;
        font-family: "Carattere", cursive;
        position: relative;
    }

    .our-story h1::after {
        content: '';
        display: inline-block;
        width: 150px;
        height: 3px;
        background: #5B4C3D;
        margin-left: 2rem;
        vertical-align: middle;
        position: relative;
        top: -5px;
    }

    .text-story p:last-child {
        margin-top: 2rem;
        font-family: "Carattere", cursive;
        font-size: 3rem;
    }

    .text-story p:last-child::before {
        content: '';
        display: inline-block;
        width: 60px;
        height: 2px;
        background: #5B4C3D;
        margin-right: 1rem;
        vertical-align: middle;
    }

    .our-story p {
        font-size: 1.8rem;
        color: #5B4C3D;
        line-height: 1.8;
        font-weight: 500;
        letter-spacing: 1px;
        font-family: Poppins, sans-serif;
        text-align: justify;
    }


    /* ========== RESPONSIVE DESIGN ========== */

    /* Tablet & iPad (768px - 1024px) */
    @media screen and (max-width: 1024px) {
        .our-story {
            padding: 7rem 1.5rem;
            min-height: 80vh;
        }

        .our-story .container {
            height: auto;
            padding: 6rem 3rem;
            border-radius: 30px;
        }

        .our-story h1 {
            font-size: 4rem;
            margin-bottom: 3rem;
        }

        .our-story h1::after {
            width: 100px;
            margin-left: 1.5rem;
        }

        .our-story p {
            font-size: 1.5rem;
            line-height: 1.7;
        }

        .text-story p:last-child {
            font-size: 2.5rem;
            margin-top: 1.5rem;
        }
    }

    /* Mobile Landscape (576px - 767px) */
    @media screen and (max-width: 767px) {
        .our-story {
            padding: 4rem 1rem;
            min-height: auto;
        }

        .our-story .container {
            height: auto;
            padding: 4rem 2rem;
            border-radius: 20px;
        }

        .our-story h1 {
            font-size: 3rem;
            margin-bottom: 2rem;
        }

        .our-story h1::after {
            width: 80px;
            height: 2px;
            margin-left: 1rem;
            top: -3px;
        }

        .our-story p {
            font-size: 1.3rem;
            line-height: 1.6;
            text-align: left;
        }

        .text-story p:last-child {
            font-size: 2rem;
            margin-top: 1.5rem;
        }

        .text-story p:last-child::before {
            width: 40px;
            margin-right: 0.8rem;
        }
    }

    /* Mobile Portrait (< 576px) */
    @media screen and (max-width: 575px) {
        .our-story {
            padding: 4rem 0.8rem;
            min-height: auto;
        }

        .our-story .container {
            height: auto;
            padding: 3rem 1.5rem;
            border-radius: 15px;
        }

        .our-story h1 {
            font-size: 2.9rem;
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .our-story h1::after {
            display: none;
            /* Sembunyikan garis dekoratif di mobile kecil */
        }

        .our-story p {
            font-size: 1.1rem;
            line-height: 1.6;
            letter-spacing: 0.5px;
            text-align: left;
        }

        .text-story p:last-child {
            font-size: 1.8rem;
            margin-top: 1.2rem;
            text-align: center;
        }

        .text-story p:last-child::before {
            width: 30px;
            height: 1.5px;
            margin-right: 0.5rem;
        }
    }

    /* Extra Small Mobile (< 375px) */
    @media screen and (max-width: 374px) {
        .our-story {
            padding: 7rem 0.5rem;
        }

        .our-story .container {
            padding: 2.5rem 1.2rem;
            border-radius: 12px;
        }

        .our-story h1 {
            font-size: 2rem;
            margin-bottom: 1.2rem;
        }

        .our-story p {
            font-size: 1rem;
            line-height: 1.5;
        }

        .text-story p:last-child {
            font-size: 1.5rem;
            margin-top: 1rem;
        }
    }


    .our-gallery {
        position: relative;
        width: 100%;
        min-height: 110vh;
        padding: 4rem 2rem;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .our-gallery .container {
        max-width: 1400px;
        height: 950px;
        width: 100%;
        margin: 0 auto;
        padding: 2rem 4rem;
    }

    .our-gallery h1 {
        font-size: 5rem;
        color: white;
        margin-bottom: 4rem;
        font-family: "Carattere", cursive;
        position: relative;
        text-align: center;
    }

    .our-gallery h1::before {
        content: '';
        display: inline-block;
        width: 150px;
        height: 3px;
        background: white;
        margin-left: 2rem;
        vertical-align: middle;
        position: relative;
        top: -5px;
    }


    .parent {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        grid-auto-rows: 220px;
    }

    .div1,
    .div2,
    .div3,
    .div4 {
        border: 2px solid #553636;
        overflow: hidden;
    }

    .div1 {
        grid-row: span 3;
        /* potret tinggi kiri */
    }

    .div2 {
        grid-row: span 3;
        /* potret paling tinggi tengah */
        ;
    }

    .div3 {
        grid-row: span 1;
        /* kotak square atas kanan */
    }

    .div4 {
        grid-row: span 2;
        /* landscape bawah kanan */
    }

    .parent img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: all 0.3s ease;
        object-position: 0 10%;
    }

    .parent img:hover {
        transform: scale(1.2);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
    }


    /* ========== RESPONSIVE GALLERY ========== */

    /* Tablet & iPad (768px - 1024px) */
    @media screen and (max-width: 1024px) {
        .our-gallery {
            min-height: auto;
            padding: 4rem 1.5rem;
        }

        .our-gallery .container {
            height: auto;
            padding: 2rem 2rem;
        }

        .our-gallery h1 {
            font-size: 4rem;
            margin-bottom: 3rem;
        }

        .our-gallery h1::before {
            width: 100px;
            margin-left: 1.5rem;
        }

        .parent {
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            grid-auto-rows: 200px;
        }

        .div1 {
            grid-row: span 2;
            grid-column: 1;
        }

        .div2 {
            grid-row: span 2;
            grid-column: 2;
        }

        .div3 {
            grid-row: span 1;
            grid-column: 1;
        }

        .div4 {
            grid-row: span 1;
            grid-column: 2;
        }
    }

    /* Mobile Landscape (576px - 767px) */
    @media screen and (max-width: 767px) {
        .our-gallery {
            padding: 3rem 1rem;
            min-height: auto;
        }

        .our-gallery .container {
            padding: 2rem 1rem;
            height: auto;
        }

        .our-gallery h1 {
            font-size: 3rem;
            margin-bottom: 2rem;
        }

        .our-gallery h1::before {
            width: 80px;
            height: 2px;
            margin-left: 1rem;
            top: -3px;
        }

        .parent {
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;
            grid-auto-rows: 180px;
        }

        .div1 {
            grid-row: span 2;
            grid-column: 1;
        }

        .div2 {
            grid-row: span 2;
            grid-column: 2;
        }

        .div3 {
            grid-row: span 1;
            grid-column: span 2;
            /* Full width */
        }

        .div4 {
            grid-row: span 1;
            grid-column: span 2;
            /* Full width */
        }
    }

    /* Mobile Portrait Alternative (< 576px) */
    @media screen and (max-width: 575px) {
        .our-gallery {
            padding: 2.5rem 0.8rem;
            min-height: auto;
        }

        .our-gallery .container {
            padding: 1.5rem 0.5rem;
            height: auto;
        }

        .our-gallery h1 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }

        .our-gallery h1::before {
            display: none;
        }

        .parent {
            grid-template-columns: repeat(2, 1fr);
            /* 2 kolom */
            gap: 8px;
            grid-auto-rows: 150px;
        }

        /* Layout: 2x2 grid */
        .div1 {
            grid-row: span 1;
            grid-column: 1;
        }

        .div2 {
            grid-row: span 1;
            grid-column: 2;
        }

        .div3 {
            grid-row: span 1;
            grid-column: 1;
        }

        .div4 {
            grid-row: span 1;
            grid-column: 2;
        }

        .parent img:hover {
            transform: scale(1.05);
        }
    }

    /* Extra Small Mobile (< 375px) */
    @media screen and (max-width: 374px) {
        .our-gallery {
            padding: 2rem 0.5rem;
        }

        .our-gallery .container {
            padding: 1rem 0.3rem;
        }

        .our-gallery h1 {
            font-size: 2rem;
            margin-bottom: 1.2rem;
        }

        .parent {
            gap: 8px;
            grid-auto-rows: 220px;
        }

        .div1,
        .div2,
        .div3,
        .div4 {
            border: 1px solid #553636;
            /* Border lebih tipis */
        }
    }

    /* date Section */
    .date {
        position: relative;
        width: 100%;
        min-height: 900px;
        height: auto;
        overflow: hidden;
        padding: 50px 0;
    }

    .date .bg-date {
        position: absolute;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
        width: 100%;
        height: auto;
        object-fit: cover;
        z-index: -5;
        max-height: 900px;
        filter: blur(4px);
        -webkit-mask-image: linear-gradient(to bottom,
                transparent 0%,
                black 20%,
                black 80%,
                transparent 100%);
        mask-image: linear-gradient(to bottom,
                transparent 0%,
                black 20%,
                black 80%,
                transparent 100%);

    }

    .date .date-contain {
        position: relative;
        width: 100%;
        height: 800px;
        max-width: 1200px;
        margin: 0 auto;
        transform: scale(1.2);
        filter: drop-shadow(0 4px 6px rgba(0, 0, 0, 0.4));
    }

    /* Mail Box - Center */
    .date .mail-box {
        position: absolute;
        top: 185px;
        left: 50%;
        transform: translateX(-50%);
        width: min(550px, 80vw);
        max-width: 550px;
        z-index: 99;
    }

    /* Bunga 1 - Kanan Atas */
    .date .mail-bunga1 {
        position: absolute;
        top: 10%;
        right: 10%;
        z-index: 2;
    }

    /* Bunga 2 - Kanan Atas ke-2 */
    .date .mail-bunga2 {
        position: absolute;
        top: 5%;
        right: 0;
        z-index: 1;
        width: 30%;
    }

    /* Bunga 3 - Kiri Bawah */
    .date .mail-bunga3 {
        position: absolute;
        bottom: 15%;
        left: 19%;
        width: 20%;
        z-index: 100;
    }

    /* Bunga 4 - Kiri Atas ke-2 */
    .date .mail-bunga4 {
        position: absolute;
        top: 10%;
        left: 14%;
        z-index: 2;
    }

    /* Bunga 5 - Kiri Atas */
    .date .mail-bunga5 {
        position: absolute;
        top: 5%;
        left: 20%;
        z-index: 3;
        width: 35%;
    }

    /* Bunga 6 - Kanan Bawah */
    .date .mail-bunga6 {
        position: absolute;
        bottom: 0;
        right: 15%;
        z-index: 100;
        width: 35%;
    }

    /* Cop Mail - Center Bottom */
    .date .mail-cop {
        position: absolute;
        bottom: 25%;
        left: 45%;
        width: 10%;
        z-index: 100;

    }

    /* Koran 1 - Kanan Tengah */
    .date .mail-koran1 {
        position: absolute;
        top: 45%;
        right: 15%;
        z-index: -2;
        width: 25%;
    }

    /* Koran 2 - Kiri Tengah */
    .date .mail-koran2 {
        position: absolute;
        top: 50%;
        left: 20%;
        z-index: -2;
        width: 23%;
    }

    /* Kerdus 1 - Kanan Atas */
    .date .mail-kerdus1 {
        position: absolute;
        top: 27%;
        right: 15%;
        z-index: -3;
        width: 35%;
    }

    /* Kerdus 2 - Kanan Bawah */
    .date .mail-kerdus2 {
        position: absolute;
        bottom: 3%;
        right: 10%;
        z-index: -3;
        width: 30%;
    }

    /* Kerdus 3 - Kiri Bawah */
    .date .mail-kerdus3 {
        position: absolute;
        bottom: 10%;
        left: 10%;
        width: 25%;
        z-index: -3;
    }

    /* Text Content */
    .date .text {
        position: absolute;
        top: 48%;
        left: 51%;
        transform: translate(-50%, -50%) rotate(5deg);
        text-align: center;
        z-index: 100;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    .date .text h4 {
        font-family: "Carattere", cursive;
        font-size: clamp(24px, 4vw, 30px);
        color: #85031F;
        margin-bottom: 5px;
        margin-top: 0;
    }

    .date .text h2 {
        font-family: "Carattere", cursive;
        font-size: clamp(50px, 8vw, 70px);
        color: #85031F;
        margin: 10px 0;
    }

    .date .text .time {
        font-family: "Carattere", cursive;
        font-size: clamp(18px, 3vw, 20px);
        color: #85031F;
        margin: 10px 0;
    }

    .date .text .loc {
        font-family: "Montserrat", sans-serif;
        font-size: clamp(10px, 2vw, 12px);
        color: #85031F;
        margin: 5px 0;
        font-weight: 500;
    }

    @media screen and (max-width: 1024px) {
        .date {
            min-height: 700px;
            padding: 30px 0;
        }

        .date .bg-date {
            height: 400px;
        }

        .date .date-contain {
            height: 650px;
            transform: scale(1.2);
        }

        .date .mail-box {
            top: 20%;
            width: 50%;
        }

        .date .text {
            top: 50%;
        }

        .date .text h2 {
            font-size: 1.2rem;
        }
    }

    /* Tablet (768px) */
    @media screen and (max-width: 768px) {
        .date {
            min-height: 600px;
            padding: 20px 0;
        }

        .date .date-contain {
            height: 550px;
            transform: scale(1.1);
        }

        .date .mail-box {
            top: 18%;
            width: 55%;
        }

        .date .mail-bunga1 {
            top: 12%;
            right: 20%;
            width: 25%;
        }

        .date .mail-bunga2 {
            top: 15%;
            right: 15%;
            width: 32%;
        }

        .date .mail-bunga3 {
            bottom: 25%;
            left: 15%;
            width: 30%;
        }

        .date .mail-bunga4 {
            top: 20%;
            left: 10%;
            width: 30%;
        }

        .date .mail-bunga5 {
            top: 8%;
            left: 15%;
            width: 38%;
        }

        .date .mail-bunga6 {
            bottom: 20%;
            right: 12%;
            width: 38%;
        }

        .date .mail-koran1 {
            top: 48%;
            right: 12%;
            width: 28%;
        }

        .date .mail-koran2 {
            top: 52%;
            left: 15%;
            width: 26%;
        }

        .date .mail-kerdus1 {
            top: 28%;
            right: 15%;
            width: 38%;
        }

        .date .mail-kerdus2 {
            bottom: 20%;
            right: 15%;
            width: 32%;
        }

        .date .mail-kerdus3 {
            bottom: 25%;
            left: 18%;
            width: 25%;
        }

        .date .mail-cop {
            bottom: 43%;
            left: 42%;
            width: 14%;
        }

        .date .text {
            top: 36%;
            left: 50%;
        }

        .date .text h4 {
            font-size: 1rem;
        }

        .date .text h2 {
            font-size: 1rem;
        }

        .date .text .time {
            font-size: 0.9rem;
        }

        .date .text .loc {
            font-size: 0.55rem;
        }
    }

    /* Mobile Large (480px) */
    @media screen and (max-width: 480px) {
        .date {
            min-height: 500px;
            padding: 15px 0;
        }

        .date .date-contain {
            height: 480px;
            transform: scale(1);
        }

        .date .mail-box {
            top: 15%;
            width: 70%;
        }

        /* Sembunyikan beberapa dekorasi */
        .date .mail-bunga1,
        .date .mail-bunga4 {
            display: none;
        }

        .date .mail-bunga2 {
            top: 10%;
            right: -5%;
            width: 40%;
        }

        .date .mail-bunga5 {
            top: 10%;
            left: -5%;
            width: 45%;
        }

        .date .mail-bunga3 {
            bottom: 20%;
            left: 5%;
            width: 30%;
        }

        .date .mail-bunga6 {
            bottom: 20%;
            right: 5%;
            width: 35%;
        }

        .date .mail-koran1 {
            top: 50%;
            right: 8%;
            width: 32%;
        }

        .date .mail-koran2 {
            top: 55%;
            left: 10%;
            width: 30%;
        }

        .date .mail-kerdus1 {
            top: 32%;
            right: 10%;
            width: 38%;
        }

        .date .mail-kerdus2 {
            bottom: 8%;
            right: 5%;
            width: 35%;
        }

        .date .mail-kerdus3 {
            bottom: 15%;
            left: 5%;
            width: 30%;
        }

        .date .mail-cop {
            bottom: 37%;
            left: 40%;
            width: 18%;
        }

        .date .text {
            top: 40%;
            left: 50%;
            padding: 0 10px;
        }

        .date .text h4 {
            margin-bottom: 2px;
        }

        .date .text h2 {
            margin: 3px 0;
        }

        .date .text .time {
            margin: 5px 0;
        }
    }

    /* Mobile Medium (390px) */
    @media screen and (max-width: 390px) {
        .date {
            min-height: 450px;
        }

        .date .date-contain {
            height: 430px;
        }

        .date .mail-box {
            top: 12%;
            width: 75%;
        }

        .date .mail-bunga2 {
            top: 8%;
            right: -8%;
            width: 42%;
        }

        .date .mail-bunga5 {
            top: 8%;
            left: -8%;
            width: 48%;
        }

        .date .mail-cop {
            bottom: 34%;
            left: 38%;
            width: 20%;
        }

        .date .text {
            top: 38%;
        }
    }

    /* Mobile Small (360px) */
    @media screen and (max-width: 360px) {
        .date {
            min-height: 420px;
        }

        .date .date-contain {
            height: 400px;
        }

        .date .mail-box {
            top: 10%;
            width: 80%;
        }

        .date .mail-bunga2 {
            top: 6%;
            right: -10%;
            width: 45%;
        }

        .date .mail-bunga5 {
            top: 6%;
            left: -10%;
            width: 50%;
        }

        .date .mail-bunga3 {
            bottom: 18%;
            left: 2%;
            width: 32%;
        }

        .date .mail-bunga6 {
            bottom: 18%;
            right: 2%;
            width: 38%;
        }

        .date .mail-koran1 {
            top: 52%;
            right: 5%;
            width: 35%;
        }

        .date .mail-koran2 {
            top: 56%;
            left: 5%;
            width: 33%;
        }

        .date .mail-cop {
            bottom: 34%;
            left: 36%;
            width: 22%;
        }

        .date .text {
            top: 36%;
        }
    }

    /* Location Section */

    .location {
        position: relative;
        width: 100%;
        min-height: 100vh;
        padding: 6rem 2rem;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
    }

    .location .container {
        max-width: 1700px;
        height: 700px;
        width: 100%;
        margin: 0 auto;
        border: #ffffff 2px solid;
        border-radius: 40px;
        padding: 4rem 4rem;
        display: flex;
        gap: 6rem;
        align-items: center;
    }

    .location .container iframe {
        width: 100%;
        height: 100%;
        border: none;
        border-radius: 30px;
    }

    .location h1 {
        font-size: 7rem;
        color: #ffffff;
        margin-bottom: 4rem;
        font-family: "Carattere", cursive;
        position: relative;
    }

    .location h1::after {
        content: '';
        display: inline-block;
        width: 150px;
        height: 3px;
        background: white;
        margin-left: 2rem;
        vertical-align: middle;
        position: relative;
        top: -5px;
    }

    .locate-list {
        flex-direction: column;
        display: flex;
        list-style-position: inside;
    }

   .btn-map {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 0.9rem 1.7rem;
    z-index: 20;
    cursor: pointer;
    background: rgba(255, 255, 255, 0.15);
    color: white;
    backdrop-filter: blur(10px);
    border-radius: 16px;
    border: 2px solid rgba(255, 255, 255, 0.6);
    font-size: 1rem;
    transition: all 0.25s ease;
    font-weight: 600;
}

.btn-map:hover {
    background: white;
    color: black;
    transform: translateY(-2px);
    box-shadow: 0 6px 14px rgba(255, 255, 255, 0.2);
}

.icon-map {
    display: block;
}




    /* ========== RESPONSIVE LOCATION ========== */

    /* Large Desktop (1200px - 1600px) */
    @media screen and (max-width: 1600px) {
        .location .container {
            max-width: 1400px;
            padding: 3.5rem 3rem;
            gap: 4rem;
        }

        .location h1 {
            font-size: 6rem;
        }
    }

    /* Tablet & iPad (768px - 1024px) */
    @media screen and (max-width: 1024px) {
        .location {
            padding: 4rem 1.5rem;
            min-height: auto;
        }

        .location .container {
            height: auto;
            max-width: 900px;
            flex-direction: column;
            /* Stack vertikal */
            gap: 3rem;
            padding: 3rem 2.5rem;
            border-radius: 30px;
        }

        .location .container iframe {
            width: 100%;
            height: 450px;
            border-radius: 20px;
        }

        .location h1 {
            font-size: 5rem;
            margin-bottom: 2.5rem;
            text-align: center;
        }

        .location h1::after {
            width: 120px;
            height: 2px;
            margin-left: 1.5rem;
            top: -8px;
        }

        .locate {
            width: 100%;
        }

        .locate-text p {
            font-size: 1.2rem;
            line-height: 1.7;
            text-align: center;
            margin-bottom: 2rem;
        }

        .locate-list {
            transform: translateX(0);
            /* Reset transform */
            gap: 0.5rem;
        }

        .locate-list li {
            font-size: 1.1rem;
            padding: 0.5rem 0;
        }
    }

    /* Mobile Landscape (576px - 767px) */
    @media screen and (max-width: 767px) {
        .location {
            padding: 3rem 1rem;
        }

        .location .container {
            padding: 2.5rem 1.5rem;
            gap: 2rem;
            border-radius: 20px;
            border-width: 1.5px;
        }

        .location .container iframe {
            height: 350px;
            border-radius: 15px;
        }

        .location h1 {
            font-size: 4rem;
            margin-bottom: 2rem;
        }

        .location h1::after {
            width: 100px;
            margin-left: 1.2rem;
            top: -6px;
        }

        .locate-text p {
            font-size: 1.1rem;
            line-height: 1.6;
            text-align: left;
            margin-bottom: 1.5rem;
            padding: 0;
        }

        .locate-list {
            gap: 0.3rem;
            text-align: left;
            padding-left: 0;
            list-style-position: inside;
            margin-top: 0;
        }

        .locate-list li {
            font-size: 1rem;
            padding: 0.4rem 0;
            line-height: 1.5;
        }
    }

    /* Mobile Portrait (< 576px) */
    @media screen and (max-width: 575px) {
        .location {
            padding: 2.5rem 0.8rem;
        }

        .location .container {
            height: auto;
            padding: 2rem 1.2rem;
            gap: 1.5rem;
            border-radius: 15px;
            border-width: 1px;
        }

        .location .container iframe {
            height: 300px;
            border-radius: 12px;
        }

        .location h1 {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .location h1::after {
            width: 80px;
            height: 2px;
            margin-left: 1rem;
            top: -5px;
        }

        .locate-text p {
            font-size: 1rem;
            line-height: 1.6;
            text-align: left;
            margin-bottom: 1.2rem;
        }

        .locate-list {
            transform: translateX(0);
            gap: 0.2rem;
            padding: 0;
        }

        .locate-list li {
            font-size: 0.9rem;
            padding: 0.35rem 0;
            line-height: 1.5;
        }
    }

    /* Extra Small Mobile (< 375px) */
    @media screen and (max-width: 374px) {
        .location {
            padding: 2rem 0.5rem;
        }

        .location .container {
            padding: 1.5rem 1rem;
            gap: 1.2rem;
            border-radius: 12px;
        }

        .location .container iframe {
            height: 250px;
            border-radius: 10px;
        }

        .location h1 {
            font-size: 2.5rem;
            margin-bottom: 1.2rem;
        }

        .location h1::after {
            display: none;
            /* Sembunyikan garis di layar sangat kecil */
        }

        .locate-text p {
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }

        .locate-list li {
            font-size: 0.85rem;
            padding: 0.3rem 0;
        }
    }

    /* Landscape Orientation Fix (Mobile Landscape) */
    @media screen and (max-height: 500px) and (orientation: landscape) {
        .location {
            padding: 2rem 1rem;
            min-height: auto;
        }

        .location .container {
            flex-direction: row;
            /* Kembali horizontal di landscape */
            height: auto;
            gap: 2rem;
        }

        .location .container iframe {
            height: 350px;
            max-width: 50%;
        }

        .locate {
            max-width: 50%;
        }

        .location h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }
    }

    .surat {
        position: relative;
        width: 100%;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 5rem 2rem;
    }

    .surat .container {
        position: relative;
        width: 100%;
        height: auto;
        /* Biarkan tinggi menyesuaikan lebar */
        aspect-ratio: 436 / 189;
        background: url("{{ asset('assets/image/bg-surat.webp') }}") no-repeat center center;
        background-size: 100% 100%;
        /* Memaksa gambar memenuhi kotak yang rasionya sudah pas */
        max-width: 1600px;
        margin: 0 auto;
        padding: 2rem 4rem;
        border-radius: 40px;
    }

    .red-card {
        position: absolute;
        background-color: #690116;
        color: #fff;
        padding: 2.5rem;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .card-rsvp {
        width: 45%;
        height: 55%;
        top: -3%;
        left: 25%;
        z-index: 2;
        transform: rotate(-6deg);
        box-shadow: 5px 10px 5px rgba(0, 0, 0, 0.6);
        border-radius: 20px;
    }

    .card-message {
        width: 45%;
        height: 60%;
        top: 45%;
        left: 30%;
        z-index: 1;
        background-color: #690116;
        color: #fff;
        padding: 8rem 2rem 2rem 3rem;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: flex-start;
        transform: rotate(10deg);
        border-radius: 20px;
        box-shadow: 5px 10px 5px rgba(0, 0, 0, 0.6);
        text-align: start;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.4);
    }

    .card-message .card-content p {
        font-size: 1.1rem;
        line-height: 1.6;
        margin-bottom: 1rem;
    }

    .card-message .card-content p:last-child {
        margin-top: 0.5rem;
    }


    .card-rsvp h1 {
        font-size: 9rem;
        margin: 0.5rem 0;
        font-style: italic;
        font-family: 'Times New Roman', Times, serif;
    }

    .card-rsvp .divider {
        height: 2px;
        width: 100%;
        background: rgba(255, 255, 255, 0.5);
        margin: 1rem auto;
    }

    .card-rsvp .names {
        font-family: "Birthstone Bounce", cursive;
        font-size: 3rem;
    }

    .card-rsvp .small-text {
        font-size: 2rem;
        font-family: 'Times New Roman', Times, serif;
        font-style: italic;
    }

    .flower-surat {
        position: absolute;
        width: 32%;
        bottom: 15%;
        left: 8%;
        z-index: 3;
        filter: drop-shadow(0 4px 6px rgba(0, 0, 0, 0.4));
    }

    /* ========== RESPONSIVE SURAT ========== */
    @media (max-width: 768px) {

        .surat {
            padding: 2rem 1rem;
            height: auto;
            min-height: auto;
        }

        .surat .container {
            aspect-ratio: unset;
            width: 100%;
            height: auto;
            min-height: 100vh;
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 0;
            padding: 4rem 1.5rem;
            overflow: hidden;
        }

        .red-card {
            position: relative;
            width: 100%;
            max-width: 350px;
            height: auto;
            top: auto;
            left: auto;
            right: auto;
        }

        /* 3. Kartu RSVP (Atas) */
        .card-rsvp {
            transform: rotate(-3deg);
            margin-bottom: -4rem;
            z-index: 2;
            padding: 2rem;
        }

        .card-rsvp h1 {
            font-size: 5rem;
        }

        .card-rsvp .names {
            font-size: 2rem;
        }

        .card-rsvp .small-text {
            font-size: 1.5rem;
        }

        .card-message {
            transform: rotate(2deg);
            z-index: 1;
            padding: 6rem 2rem 3rem 2rem;
            width: 100%;
            max-width: 350px;
        }

        /* Sesuaikan ukuran teks paragraf */
        .card-message .card-content p {
            font-size: 1rem;
            text-align: left;
        }

        /* 5. Bunga Hiasan */
        .flower-surat {
            width: 50%;
            top: 0;
            right: -10%;
            bottom: auto;
            left: auto;
            transform: rotate(180deg);
        }
    }

    .footer {
        background: url("{{ asset('assets/image/bg-footer.webp') }}") no-repeat center top;
        background-size: 100% auto;
        padding: 9rem 2rem 2rem;
        color: white;
        min-height: 300px;
        /* bikin background nggak kepotong */
    }


    .footer-container {
        max-width: 1200px;
        margin: 0 auto;
        gap: 3rem;
        margin-bottom: 2rem;
        text-align: center;
        font-family: "Birthstone Bounce", cursive;
    }

    .footer-container h1 {
        font-size: 4rem;
        margin-bottom: 1rem;
    }

    .footer-container p {
        font-size: 2rem;
        letter-spacing: 2px;
        text-decoration: underline;
    }


    /* ========== RESPONSIVE FOOTER ========== */

    /* Large Desktop (1200px - 1600px) */
    @media screen and (max-width: 1600px) {
        .footer {
            padding: 8rem 2rem 2rem;
            min-height: 280px;
        }

        .footer-container h1 {
            font-size: 3.8rem;
        }

        .footer-container p {
            font-size: 1.9rem;
        }
    }

    /* Tablet & iPad (768px - 1024px) */
    @media screen and (max-width: 1024px) {
        .footer {
            background-size: cover;
            /* Lebih baik di tablet */
            background-position: center top;
            padding: 6rem 1.5rem 1.5rem;
            min-height: 250px;
        }

        .footer-container {
            max-width: 900px;
            gap: 2rem;
            margin-bottom: 1.5rem;
        }

        .footer-container h1 {
            font-size: 3.5rem;
            margin-bottom: 0.8rem;
        }

        .footer-container p {
            font-size: 1.7rem;
            letter-spacing: 1.5px;
        }
    }

    /* Mobile Landscape (576px - 767px) */
    @media screen and (max-width: 767px) {
        .footer {
            background-size: cover;
            background-position: center top;
            padding: 5rem 1rem 1.5rem;
            min-height: 220px;
        }

        .footer-container {
            gap: 1.5rem;
            margin-bottom: 1rem;
        }

        .footer-container h1 {
            font-size: 3rem;
            margin-bottom: 0.6rem;
        }

        .footer-container p {
            font-size: 1.5rem;
            letter-spacing: 1px;
        }
    }

    /* Mobile Portrait (< 576px) */
    @media screen and (max-width: 575px) {
        .footer {
            background-size: cover;
            background-position: center top;
            padding: 4rem 0.8rem 1.2rem;
            min-height: 200px;
        }

        .footer-container {
            max-width: 100%;
            gap: 1rem;
            margin-bottom: 0.8rem;
            padding: 0 1rem;
        }

        .footer-container h1 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
            line-height: 1.2;
        }

        .footer-container p {
            font-size: 1.3rem;
            letter-spacing: 0.8px;
        }
    }

    /* Extra Small Mobile (< 375px) */
    @media screen and (max-width: 374px) {
        .footer {
            padding: 3.5rem 0.5rem 1rem;
            min-height: 180px;
        }

        .footer-container {
            gap: 0.8rem;
            padding: 0 0.5rem;
        }

        .footer-container h1 {
            font-size: 2rem;
            margin-bottom: 0.4rem;
        }

        .footer-container p {
            font-size: 1.1rem;
            letter-spacing: 0.5px;
        }
    }

    /* Very Small Screens (< 320px) */
    @media screen and (max-width: 319px) {
        .footer {
            padding: 3rem 0.3rem 0.8rem;
            min-height: 160px;
        }

        .footer-container h1 {
            font-size: 1.8rem;
        }

        .footer-container p {
            font-size: 1rem;
        }
    }

    /* --- Scroll to Top Button --- */
    .scroll-to-top {
        position: fixed;
        bottom: 25px;
        right: 25px;
        width: 50px;
        height: 50px;
        background-color: rgba(0, 0, 0, 0.7);
        /* Warna hitam transparan */
        color: white;
        border-radius: 50%;
        /* Membuat bulat */
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 24px;
        cursor: pointer;
        z-index: 9999;
        /* Agar selalu di paling atas layer */

        /* Animasi Muncul/Hilang */
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease-in-out;
        transform: translateY(10px);

        /* Hilangkan highlight biru di HP */
        -webkit-tap-highlight-color: transparent;
    }

    /* Class ini akan ditambahkan oleh Javascript saat discroll */
    .scroll-to-top.show {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    /* Efek Hover (opsional) */
    .scroll-to-top:hover {
        background-color: black;
        transform: scale(1.1);
    }
</style>

<body>
    <img src="{{ asset('assets/image/bunga-kiri-hero.png') }}" class="bunga-kiri-hero">
    <img src="{{ asset('assets/image/bunga-kanan-hero.png') }}" class="bunga-kanan-hero">
    <section class="hero" id="hero">
        <div class="navbar">
            <div class="nav-container">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <ul class="nav-menu">
                    <li><a href="#our-story" class="nav-link active">Our Story</a></li>
                    <li><a href="#our-gallery" class="nav-link">Our Gallery</a></li>
                    <li><a href="#the-date" class="nav-link">The Date</a></li>
                    <li><a href="#location" class="nav-link">Location</a></li>
                </ul>
            </div>
        </div>
        <div class="logo">
            <img src="{{ asset('assets/image/cmo.png') }}" id="logo" alt="logo">
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
        <div class="tamu-btn" style="position: absolute; top: 100%; left: 50%; transform: translate(-50%, -50%); display: flex; align-items: center; gap: 1rem; z-index: 20;">
            <span class="arrow-left">→</span>
            <button class="tamu" onclick="location.href='/rsvp'">
                RSVP to get a 10% merch voucher!
            </button>
            <span class="arrow-right">←</span>
        </div>
        <img src="{{ asset('assets/image/bg-hero.webp') }}" class="bg-hero" alt="hero-bg">
    </section>

    <div class="container-bunga">
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
                    Our simple initial meeting developed into a meaningful bond. Adorned in the traditional attire of
                    Yogyakarta, the beskap, velvet kebaya, and the serene rhythm of the gamelan, we entered a new
                    chapter as two hearts united by tradition and the prayers of our families. This marks the beginning
                    of our journey, one that is humble yet filled with deep affection.
                </p>
                <p class="signature">Cinta & Mikail</p>
            </div>
        </div>
    </section>

    <section class="our-gallery" id="our-gallery">
        <div class="container">
            <h1>Our Gallery</h1>
            <div class="parent">
                <div class="div1"><img src="{{ asset('assets/image/gallery-2.webp') }}" alt=""></div>
                <div class="div2"><img src="{{ asset('assets/image/gallery-3.webp') }}" alt=""></div>
                <div class="div3"><img src="{{ asset('assets/image/gallery-4.webp') }}" alt=""></div>
                <div class="div4"><img src="{{ asset('assets/image/gallery-1.webp') }}" alt=""></div>
            </div>
        </div>
    </section>

    <section class="date" id="the-date">
        <img src="{{ asset('assets/image/bg-hero.webp') }}" alt="" class="bg-date">
        <div class="date-contain">
            <img src="{{ asset('assets/image/mail.png') }}" alt="Mail Box" class="mail-box">
            <img src="{{ asset('assets/image/bunga-kanan-atas-ke2.png') }}" alt="Bunga 1" class="mail-bunga1">
            <img src="{{ asset('assets/image/bunga-kanan-atas.png') }}" alt="Bunga 2" class="mail-bunga2">
            <img src="{{ asset('assets/image/bunga-kiri-bawah.png') }}" alt="Bunga 3" class="mail-bunga3">
            <img src="{{ asset('assets/image/bunga-kiri-atas-ke2.png') }}" alt="Bunga 4" class="mail-bunga4">
            <img src="{{ asset('assets/image/bunga-kiri-atas.png') }}" alt="Bunga 5" class="mail-bunga5">
            <img src="{{ asset('assets/image/bunga-kanan-atas.png') }}" alt="Bunga 6" class="mail-bunga6">
            <img src="{{ asset('assets/image/copmail.png') }}" alt="Cop Mail" class="mail-cop">
            <img src="{{ asset('assets/image/koran-kanan-tengah.png') }}" alt="Koran 1" class="mail-koran1">
            <img src="{{ asset('assets/image/koran-kiri-tengah.png') }}" alt="Koran 2" class="mail-koran2">
            <img src="{{ asset('assets/image/pojok-kanan-atas-kerdus.png') }}" alt="Kerdus 1" class="mail-kerdus1">
            <img src="{{ asset('assets/image/pojok-kanan-bawah-kerdus.png') }}" alt="Kerdus 2" class="mail-kerdus2">
            <img src="{{ asset('assets/image/pojok-kiri-bawah-kerdus.png') }}" alt="Kerdus 3" class="mail-kerdus3">

            <div class="text">
                <h4>save the date!</h4>
                <h2>03.12.25</h2>
                <p class="time">7:30-9:00 am</p>
                <p class="loc">SMK Telkom Purwokerto Hall</p>
            </div>
        </div>
    </section>

    <!-- Location Section -->
    <section class="location" id="location">
        <div class="container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.270715262679!2d109.24638807605118!3d-7.435267673256414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655e9d1768e4d1%3A0x959269c10818fa0c!2sSMK%20Telkom%20Purwokerto!5e0!3m2!1sid!2sid!4v1764143228294!5m2!1sid!2sid"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="locate">
                <h1>Location</h1>
                <div class="locate-text">
                    <p>D.I. Panjaitan Street No. 128 Karangreja, South Purwokerto District Banyumas Regency, Central
                        Java 53141 Indonesia</p>
                    <ul class="locate-list">
                        <li>Address: D.I Panjaitan Street No.128</li>
                        <li>Village/Sub-district: South Purwokerto</li>
                        <li>District: South Purwokerto</li>
                        <li>Regency: Banyumas</li>
                        <li>Province: Central Java</li>
                        <li>Postal Code: 53147</li>
                    </ul>
                    <br>
                    <button class="btn-map" onclick="window.open('https://maps.app.goo.gl/3Gj3RkxtMWupP2Mz5', '_blank');">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" class="icon-map">
        <path fill="currentColor" d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 
        9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z"/>
    </svg>
    View on Google Maps
</button>

                </div>
            </div>
        </div>
    </section>

    <section class="surat">
        <div class="container">
            <img src="{{ asset('assets/image/bunga-kanan-atas-ke2.png') }}" class="flower-surat">
            <div class="red-card card-rsvp">
                <div class="card-content">
                    <p class="small-text">fill your</p>
                    <h1>RSVP</h1>
                    <div class="divider"></div>
                    <p class="names">Cinta & Mikail</p>
                </div>
            </div>

            <div class="red-card card-message">
                <div class="card-content">
                    <p>With deep gratitude, we extend our sincere thanks for your kind attention and the prayers you
                        have offered. We also respectfully request the presence of Mr./Ms./Brother/Sister to join us and
                        bestow your blessings on our happy day. Your attendance is a great honor and joy for us.</p>
                    <br>
                    <p>Sincerely,<br>Cinta and Mikail, and our family</p>
                </div>
            </div>
        </div>
    </section>

    <div class="scroll-to-top" onclick="scrollToTop()">
        <span>&#8593;</span>
    </div>

    <footer class="footer">
        <div class="footer-container">
            <h1>Would you join ?</h1>
            <p>
                Cinta . Mikail
            </p>
        </div>
    </footer>



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

        const hamburger = document.querySelector(".hamburger");
        const menu = document.querySelector(".nav-menu");
        const navLinks = document.querySelectorAll(".nav-link");

        // Toggle menu saat hamburger diklik
        hamburger.addEventListener("click", () => {
            hamburger.classList.toggle("active");
            menu.classList.toggle("active");
        });

        // Tutup menu saat salah satu link diklik
        navLinks.forEach(link => {
            link.addEventListener("click", () => {
                hamburger.classList.remove("active");
                menu.classList.remove("active");
            });
        });

        // Tambahan: Tutup menu jika user klik di luar menu (opsional tapi bagus untuk UX)
        document.addEventListener("click", (e) => {
            if (!hamburger.contains(e.target) && !menu.contains(e.target)) {
                hamburger.classList.remove("active");
                menu.classList.remove("active");
            }
        });

        // Ambil elemen tombol
        const scrollBtn = document.querySelector('.scroll-to-top');

        // Fungsi untuk memantau scroll
        window.addEventListener('scroll', () => {
            // Jika scroll lebih dari 300px dari atas, munculkan tombol
            if (window.scrollY > 300) {
                scrollBtn.classList.add('show');
            } else {
                scrollBtn.classList.remove('show');
            }
        });


        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

    </script>

</body>

</html>