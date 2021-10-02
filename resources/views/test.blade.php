<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@isset($title)
    <h1>Bienvenido a {{$title}}</h1>
@else
    <h1>Bienvenidos igual :)</h1>
@endisset
<p>Aqui aprenderemos sobre plantillas, ORM, y mucho PHP</p>
<p><strong>Descripcion: </strong>{{$descripcion}}</p>
<ul>
    @foreach($temas as $tema)
        <li>{{$tema}}</li>
    @endforeach
</ul>
{{--Escribir PHP en una plantilla template es muy pero muy mala practica--}}
<?php echo 'Estoy escribiendo PHP directo en la plantilla';?>
</body>
</html>
