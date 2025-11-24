<!DOCTYPE html>
<html>
<head>
    <title>Voucher Anda</title>
    <meta name="color-scheme" content="light only">
</head>
<body style="font-family: Arial, sans-serif; text-align: center; padding: 20px;">
    <h2>Terima Kasih Telah RSVP, {{ $guest->name }}!</h2>
    <p>Sebagai ucapan terima kasih, kami berikan voucher diskon 10% untuk merchandise pernikahan kami.</p>
    <p>Tunjukkan QR Code di bawah ini kepada tim merchandise untuk menukarkannya.</p>
    
    <div style="margin: 20px 0; margin: 20px 0; padding:20px; border-radius:12px;" class="white-bg">
        <img src="cid:qrcode.png" alt="Voucher QR Code" style="width: 200px;">
    </div>
    
    <p>Sampai jumpa di hari H!</p>
</body>
<style>
  @media (prefers-color-scheme: dark) {
    .white-bg {
      background: #FFFFFF !important;
    }
  }
</style>
</html>
