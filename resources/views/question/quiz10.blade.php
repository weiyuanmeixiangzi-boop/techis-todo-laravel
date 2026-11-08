<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     @extends('common.main')

    @section('content')

    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach

    <h1>クイズ登録画面</h1>
    <form action="{{url('/quiz10/store')}}" method="post">
        @csrf
        <p><input type="text" name="name" value="名前を入力"></p>
        <p><input type="text" name="type" value="数値を入力"></p>
        <p><input type="submit" value="送信ボタン"></p>
    </form>

    @endsection
</body>
</html>