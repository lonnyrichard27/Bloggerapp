<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- htmlspecialchars function is a security measure and then we passed the variable as a parameter and the second parameter 
    ENT_QUOTES just means that it should do for both single quotes and double quotes -->
    <h1><?= htmlspecialchars($name, ENT_QUOTES)?></h1>

    <!-- but in laravel you can just surround the variables with double curly braces -->
    <h1>{{ $names }}</h1>
</body>
</html>