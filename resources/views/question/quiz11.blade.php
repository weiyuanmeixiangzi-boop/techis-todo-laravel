<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Companiesテーブル</h2>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>会社名</td>
            <td>創立日</td>
            <td>住所</td>
        </tr>
        @foreach ($companies as $Company)
        <tr>
            <td>{{$Company->id}}</td>
            <td>{{$Company->name}}</td>
            <td>{{$Company->founding_date}}</td>
            <td>{{$Company->address}}</td>
        </tr>
        @endforeach
    </table>
    
    <h2>Salesテーブル</h2>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>企業ID</td>
            <td>売上</td>
            <td>売上日</td>
        </tr>
        @foreach($sales as $Sale)
        <tr>
            <td>{{$Sale->id}}</td>
            <td>{{$Sale->company_id}}</td>
            <td>{{$Sale->sales}}</td>
            <td>{{$Sale->sales_date}}</td>
        </tr>
        @endforeach
    </table>
</table>

</body>
</html>