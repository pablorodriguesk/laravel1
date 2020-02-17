@extends('layouts.my_layout')

@section('content')


<div class="container  text-center">
    <h1>Hello {{$name}}</h1>

@if(isset($teste))
    {{$teste}}
@endif


<form action="/hello" method="post">
    <?php echo csrf_field() ?>
    <input type="text" name="teste">
    <input type="submit" value="enviar">

</form>
</div>

@endsection

@section('title')

 Pagina de inicio

@endsection
