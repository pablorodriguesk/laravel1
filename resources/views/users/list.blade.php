@extends('layouts.app')

@section('content')
    <ul>
      @foreach ($users as $user)
      <li>{{$user->name}}</li>
      @endforeach

    </ul>
    <form action="/users" method="post">
        {{ csrf_field() }}
        <input type="text" name="name"  class="form-control">
        <input type="text" name="email" class="form-control">
        <input type="text" name="password" class="form-control">
        <input type="text" name="salvar" class="btn btn-priymary">



    </form>
@endsection
