<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>
    <h1>Contact Form</h1>
    <p>Name: {{ $details['name'] }}</p>
    <p>email: {{ $details['email'] }}</p>
    <p>business: {{ $details['business'] }}</p>
    <p>message: {{ $details['message'] }}</p>
</body>
</html>