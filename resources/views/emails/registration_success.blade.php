<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Success</title>
</head>
<body>
    <h1>Registration Success</h1>
    <p>Hello {{ $student->name }},</p>
    <p>Your registration was successful. Here are your details:</p>
    <ul>
        <li>Name: {{ $student->name }}</li>
        <li>Email: {{ $student->email }}</li>
        <li>Phone Number: {{ $student->phoneNumber }}</li>
        <!-- Add more details as needed -->
    </ul>
</body>
</html>
