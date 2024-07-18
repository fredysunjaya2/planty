<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
</head>
<body>
    <h1>New Contact Form Submission</h1>
    <p><strong>From:</strong> {{ $data['email'] ?? 'N/A' }}</p>
    <p><strong>Type:</strong> {{ $data['type'] ?? 'N/A' }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $data['message'] ?? 'N/A' }}</p>
</body>
</html>
