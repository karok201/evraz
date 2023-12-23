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
        <td id="item-2.{{ $wagonToData->wagon_id }}" data-id="2.{{ $wagonToData->wagon_id }}">
            <img
                src="/img/icons/wagons/{{ $wagonToData->wagon->type->name }}.svg"
                alt="{{ $wagonToData->wagon->type->name }}"
                height="25"
            >
        </td>
    @endforeach
{{--    <div id="items-2" class="list-group col">--}}
{{--        <div id="item-2.1" data-id="2.1" class="list-group-item nested-1">Item 2.1</div>--}}
{{--        <div id="item-2.2" data-id="2.2" class="list-group-item nested-1">Item 2.2</div>--}}
{{--        <div id="item-2.3" data-id="2.3" class="list-group-item nested-1">Item 2.3</div>--}}
{{--        <div id="item-2.4" data-id="2.4" class="list-group-item nested-1">Item 2.4</div>--}}
{{--        <div id="item-2.5" data-id="2.5" class="list-group-item nested-1">Item 2.5</div>--}}
{{--    </div>--}}
</tr>
