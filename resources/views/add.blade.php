@extends('layouts.default')
<style>
  th {
    background-color: white;
    padding: 10px 20px;
    text-align: center;
    font-size: 14px;
  }
  td {
    padding: 10px 20px;
    text-align: left;
    font-size: 14px;
  }
  .box1{
    width:300px;
    height: 20px;
    margin: 0 0 0 0;
  }
  .box2{
    width:200px;
    height: 20px;
    margin: 0 0 0 0;
  }
  .create{
    color: violet;
    border-color: violet;
    background-color: white;
    margin: 0 0 0 50px;
  }
  .update{
    color: orange;
    border-color: orange;
    background-color: white;
  }
  .delete{
    color: cyan;
    border-color: cyan;
    background-color: white;
  }
  .created_at{
    font-size:10px;
  }
</style>
@section('title', '')

@section('content')
@if (count($errors) > 0)
<ul>
  @foreach ($errors->all() as $error)
  <li>{{$error}}</li>
  @endforeach
</ul>
@endif

<form action="/add" method="POST">
@csrf
    <label>Todo List<br>
      <input class="box1" type="text" name="todo_name">
    </label>
    <input class="create" type="submit" name="add" value="追加">
</form>

@endsection