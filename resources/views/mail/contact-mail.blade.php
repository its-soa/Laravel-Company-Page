<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Email</title>
</head>
<body>
    <h1>You Have Receieved A New Email</h1>

    <p>Name: {{ $mailData['name'] }} </p>
    <p>Email: {{ $mailData['email'] }} </p>
    <p>message: </p> 
    <p> {{ $mailData['message'] }} </p>
    
    <p> With Love, thanks! </p>
</body>
</html>