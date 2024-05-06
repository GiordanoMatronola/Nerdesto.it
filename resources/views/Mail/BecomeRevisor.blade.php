<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Request Become Revisor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border: 2px solid #333;
            border-radius: 10px;
        }
        .title {
            color: #5e3f71;
            margin-bottom: 20px;
        }
        .content {
            font-size: 18px;
            color: #333;
            margin-bottom: 10px;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #5e3f71;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .button:hover {
            background-color: #3b2542;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="title">Buongiorno!</h1>
        <p class="content">L'utente {{$user['username']}} vuole entrare a far parte del nostro team! Ecco il suo messaggio:</p>
        <p> {{$aboutYou}} </p>
        <p class="content">L'utente {{$user['firstname']}} {{$user['lastname']}}, nato il {{$user['birthdate']}} e iscritto dal {{$user['created_at']}}, ha richiesto di diventare revisore e far parte del nostro progetto!</p>
        <p class="content">Se vuoi renderlo revisore, clicca sul seguente pulsante:</p>
        <a href="{{route('make.revisor', compact('user'))}}" class="button">Rendi revisore</a>
    </div>
</body>
</html>