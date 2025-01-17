<!DOCTYPE html>
<html>
<head>
    <title>Confirmation Email</title>
</head>
<body>
    <p>Hello : <strong>{{ $user->name ?? '' }}</strong></p>
    <h1>Welcome to {{ config('app.name') }}</h1>
    <p>Your OTP code is: <strong>{{ $user->otp->code ?? '' }}</strong></p>
    <p>This code will expire in 10 minutes.</p>
</body>
</html>
