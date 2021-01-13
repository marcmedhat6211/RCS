<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>
    <h1>Contact Form</h1>
    <p><strong>NAME: </strong> {{ $details['name'] }}</p>
    <p><strong>EMAIL: </strong> {{ $details['email'] }}</p>
    <p><strong>BUSINESS: </strong> {{ $details['business'] }}</p>
    <p><strong>MESSAGE: </strong> {{ $details['message'] }}</p>
</body>
</html>