<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RSVP Undangan</title>
    <!-- Ganti dengan styling Anda, cth: Tailwind -->
    <script src="[https://cdn.tailwindcss.com](https://cdn.tailwindcss.com)"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Georgia', serif;
            background: url(/public/assets/image/bg-hero.webp) no-repeat center center/cover;
            min-height: 96vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .bg-rsvp {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }

        .bg-rsvp img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: blur(5px);
        }


        .form-container {
            background: #120b08bb;
            border: 2px solid rgba(200, 150, 100, 0.3);
            border-radius: 30px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0;
            max-width: 1000px;
            width: 100%;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
        }

        .form-image {
            padding: 10px 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 20px;
        }

        .form-image-placeholder {
            width: 100%;
            height: 100%;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgba(200, 150, 100, 0.3);
            font-size: 14px;
            text-align: center;
            padding: 40px;
        }

        .form-content {
            padding: 60px 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
        }

        .deadline {
            position: absolute;
            top: 30px;
            right: 50px;
            font-size: 14px;
            color: rgba(255, 255, 255, 0.6);
            font-style: italic;
        }

        .form-group {
            margin-bottom: 30px;
        }

        .form-group label {
            display: block;
            font-size: 15px;
            color: rgba(255, 255, 255, 0.8);
            font-style: italic;
            margin-bottom: 12px;
            font-weight: 300;
        }

        .required {
            font-size: 12px;
            color: rgba(200, 150, 100, 0.8);
            font-weight: normal;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            background: transparent;
            border: none;
            border-bottom: 2px solid rgba(200, 150, 100, 0.4);
            color: rgba(255, 255, 255, 0.9);
            padding: 12px 0;
            font-size: 14px;
            font-family: 'Georgia', serif;
            transition: border-color 0.3s ease;
            outline: none;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border-bottom-color: rgba(200, 150, 100, 0.8);
        }

        .form-group input::placeholder,
        .form-group textarea::placeholder {
            color: rgba(255, 255, 255, 0.3);
        }

        .submit-btn {
            background: transparent;
            border: 2px solid rgba(200, 150, 100, 0.6);
            color: rgba(200, 150, 100, 0.8);
            padding: 12px 40px;
            border-radius: 30px;
            font-size: 14px;
            font-family: 'Georgia', serif;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 20px;
            width: fit-content;
            text-transform: capitalize;
        }

        .submit-btn:hover {
            background: rgba(200, 150, 100, 0.1);
            border-color: rgba(200, 150, 100, 0.9);
            color: rgba(200, 150, 100, 0.95);
        }

        .thank-you {
            font-size: 14px;
            color: rgba(255, 255, 255, 0.6);
            margin-top: 40px;
            font-style: italic;
        }

        /* Responsive */
        @media (max-width: 968px) {
            .form-image {
                display: none;
            }
            .form-container {
                grid-template-columns: 1fr;
            }

            .form-image {
                min-height: 300px;
            }

            .form-content {
                padding: 40px 30px;
            }

            .deadline {
                position: relative;
                top: auto;
                right: auto;
                margin-bottom: 30px;
            }

            .submit-btn {
                width: 100%;
                text-align: center;
            }
        }

        /* Scrollbar styling */
        textarea::-webkit-scrollbar {
            width: 6px;
        }

        textarea::-webkit-scrollbar-track {
            background: transparent;
        }

        textarea::-webkit-scrollbar-thumb {
            background: rgba(200, 150, 100, 0.4);
            border-radius: 3px;
        }

        textarea::-webkit-scrollbar-thumb:hover {
            background: rgba(200, 150, 100, 0.6);
        }
    </style>
</head>
{{-- <body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h1 class="text-2xl font-bold mb-6 text-center">RSVP Kehadiran</h1>

        <form action="{{ route('rsvp.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Nama</label>
                <input type="text" name="name" id="name" class="w-full px-3 py-2 border rounded" value="{{ old('name') }}">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" name="email" id="email" class="w-full px-3 py-2 border rounded" value="{{ old('email') }}">
            </div>
            <div class="mb-4">
                <label for="phone" class="block text-gray-700">No. WhatsApp (cth: 62812xxxx)</label>
                <input type="text" name="phone" id="phone" class="w-full px-3 py-2 border rounded" value="{{ old('phone') }}">
            </div>
            <div class="mb-4">
                <label for="rsvp_status" class="block text-gray-700">Konfirmasi Kehadiran</label>
                <select name="rsvp_status" id="rsvp_status" class="w-full px-3 py-2 border rounded">
                    <option value="coming">Hadir</option>
                    <option value="not_coming">Tidak Hadir</option>
                </select>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">
                Kirim RSVP
            </button>
        </form>
    </div>
</body>
</html> --}}

<body>
    <div class="bg-rsvp">
        <img src="/public/assets/image/bg-hero.webp" alt="">
    </div>
    <div class="form-container">
        <!-- Left Side - Image -->
        <div class="form-image">
            <div class="form-image-placeholder">
                <img src="../img/Rectangle 82.svg" alt="">
            </div>
        </div>

        <!-- Tampilkan error validasi -->
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Tampilkan pesan sukses -->
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- Right Side - Form -->
        <div class="form-content">
            <div class="deadline">Kindly respond by December 3th, 2025.</div>

            <form action="{{ route('rsvp.store') }}" method="POST">

                @csrf
                <div class="form-group">
                    <label for="name">Long Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" required>
                </div>

                         <div class="form-group">
                    <label for="email">Email <span class="required">(required)</span></label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required>
                </div>

                <div class="form-group">
                    <label for="whatsapp">Whatsapp number <span class="required">(optional)</span></label>
                    <input type="text" name="phone" id="phone" placeholder="08xx xxxx xxxx" value="{{ old('phone') }}">
                </div>

                <button type="submit" class="submit-btn">Submit</button>

                <p class="thank-you">Thankyou for attending to our wedding</p>
            </form>
        </div>
    </div>
</body>
</html>