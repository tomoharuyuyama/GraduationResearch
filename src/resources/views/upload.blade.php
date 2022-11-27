<x-app :tables="$tables">
    <x-slot name="title">
        データ収集 | 画像アップロード
    </x-slot>
    <h2 class="bold text-3xl mb-14">画像アップロード</h2>

    {{-- <form action="" method="post" class=""> --}}
        <h3 class="bold text-1xl mb-5 font-bold">Upload image</h3>
        <input type="file" name="base_image[]" class="w-full border-slate-300 border-1 h-10 mb-5" multiple>
        <div class="flex mb-5">
            <div class="">
                <p class="bold text-1xl font-bold mb-5">Base image</p>
                <img src="{{ asset($selectedTable->base_img_path) }}" alt="preview image" class="pb-5">
            </div>
            {{-- <div class="">
                <p class="bold text-1xl font-bold mb-5">Upload image</p>
                <img src="{{ asset($selectedTable->base_img_path) }}" alt="preview image" class="pb-5 pl-5">
            </div> --}}
        </div>
        <div class="flex">
            <a href="{{ route('result', ['tableId' => $selectedTable->id]) }}">
                <button
                    class="text-center text-white rounded-md bg-indigo-300 block w-32 py-3 mb-5 text-right drop-shadow-md font-bold">
                    Submit
                </button>
            </a>
            <a href="{{ route('table_list', ['tableId' => $selectedTable->id]) }}" class="">
                <button
                class="text-center ml-5 bg-white text-slate-300 rounded-md bg-transparent block w-32 py-3 text-right font-bold border border-slate-300 drop-shadow-md">
                Back
            </button>
        </a>
        </div>
    {{-- </form> --}}


</x-app>
