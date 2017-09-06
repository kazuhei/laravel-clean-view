<div class="col-6 col-lg-4">
    <div class="card closed">
        <div class="card-body">
            <h2>{{ $offer->name() }}</h2>
            @include('after.index.summary_table', ['displayHash' => $offer->summaryDisplayHash()])
        </div>
    </div>
</div>
