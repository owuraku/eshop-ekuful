{{-- @if (!empty($dataTotal) && count($dataTotal))
<table class="table box table-bordered" id="showTotal">
    @foreach ($dataTotal as $key => $element)
        @if ($element['code'] == 'total')
            <tr class="showTotal" style="background:#f5f3f3;font-weight: bold;">
                <th>{!! $element['title'] !!}</th>
                <td style="text-align: right" id="{{ $element['code'] }}">
                    {{$element['text'] }}
                </td>
            </tr>
        @elseif($element['value'] !=0)
            <tr class="showTotal">
                <th>{!! $element['title'] !!}</th>
                <td style="text-align: right" id="{{ $element['code'] }}">
                    {{$element['text'] }}
                </td>
            </tr>
        @endif
    @endforeach
</table>
@endif --}}
