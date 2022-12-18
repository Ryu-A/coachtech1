<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <style>
    body {
      font-size:16px;
      margin: 5px;
      background-color: navy;
      background-size: cover;
      background-repeat: no-repeat;
      position: relative;
    }
    h1 {
      font-size:60px;
    }
    input {
      box-shadow: none;
      border: solid;
      border-width: 1px;
      border-radius: 5px;
    }
    .content {
      width:700px;
      border-radius: 5px;
      padding: 30px;
      margin: 20px;
      background-color: white;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
  </style>
</head>
<body>
  <h1>@yield('title')</h1>
  <div class="content">
    @yield('content')
  </div>
</body>
</html>