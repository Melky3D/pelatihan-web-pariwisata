<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    halo {{ $name }}! <br>
Hobby Kamu : <br>
@foreach ($hobby as $item)
    - {{ $item }} <br>
@endforeach



</body>
</html>