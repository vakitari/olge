<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        /* Стили модального окна */
        .button {
            background: linear-gradient(0.25turn, #3f87a6, #ebf8e1, #f69d3c);
            background-size: 200% 100%;
            background-position: left bottom;
            transition: background-position 0.5s ease;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
}
html, body{
    display: flex;
    justify-content: center;
}

.button:hover {
  background-position: right bottom;
}
    </style>
</head>
<body>
<button class="button">Кнопка</button>
</body>
</html>
