<x-app :tables="$tables">
    <x-slot name="title">
        データ収集 | Top
    </x-slot>
    <h2 class="bold text-3xl mb-14">トップページ</h2>
    <div class="p-5 w-full bg-white rounded-md mb-14 drop-shadow-md">
        <table class="table-auto w-full border-separate border-spacing-y-8">
            <thead>
                <tr class="pb-5">
                    <th class="text-left">Table name</th>
                    <th class="text-left">Record</th>
                    <th class="text-left"></th>
                </tr>
            </thead>
            {{-- <form action="{{ route('add_table') }}" method="post">
            </form> --}}
            <tbody>
                @foreach ($tables as $table)
                    {{-- @if (!$loop->last) --}}
                    <tr class="pb-5">
                        <td class="{{ !$loop->last ? 'pb-5 border-b border-slate-300' : null }} ">
                            <a href="{{ route('table_list', ['tableId' => $table->id]) }}">
                                {{ $table->name }}
                            </a>
                        </td>
                        <td class="{{ !$loop->last ? 'pb-5 border-b border-slate-300' : null }}">
                            {{ $record->where('original_table_id', $table->id)->count() }}</td>
                        <td class="flex flex-row-reverse {{ !$loop->last ? 'pb-5 border-b border-slate-300' : null }}">
                            <a href="{{ route('table_setting', ['tableId' => $table->id]) }}">
                                <button
                                    class="text-white rounded-md bg-transparent block px-3 py-1 mb-5 text-right font-bold border border-slate-300 ml-3">
                                    <input type="submit" value="Setting" class="text-slate-300">
                                </button>
                            </a>
                            <a href="{{ route('delete_table', ['tableId' => $table->id]) }}">
                                <button
                                    class="text-white rounded-md bg-transparent block px-3 py-1 mb-5 text-right font-bold ml-5 border border-red-300">
                                    <input type="submit" value="Delete" class="text-red-300">
                                </button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <h3 class="bold text-1xl mb-5 font-bold">Add table</h3>
    <form action="{{ route('add_table') }}" method="post">
        @csrf
        <p class="bold text-1xl">Table name</p>
        <input type="text" name="table_name" class="w-full border-slate-300 border-1 h-10 mb-5 rounded-md pl-5">
        <p class="bold text-1xl">Upload base image</p>
        <input type="file" name="base_image" class="w-full border-slate-300 border-1 h-10">
        <button
            class="text-white rounded-md bg-indigo-300 block px-8 py-3 mb-5 text-right ml-auto drop-shadow-md font-bold">
            <input type="submit" value="Submit" class="">
        </button>
    </form>
</x-app>
