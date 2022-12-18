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




<table>
  <tr>
    <th>作成日</th>
    <th>タスク名</th>
    <th>更新</th>
    <th>削除</th>
  </tr>
    
    <form action="/edit/{{$form->id}}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$form->id}}">
    <tr>
      <td class="created_at"><input type="text"value="{{$form->created_at}}" ></td>
      <td><input class="box2" type="text" name="todo_name" value="{{$form->todo_name}}" ></td>
      <td><input class='update' type="submit" value='更新'></td>
      <td></td>
    </tr>
    
  </table>
</form>
@endsection