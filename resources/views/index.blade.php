@extends('layouts.default')
<style>
  th {
    background-color: white;
    padding: 10px 10px;
    text-align: center;
    font-size: 14px;
  }
  td {
    padding: 10px 10px;
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

<form action="/add" method="POST">
@csrf
  <label>Todo List<br>
    <input class="box1" type="text" name="todo_name">
  </label>
  <input class="create" type="submit" name="add" value="追加">
</form>


  <table>
    <tr>
      <th>作成日</th>
      <th>タスク名</th>
      <th>更新</th>
      <th>削除</th>
    </tr>
    @foreach ($todos as $todo)
    <tr>
      <form action="/edit/{{$todo->id}}" method="POST">
      @csrf
        <input type="hidden" name="id" value="{{$todo->id}}">
        <td class="created_at" name="created_at">{{$todo->created_at}}</td>
        <td><input class="box2" type="text" name="todo_name" value="{{$todo->todo_name}}" ></td>
        <td>
          <input class="update" type="submit" value='更新'>
        </td>
      </form>
      
      <form action="/delete/{{$todo->id}}" method="POST">
        @csrf
        <td>
          <input class="delete" type="submit" name="delete" value='削除'>
        </td>
      </form>
      

<!--      <td class="create_at">{{$todo->created_at}}</td>
      <td><input class="box2" type="text" name="todo_name" value="{{$todo->todo_name}}" ></td>
      <td><input class="update" type="submit" name="update" value="更新"></td>
      <td><input class="delete" type="submit" name="delete" value="削除"></td>
-->
    </tr>
    @endforeach
  </table>

@endsection