<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @forelse($facturas as $factura)
        <br />
        {{$factura}}
        <br />
        {{$factura->orden}}
        <br />
    @empty
        no datos
    @endforelse
</body>
</html>