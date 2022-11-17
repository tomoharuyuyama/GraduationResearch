<x-app :tables="$tables">
    <x-slot name="title">
        データ収集 | 教師データ
    </x-slot>
    <h2 class="bold text-3xl mb-14">教師データ</h2>
    <div class="">
        <p class="bold text-1xl font-bold mb-5">Base image</p>
        <img src="{{ asset($selectedTable->base_img_path) }}" alt="preview image" class="pb-5">
    </div>
    <div class=" pb-5">
        <p class="bold text-1xl font-bold mb-5">Columun name</p>
        <div class="w-full border-slate-300 border-1 h-10 mb-5 rounded-md pl-5 bg-white pt-2">weapon</div>
        <div class=" pb-5">
            <p class="bold text-1xl font-bold mb-5">Teacher list</p>
            <div class="p-5 w-full bg-white rounded-md mb-14 drop-shadow-md">
                <table class="table-auto w-full border-separate border-spacing-y-8">
                    <thead>
                        <tr class="pb-5">
                            <th class="text-left">Teacher name</th>
                            <th class="text-left">Teacher image</th>
                            <th class="text-left">Record sum</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="pb-5 border-b border-slate-300">The Sliding Mr. Bones (Next Stop, Pottersville)
                            </td>
                            <td class="pb-5 border-b border-slate-300">
                                <img src="{{ asset('images/weapon1.png') }}" alt="preview image" class="h-14 w-auto">
                            </td>
                            <td class="pb-5 border-b border-slate-300">122</td>
                        </tr>
                        <tr>
                            <td class="pb-5 border-b border-slate-300">Witchy Woman</td>
                            <td class="pb-5 border-b border-slate-300">
                                <img src="{{ asset('images/weapon2.png') }}" alt="preview image" class="h-14 w-auto">
                            </td>
                            <td class="pb-5 border-b border-slate-300">322</td>
                        </tr>
                        <tr>
                            <td class="pb-5 border-b border-slate-300">Shining Star</td>
                            <td class="pb-5 border-b border-slate-300">
                                <img src="{{ asset('images/weapon3.png') }}" alt="preview image" class="h-14 w-auto">
                            </td>
                            <td class="pb-5 border-b border-slate-300">13</td>
                        </tr>
                        <tr>
                            <td>Shining Star</td>
                            <td>
                                <img src="{{ asset('images/weapon4.png') }}" alt="preview image" class="h-14 w-auto">
                            </td>
                            <td>98</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="flex">
            <a href="{{ route('column_setting', ['tableId' => $selectedTable->id, 'columnId' => $selectedColumn->id]) }}">
                <button
                    class="text-center bg-white text-slate-300 rounded-md bg-transparent block w-32 py-3 mb-5 text-right font-bold border border-slate-300 drop-shadow-md">
                    Back
                </button>
            </a>
        </div>
</x-app>
