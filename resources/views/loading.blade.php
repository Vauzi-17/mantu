<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
      :root {
    --text-head: #c9a86a;
    --sur: #832d36e4;
    --sur2: #832D36;
    --bg-pri: linear-gradient(135deg, #f5f5f0 0%, #e8e8e0 100%)
    --shadow: 0 10px 30px rgba(0, 0, 0, 0.684); 
    }
    * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Georgia', serif;
            background: var(--bg-pri);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .container {
            text-align: center;
            position: relative;
        }

        .title {
            font-size: 48px;
            color: var(--text-head);
            margin-bottom: 20px;
            font-style: italic;
            font-weight: normal;
        }

        .date {
            font-size: 36px;
            color: var(--text-head);
            margin-bottom: 60px;
            letter-spacing: 8px;
        }

        .envelope-wrapper {
            position: relative;
            width: 400px;
            margin: 0 auto;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .envelope-wrapper:hover {
            transform: scale(1.05);
        }

        .envelope {
            position: relative;
            width: 400px;
            height: 280px;
            background: var(--sur);
            border-radius: 4px;
            box-shadow: var(--shadow);
        }

        .flap {
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 0;
            border-left: 200px solid transparent;
            border-right: 200px solid transparent;
            border-top: 140px solid var(--sur2);
            transform-origin: top center;
            transition: transform 0.6s ease;
            z-index: 3;
        }

        .envelope-wrapper:hover .flap {
            transform: rotateX(180deg);
        }

         

        @media (max-width: 480px) {
            .title {
                font-size: 32px;
            }
            .date {
                font-size: 24px;
            }
            .envelope-wrapper {
                width: 300px;
            }
            .envelope {
                width: 300px;
                height: 210px;
            }
            .flap {
                border-left-width: 150px;
                border-right-width: 150px;
                border-top-width: 105px;
            } 
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="title">Cinta dan Mikail</h1>
        <div class="date">12 . 12 . 25</div>
        
        <div class="envelope-wrapper" onclick="toggleEnvelope()">
            <div class="envelope" id="envelope">
                <div class="flap"></div>
                <img src="" alt=""> 
            </div> 
        </div>
    </div>

    <script>
        function toggleEnvelope() {
            const envelope = document.getElementById('envelope');
            envelope.classList.toggle('open');
        }
    </script>
</body>