@extends('layouts.app')
@section('title','Entregas')
@section('content')
<h1>Próximas entregas</h1><p class="lead">Agenda de ejemplo para planear el trabajo académico.</p>
<div class="panel"><table><thead><tr><th>Trabajo</th><th>Fecha prevista</th><th>Producto</th></tr></thead><tbody><tr><td>Navegación y AdminLTE</td><td>9 de octubre de 2026</td><td>Proyecto y reporte</td></tr><tr><td>Componentes Vue</td><td>12 de octubre de 2026</td><td>Lista y tarjetas</td></tr><tr><td>Consumo de APIs</td><td>14 de octubre de 2026</td><td>Consultas en Postman</td></tr><tr><td>Notas personales</td><td>16 de octubre de 2026</td><td>API CRUD y diagrama ER</td></tr></tbody></table></div><p>Las fechas son datos de demostración de la aplicación y no sustituyen el calendario del curso.</p>
@endsection
