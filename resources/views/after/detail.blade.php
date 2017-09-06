<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>会社詳細</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <style>
        body {
            padding-top: 5rem;
        }

        h1 {
            margin-bottom: 24px;
            border-bottom: 1px solid #AAAAAA;
        }

        h2 {
            font-size: 24px;
            margin-bottom: 24px;
        }

        .eye-catch {
            width: 100%;
            height: 300px;
            background-color: #e9ecef;
            margin-bottom: 24px;
        }

        .table {
            margin-bottom: 48px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <div class="container"><a class="navbar-brand" href="#">サンプル</a></div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-12">
            <h1>{{ $offer->name() }}</h1>
            <div class="eye-catch"></div>
            <h2>会社概要</h2>
            <table class="table table-striped">
                <tbody>
                @foreach($offer->companyDisplayHash() as $item)
                    <tr>
                        <th>{{ $item->key() }}</th>
                        <td>{{ $item->value() }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <h2>募集内容</h2>
            <table class="table table-striped">
                <tbody>
                @foreach($offer->recruitmentDisplayHash() as $item)
                    <tr>
                        <th>{{ $item->key() }}</th>
                        <td>{{ $item->value() }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="container">
</div>
</body>
</html>
