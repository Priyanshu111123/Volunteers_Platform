<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="#">
    @csrf
    <input type="email" name="email" placeholder="Enter your email">
    <button type="submit">Send Reset Link</button>
</form>

</body>
</html>