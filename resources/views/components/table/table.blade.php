@props(['headers', 'routes', 'items', 'fields'])

<table {{ $attributes->merge(['class' => 'mt-5 w-full']) }}>
    <thead class="border-b-2 border-solid border-black text-left">
    <tr>
        @foreach($headers as $header)
            <th>
                {{ $header }}
            </th>
        @endforeach
    </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
    @foreach($items as $item)
        <tr class="border-b border-solid border-gray-500 text-left odd:bg-gray-200 hover:bg-red-100">
            @foreach($fields as $value)
                <td class="border-s border-gray-500">
                    @switch($value)
                        @case('action')
                            @foreach($routes as $key=>$route)
                                <x-table.action-link :item="$item" :route="$route" :name="$key"/>
                            @endforeach
                            @break
                        @case('credentials')
                            @if($item instanceof \App\Models\Student)
                                <a class="text-blue-600 hover:text-blue-900"
                                   href="{{ route('students.show', $item->id) }}">
                                    {{ $item->$value }}
                                </a>
                                @else
                                    {{ $item->$value }}
                            @endif
                            @break
                        @default
                            {{ $item->$value }}
                    @endswitch
                </td>
            @endforeach
        </tr>
    @endforeach
    </tbody>
</table>
