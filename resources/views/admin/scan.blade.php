<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Scan Voucher QR Code') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <div id="qr-reader" style="width: 500px; max-width: 90%; margin: 0 auto;"></div>
                    
                    <!-- Area untuk menampilkan pesan hasil scan -->
                    <div id="scan-result" class="mt-6 text-center text-lg font-medium">
                        Arahkan kamera ke QR Code Voucher...
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Load library scanner -->
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>   

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const resultContainer = document.getElementById('scan-result');

        let html5QrcodeScanner = new Html5QrcodeScanner(
            "qr-reader",
            { fps: 10, qrbox: { width: 250, height: 250 } },
            false
        );

        function startScanner() {
            html5QrcodeScanner.render(onScanSuccess, onScanError);
            resultContainer.innerHTML = "Arahkan kamera ke QR Code Voucher...";
        }

        // Callback berhasil scan
        function onScanSuccess(decodedText, decodedResult) {
            console.log(`Scan berhasil: ${decodedText}`);

            html5QrcodeScanner.clear();
            resultContainer.innerHTML = `<span class="text-blue-600">Memvalidasi kode ${decodedText}...</span>`;

            redeemVoucher(decodedText);
        }

        function onScanError(errorMessage) {
            // optional
        }

        // Kirim ke backend
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
                    resultContainer.innerHTML = `<span class="text-green-600">${result.message}</span>`;
                } else {
                    resultContainer.innerHTML = `<span class="text-red-600">${result.error}</span>`;
                }

            } catch (error) {
                console.error('Fetch error:', error);
                resultContainer.innerHTML = `<span class="text-red-600">Error: Gagal terhubung ke server.</span>`;
            }

            // Auto scan lagi setelah 2 detik
            setTimeout(() => {
                startScanner();
            }, 2000);
        }

        // Start awal
        startScanner();
    });
    </script>
</x-app-layout>