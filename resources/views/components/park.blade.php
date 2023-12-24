@php use App\Models\Park;use App\Models\WagonToData;use App\Models\Way; @endphp
@php
    /**
     * @var int $parkId
     * @var array $wagonsByWays
     */
@endphp

<div class="row mt-4">
    <div class="col-lg-8 mb-lg-0 mb-4 pb-4">
        <div class="card z-index-2 h-100">
            <div class="card-header pb-3 pt-3 bg-transparent">
                <h4 class="text-capitalize">Парк {{ Park::find($parkId)->name }}</h4>
            </div>
            @foreach($wagonsByWays as $wayId => $wagonsToData)
                @include('components.way_grid', ['wayId' => $wayId, 'wagonsToData' => $wagonsToData])
            @endforeach
        </div>
    </div>
</div>
