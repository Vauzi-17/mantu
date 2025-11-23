<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinta & Mikail - RSVP Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Georgia', serif;
            background: url(../img/bg_blur.svg) no-repeat center center/cover;
            min-height: 96vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .form-container {
            background: rgba(20, 20, 20, 0.8);
            backdrop-filter: blur(10px);
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
            background: linear-gradient(135deg, #2a2a2a 0%, #1a1a1a 100%);
            padding: 60px 40px;
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
            background: linear-gradient(135deg, rgba(200, 150, 100, 0.1), rgba(100, 80, 60, 0.1));
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

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
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

            .form-row {
                grid-template-columns: 1fr;
                gap: 20px;
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
<body>
    <div class="form-container">
        <!-- Left Side - Image -->
        <div class="form-image">
            <div class="form-image-placeholder">
                <img src="../img/Rectangle 82.svg" alt="">
            </div>
            <!-- Uncomment untuk menggunakan gambar sebenarnya
            <img src="wedding-jewelry.jpg" alt="Wedding Details">
            -->
        </div>

        <!-- Right Side - Form -->
        <div class="form-content">
            <div class="deadline">Kindly respond by December 3th, 2025.</div>

            <form onsubmit="handleSubmit(event)">
                <div class="form-group">
                    <label for="name">Long Name</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="class">Class</label>
                        <input type="text" id="class" name="class">
                    </div>
                    <!-- <div class="form-group">
                        <label for="nis">NIS/NIP</label>
                        <input type="text" id="nis" name="nis">
                    </div> -->
                </div>

                <div class="form-group">
                    <label for="whatsapp">Whatsapp number <span class="required">(required)</span></label>
                    <input type="tel" id="whatsapp" name="whatsapp" placeholder="08xx xxxx xxxx" required>
                </div>

                <div class="form-group">
                    <label for="email">Email <span class="required">(required)</span></label>
                    <input type="email" id="email" name="email" required>
                </div>

                <button type="submit" class="submit-btn">Submit</button>

                <p class="thank-you">Thankyou for attending to our wedding</p>
            </form>
        </div>
    </div>

    <script>
        function handleSubmit(event) {
            event.preventDefault();
            
            const formData = {
                name: document.getElementById('name').value,
                class: document.getElementById('class').value,
                nis: document.getElementById('nis').value,
                whatsapp: document.getElementById('whatsapp').value,
                email: document.getElementById('email').value
            };

            console.log('Form Data:', formData);
            alert('Terima kasih! Data Anda telah terkirim.');
            
            // Reset form
            event.target.reset();
        }
    </script>
</body>
</html>