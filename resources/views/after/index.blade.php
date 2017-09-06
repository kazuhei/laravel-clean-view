<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>会社一覧</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <style>
        body {
            padding-top: 5rem;
        }

        .menu {
            margin-bottom: 24px;
        }

        .card {
            margin-bottom: 24px;
        }

        .card.closed {
            background-color: #dddddd;
        }

        h2 {
            margin-bottom: 12px;
            border-bottom: 1px solid #AAAAAA;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <div class="container"><a class="navbar-brand" href="#">サンプル</a></div>
</nav>
<div class="container">
    <div class="menu">
        すべて({{ $offerList->count() }}) / <a href="#">募集中のみ({{ $offerList->openCount() }})</a>
    </div>
    <div class="row">
        @foreach($offerList as $offer)
            @include('after.index.' . $offer->type(), ['offer' => $offer])
        @endforeach
    </div>
</div>
</body>
</html>
