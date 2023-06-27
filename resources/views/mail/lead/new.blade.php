<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Lead</title>
</head>
<body>

    <h1>Ciao Admin</h1>
    <p>Hai ricevuto un nuovo messaggio dal sito</p>
    <p>Nome : {{ $lead->name}}</p><br>
    <p>Email : {{ $lead->email}}</p><br>
    <p>Messaggio : {{ $lead->message}}</p><br>





</body>
</html>