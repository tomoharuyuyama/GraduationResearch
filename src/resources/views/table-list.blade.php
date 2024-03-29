<x-app :tables="$tables">
    <x-slot name="title">
        データ収集 | {{ $selectedTable->name }}
    </x-slot>
    <h2 class="bold text-3xl mb-14">{{ $selectedTable->name }}</h2>
    <div class="flex items-center mb-5">
        <div>
            <a href="{{ route('upload', ['tableId' => $selectedTable->id]) }}">
                <button
                    class="text-white rounded-md bg-indigo-300 text-center block w-56 py-3 mb-5 text-right drop-shadow-md font-bold drop-shadow-md">
                    Upload image
                </button>
            </a>
            <a href="{{ route('table_setting', ['tableId' => $selectedTable->id]) }}">
                <button
                    class="text-white rounded-md bg-indigo-300 text-center block w-56 py-3 mb-5 text-right drop-shadow-md font-bold drop-shadow-md">
                    Setting table
                </button>
            </a>
            <a href="{{ route('record_list', ['tableId' => $selectedTable->id]) }}">
                <button
                    class="text-white rounded-md bg-indigo-300 text-center block w-56 py-3 mb-5 text-right drop-shadow-md font-bold drop-shadow-md">
                    Table records
                </button>
            </a>
        </div>
        <div class="ml-10">
            <img src="{{ asset($selectedTable->base_img_path) }}" alt="preview image" class="pb-5">
        </div>
    </div>
    <a href="{{ route('top_page') }}">
        <button
            class="bg-white text-slate-300 rounded-md bg-transparent block px-3 py-3 mb-5 text-right font-bold border border-slate-300 drop-shadow-md w-32 text-center">
            Back
        </button>
    </a>

</x-app>