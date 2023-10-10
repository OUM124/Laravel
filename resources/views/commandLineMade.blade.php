<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blade test</title>
</head>
<body>
    @for($i=0;$i<=100;$i++)
        The number is : {{$i}} <br>
    @endfor


    <br>
    @php
    $k = 0;
    $x = 1;
    @endphp
    
    @if($k==0)
    The number is equal to 0
    @endif

    <br>

   
    @unless ($x==0)
        The number is not null
    @endunless
</body>
</html>