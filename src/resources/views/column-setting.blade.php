<x-app :tables="$tables">
    <x-slot name="title">
        データ収集 | カラム設定
    </x-slot>
    <h2 class="bold text-3xl mb-14">カラム設定</h2>
    <h3 class="bold text-1xl font-bold mb-5">Edit columun name</h3>
    <form action="{{ route('edit_column', ['tableId' => $selectedTable->id, 'columnId' => $selectedColumn->id]) }}" method="post">
        @csrf
        <div class="flex items-center justify-between mb-5 pb-5">
            <div class="mb-5 w-1/2">
                <div class="flex mb-5">
                    <input type="text" name="column_name"
                        class="w-full border-slate-300 border-1 h-10 mb-5 rounded-md pl-5"
                        value="{{ $selectedColumn->column_name }}">
                    <button
                        class="text-white rounded-md bg-indigo-300 block px-8 h-auto mb-5 text-right drop-shadow-md font-bold ml-5 mb-5">
                        <input type="submit" value="Submit" class="">
                    </button>
                </div>
            </div>
            <img src="{{ asset($selectedTable->base_img_path) }}" alt="preview image" class="h-full w-auto">
        </div>
        <h3 class="bold text-1xl font-bold mb-5">Setting range of detection</h3>
        <div class="mb-5 pb-5 flex justify-between mb-5 pb-5">
            <div class="flex items-end">
                <div class="">
                    <div class="flex items-center mb-5">
                        <p>X</p>
                        <input type="text" name="range_x" value="{{ $selectedColumn->range_x }}"
                            class="w-full border-slate-300 border-1 h-10 rounded-md pl-5 ml-5">
                    </div>
                    <div class="flex items-center mb-5">
                        <p>Y</p>
                        <input type="text" name="range_y" value="{{ $selectedColumn->range_y }}"
                            class="w-full border-slate-300 border-1 h-10 rounded-md pl-5 ml-5">
                    </div>
                    <div class="flex items-center mb-5">
                        <p>W</p>
                        <input type="text" name="range_w" value="{{ $selectedColumn->range_w }}"
                            class="w-full border-slate-300 border-1 h-10 rounded-md pl-5 ml-5">
                    </div>
                    <div class="flex items-center mb-5">
                        <p>H</p>
                        <input type="text" name="range_h" value="{{ $selectedColumn->range_h }}"
                            class="w-full border-slate-300 border-1 h-10 rounded-md pl-5 ml-5">
                    </div>
                </div>
                <button
                    class="text-indigo-300 border border-indigo-300 rounded-md bg-white block px-8 h-10 text-right drop-shadow-md font-bold ml-5 mb-5">
                    <input type="submit" value="Submit" class="">
                </button>
            </div>
            <div class="flex">
                <div class="">
                    <div class="">
                        <p>Preview</p>
                        <img src="{{ asset('images/shogi_sample.png') }}" alt="preview image" class="h-28 w-auto">
                    </div>
                </div>
                <div class="flex items-end ml-5 pl-5">
                    <button
                        class="text-indigo-300 border border-indigo-300 rounded-md bg-white block px-8 h-10 text-right drop-shadow-md font-bold ml-5 mb-5">
                        <input type="submit" value="Make preview" class="">
                    </button>
                </div>
            </div>
        </div>
    </form>
    <a href="{{ route('teacher_data', ['tableId' => $selectedTable->id, 'columnId' => $selectedColumn->id]) }}" class="font-bold block mb-5 pb-5">
        教師データ確認ページ→
    </a>
    <a href="{{ route('table_setting', ['tableId' => $selectedTable->id]) }}">
        <button
            class="text-center bg-white text-slate-300 rounded-md bg-transparent block w-32 py-3 text-right font-bold border border-slate-300 drop-shadow-md ml-auto">
            Back
        </button>
    </a>
</x-app>
