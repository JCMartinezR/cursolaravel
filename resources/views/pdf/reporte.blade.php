<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,tr,th,td{
            border: 1px solid #000;
            border-collapse: collapse;
        }
        table{
            width: 100%;
        }
        thead tr{
            background-color: blue;
            color: white;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articulos AS $a)
            <tr>
                <td>{{ $a->titulo }}</td>
                <td>{{ $a->fecha_visualizacion }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>