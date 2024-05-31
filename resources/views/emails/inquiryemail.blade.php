<!DOCTYPE html>
<html>
<head>
    <title>Inquiry Email</title>
</head>
<body>
    <h1>Inquiry from {{ $data['name'] }}</h1>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Message:</strong> {{ $data['message'] }}</p>
</body>
</html>
