<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up Confirmation</title>
</head>
<body>
<h1>Hello {{$username}}</h1>
<h3>Thanks for signing up!</h3>

<p>
    We just need you to <a href="{{ url('activate/'.$code) }}">confirm your email address</a> real quick!
</p>
</body>
</html>