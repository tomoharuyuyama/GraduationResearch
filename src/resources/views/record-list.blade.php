<x-app :tables="$tables">
    <x-slot name="title">
        データ収集 | レコード一覧
    </x-slot>
    <h2 class="bold text-3xl mb-14">レコード一覧</h2>
    <div class=" pb-5">
        <p class="bold text-1xl font-bold mb-5">Table name</p>
        <div class="w-full border-slate-300 border-1 h-10 mb-5 rounded-md pl-5 bg-white pt-2">{{ $selectedTable->name }}
        </div>
    </div>
    <div class="">
        <p class="bold text-1xl font-bold mb-5">Base image</p>
        <img src="{{ asset($selectedTable->base_img_path) }}" alt="preview image" class="pb-5">
    </div>
    <div class=" pb-5">
        <p class="bold text-1xl font-bold mb-5">Date table</p>
        <div class="p-5 w-full bg-white rounded-md mb-14 drop-shadow-md">
            <table class="table-auto w-full border-separate border-spacing-y-8">
                <thead>
                    <tr class="pb-5">
                        <th class="text-left">Ofject value</th>
                        <th class="text-left">Time stamp</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($records as $record)
                        @if (!$loop->last)
                            <tr>
                                <td class="pb-5 border-b border-slate-300">{{ $record->value }}</td>
                                <td class="pb-5 border-b border-slate-300">{{ $record->created_at }}</td>
                            </tr>
                        @else
                            <tr>
                                <td class="">{{ $record->value }}</td>
                                <td class="">{{ $record->created_at }}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="flex">
        <a href="{{ route('table_list', ['tableId' => $selectedTable->id]) }}">
            <button
                class="text-center bg-white text-slate-300 rounded-md bg-transparent block w-32 py-3 mb-5 text-right font-bold border border-slate-300 drop-shadow-md">
                Back
            </button>
        </a>
    </div>
</x-app>
