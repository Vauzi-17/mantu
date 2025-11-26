<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scan Voucher</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: system-ui, -apple-system, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: #f5f5f5;
            padding: 20px;
        }
        #qr-reader {
            width: 100%;
            max-width: 500px;
            margin-bottom: 20px;
        }
        #scan-result {
            font-size: 32px;
            margin-top: 20px;
            font-weight: 500;
            text-align: center;
        }

        .dialog {
            animation: slideIn 0.5s ease-out;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
        }
            to {
                opacity: 1;
                transform: translateY(0);
        }
        
        .text-blue { color: #2563eb; }
        .text-green { color: #16a34a; }
        .text-red { color: #dc2626; }
    </style>
</head>
<body>
    <div id="qr-reader"></div>
    <div id="scan-result">Hold Voucher QR at least <b>10cm away</b></div>

    <script src="https://unpkg.com/html5-qrcode"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tsparticles/confetti@3.0.3/tsparticles.confetti.bundle.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
    const resultContainer = document.getElementById('scan-result');
    const html5QrCode = new Html5Qrcode("qr-reader");
    let isProcessing = false;

    async function startScanner() {
        resultContainer.innerHTML = "Hold Voucher QR at least <b>10cm away</b>";
        
        try {
            await html5QrCode.start(
                { facingMode: "environment" },
                { fps: 30, qrbox: { width: 200, height: 200 } },
                onScanSuccess
            );
        } catch (err) {
            console.error('Camera error:', err);
            resultContainer.innerHTML = `<span class="text-red">Failed to access the camera</span>`;
        }
    }

    function onScanSuccess(decodedText) {
        if (isProcessing) return;
        
        console.log(`Scan berhasil: ${decodedText}`);
        isProcessing = true;
        redeemVoucher(decodedText);
    }

    function showDialog(status, guest, isSuccess) {
        const dialog = document.createElement('div');
        dialog.style.cssText = `
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.7);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 2;
            transition: visibility 0s, opacity 0.5s linear;

        `;
        
        dialog.innerHTML = `
            <div class="dialog" style="
                background: white;
                padding: 30px;
                border-radius: 10px;
                max-width: 800px;
                text-align: center;
            ">
                <h2 style="color: ${isSuccess ? '#16a34a' : '#dc2626'}; margin-bottom: 15px; font-size: 32px;">
                    ${isSuccess ? `🎉 Congrats ${guest}! 🎉` : `Maybe next time... 🥲`}
                </h2>
                <p style="margin-bottom: 20px; color: #333; font-size: 24px;">
                    ${isSuccess ? `You'll get 10% off on our wedding merchandise!` : `The voucher is already claimed by <b>${guest}</b>!`}
                </p>
            </div>
        `;
        
        if (isSuccess) {
            const defaults = {
                spread: 360,
                ticks: 100,
                gravity: 0,
                decay: 0.94,
                startVelocity: 30,
                shapes: ["heart"],
                colors: ["FFC0CB", "FF69B4", "FF1493", "C71585"],
                };

                confetti({
                ...defaults,
                particleCount: 100,
                scalar: 2,
                });

                confetti({
                ...defaults,
                particleCount: 50,
                scalar: 3,
                });

                confetti({
                ...defaults,
                particleCount: 50,
                scalar: 4,
            });
        }

        document.body.appendChild(dialog);
        
        // Auto dismiss setelah 6 detik
        setTimeout(() => {
            dialog.remove();
            isProcessing = false;
            resultContainer.innerHTML = "Hold Voucher QR at least <b>10cm away</b>";
        }, 6000);
    }

    async function redeemVoucher(code) {
        try {
            const response = await fetch("{{ route('voucher.redeem') }}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ code: code })
            });

            const result = await response.json();

            if (response.ok) {
                showDialog(result.status, result.guest, true);
            } else {
                showDialog(result.status, result.guest, false);
            }

        } catch (error) {
            console.error('Fetch error:', error);
            showDialog('Gagal terhubung ke server', false);
        }
    }

    startScanner();
});
    </script>
</body>
</html>