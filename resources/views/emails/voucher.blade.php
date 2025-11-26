<!DOCTYPE html>
<html>
<head>
    <title>Voucher Anda</title>
    <meta name="color-scheme" content="light only">
</head>
<body style="font-family: Arial, sans-serif; text-align: center; padding: 20px;">
    <h2>Thank you for RSVP, {{ $guest->name }}!</h2>
    <p>As a token of our appreciation, we are offering a 10% discount voucher for our wedding merchandise.</p>
    <p>Show the QR Code below to the merchandise team to redeem it.</p>
    
    <div style="margin: 20px 0; margin: 20px 0; padding:20px; border-radius:12px;" class="white-bg">
        <img src="cid:qrcode.png" alt="Voucher QR Code" style="width: 200px;">
    </div>
    
    <p>See you on the big day!</p>
</body>
<style>
  @media (prefers-color-scheme: dark) {
    .white-bg {
      background: #FFFFFF !important;
    }
  }
</style>
</html>
