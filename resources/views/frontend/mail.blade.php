<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>

<body>
<p>Dear:Sir</p>

You have got an email from : {{ $name }} <br><br>

User details: <br>
Name: {{ $name }} <br>
Email: {{ $email }} <br>
Comments: {{ $comments }} <br>

Thanks
</body>
</html>