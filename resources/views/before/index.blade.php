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
        すべて({{ $allCount }}) / <a href="#">募集中のみ({{ $openCount }})</a>
    </div>
    <div class="row">
        @foreach($offers as $offer)
            <div class="col-6 col-lg-4">
                <div class="card {{ !$offer->isOpen() ? 'closed' : ''}}">
                    <div class="card-body">
                        @if($offer->isOpen())
                            <a href="{{ url('before/' . $offer->id) }}"><h2>{{ $offer->company_name }}</h2></a>
                        @else
                            <h2>{{ $offer->company_name }}</h2>
                        @endif
                        <table class="table table-striped">
                            <tbody>
                            <tr>
                                <th>都道府県</th>
                                <td>{{ $offer->prefecture }}</td>
                            </tr>
                            <tr>
                                <th>職種</th>
                                <td>{{ $offer->role }}</td>
                            </tr>
                            <tr>
                                <th>社員数</th>
                                <td>{{ number_format($offer->number_of_employee) }}人</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</body>
</html>
