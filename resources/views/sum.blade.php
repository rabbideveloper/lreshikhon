<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Math Page</title>
</head>
<body>

{{--    <h2>Result is => {{$result}}</h2>--}}

<h1>Result is => <?php echo $result; ?></h1>

<?php
$mult = 20 * 5;
?>

<h3> Multiplication value is {{$mult}} </h3>

@php
    $nameList = ['rabbi','siam','salman','samia'];
@endphp

@foreach($nameList as $name)
    <p>{{ $name }}</p>
@endforeach
<?php $result = 1;  ?>
<?php
if ($result % 2 == 0) {
    echo "Even Number";
} else {
    echo "Odd Number";
}
?>

@php
    $result = 1000;
@endphp

@if ($result % 2 == 0)
    <h2>Even Number => {{$result}} </h2>
@else
    <h2>Odd Number => {{$result}}</h2>
@endif


</body>
</html>
