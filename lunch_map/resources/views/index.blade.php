<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            padding: 10px;
        }
    </style>
</head>

<body>
        <h1>お店一覧</h1>

        @forelse($shops as $shop)
        <p>
            {{ $shop->category->name }},
            {{ $shop->name }},
            {{ $shop->address }}
        </p>
        @empty
        <p>No Shops yet</p>
        @endforelse
</body>

</html>
