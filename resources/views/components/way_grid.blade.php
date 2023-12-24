@php use App\Models\StationData;use App\Models\Wagon;use App\Models\WagonToData;use App\Models\Way; @endphp
@php
    /**
     * @var int $wayId
     * @var WagonToData[] $wagonsToData
     */
@endphp
<div class="row container pb-3" id="items_draggable">
    <div class="col-2">
        <div class="d-flex px-2 py-1 align-items-center">
            <div class=" ">
                🚉
            </div>
            <div class="ms-4">
                <p class="text-xs font-weight-bold mb-0">Путь:</p>
                <h6 class="text-sm mb-0">{{ Way::find($wayId)->name }}</h6>
            </div>
        </div>
    </div>
    @foreach($wagonsToData as $wagonToData)
        <div
            class="pt-1 mt-1 col-2 mx-1 text-center rounded-3 overlay"
            id="{{ $wagonToData->wagon_id }}"
            data-id="{{ $wagonToData->wagon_id }}"
            style="background-color: {{ $wagonToData->wagon->owner->color }}"
        >
            <span id="wagon_{{ $wagonToData->wagon_id }}_position">{{ $wagonToData->position + 1 }}</span>
            <img
                src="/img/icons/wagons/{{ $wagonToData->wagon->type->name }}.svg"
                alt="{{ $wagonToData->wagon->type->name }}"
                height="35"
                width="90"
            >
        </div>
    @endforeach
</div>
