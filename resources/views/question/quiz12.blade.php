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

    <h1>クイズ更新画面</h1>
    <form action="{{url('/quiz12/update/' . $quiz->id))}}" method="post">
        @csrf
        <p><input type="text" name="name" value="{{ $quiz->name }}" placeholder="名前を入力"></p>
        <p><input type="text" name="type" value="{{ $quiz->type }}" placeholder="数値を入力"></p>
        <p><input type="submit" value="送信ボタン"></p>
    </form>

    @endsection
</body>
</html>