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
    $flag=0; 
    @endphp

    @for($i=1;$i<=$n;$i++)
        @if($n % $i == 0)
            @php
            $flag++;
            @endphp
        @endif
    @endfor
    @if($flag==2)
        <p>{{$n}} is prime.</p>
    @else
        <p>{{$n}} is not prime.</p>
    @endif
</body>
</html>