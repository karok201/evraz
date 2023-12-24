@php use App\Models\StationData;use App\Models\Wagon;use App\Models\WagonToData;use App\Models\Way; @endphp
@php
    /**
     * @var int $wayId
     * @var WagonToData[] $wagonsToData
     */
@endphp
<tr class="p-0" id="items-2">
    <td class="w-2">
        <div class="d-flex px-2 py-1 align-items-center">
            <div class=" ">
                🚉
            </div>
            <div class="ms-4">
                <p class="text-xs font-weight-bold mb-0">Путь:</p>
                <h6 class="text-sm mb-0">{{ $wayId }}</h6>
            </div>
        </div>
    </td>
    @foreach($wagonsToData as $wagonToData)
        <td id="item-2.{{ $wagonToData->wagon_id }}" data-id="2.{{ $wagonToData->wagon_id }}" class="text-center">
            <div>
                <span>{{ $wagonToData->position }}</span>
                <img
                    src="/img/icons/wagons/{{ $wagonToData->wagon->type->name }}.svg"
                    alt="{{ $wagonToData->wagon->type->name }}"
                    height="25"
                >
            </div>
        </td>
    @endforeach
</tr>
