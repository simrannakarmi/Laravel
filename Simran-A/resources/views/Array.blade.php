<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @php
        $Array = $array;
        $sum=0;
    @endphp
    @foreach($Array as $arr)
        <p>{{$arr}}</p>
        <?php
            $sum+=$arr;
        ?>
        
    @endforeach
    <p>Sum = {{$sum}}</p>
</body>
</html>