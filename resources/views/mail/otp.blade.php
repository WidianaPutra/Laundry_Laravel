<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <img src="./assets/icons/logo.svg" alt="" style="height: auto; width: 100%;">
    <h1>Hallo, {{ $username }}</h1>
    <p>Kode OTP anda: <span style="font-weight: bold">{{ $otp }}</span></p>
    <p>Kode ini berlaku selama 5 menit. Jangan berikan kode ini kepada siapa pun. Jika Anda tidak meminta kode ini,
        abaikan email ini.</p>
    <p>Terimakasih,</p>
    <p>Tim Support </p>
</body>

</html>
