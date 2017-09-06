<div class="col-6 col-lg-4">
    <div class="card">
        <div class="card-body">
            <a href="{{ url('after/' . $offer->id()) }}"><h2>{{ $offer->name() }}</h2></a>
            @include('after.index.summary_table', ['displayHash' => $offer->summaryDisplayHash()])
        </div>
    </div>
</div>
