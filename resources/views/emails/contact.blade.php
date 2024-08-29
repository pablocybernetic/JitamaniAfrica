<!-- resources/views/emails/contact.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
</head>
<body>
    <p><strong>Name:</strong> {{ $details['name'] }}</p>
    <p><strong>Email:</strong> {{ $details['email'] }}</p>
    <p><strong>Message:</strong> {{ $details['message'] }}</p>
    <p><strong>phonenumber:</strong> {{ $details['phonenumber'] }}</p>
    <p><strong>subject:</strong> {{ $details['subject'] }}</p>

</body>
</html>
