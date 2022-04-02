<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>In Blade:</p>
    {{
        $id5
    }}

    @if ($id5 % 2 == 0)
        <p>{{$id5}} is Even.</p>
    @else
        <p>{{$id5}} is Odd.</p>
    @endif

    
</body>
</html>