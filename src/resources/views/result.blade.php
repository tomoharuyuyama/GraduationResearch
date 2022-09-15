<x-app>
    <h2 class="bold text-3xl mb-14">検出結果</h2>
    <div class="p-5 w-full bg-white rounded-md mb-14 drop-shadow-md">
        <table class="table-auto w-full border-separate border-spacing-y-8">
            <thead>
                <tr class="pb-5">
                    <th class="text-left">Column name</th>
                    <th class="text-left">Get image</th>
                    <th class="text-left">Get data</th>
                    <th class="text-left">Add teacher</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="pb-5 border-b border-slate-300">kill</td>
                    <td class="pb-5 border-b border-slate-300">
                        <img src="{{ asset('images/kill12.png') }}" alt="preview image" class="h-14 w-auto">
                    </td>
                    <td class="pb-5 border-b border-slate-300">12</td>
                    <td class="pb-5 border-b border-slate-300">
                        <input type="checkbox" name="add_teacher" id="">
                    </td>
                </tr>
                <tr>
                    <td class="pb-5 border-b border-slate-300">special</td>
                    <td class="pb-5 border-b border-slate-300">
                        <img src="{{ asset('images/special3.png') }}" alt="preview image" class="h-14 w-auto">
                    </td>
                    <td class="pb-5 border-b border-slate-300">3</td>
                    <td class="pb-5 border-b border-slate-300">
                        <input type="checkbox" name="add_teacher" id="">
                    </td>
                </tr>
                <tr>
                    <td class="pb-5 border-b border-slate-300">isWin</td>
                    <td class="pb-5 border-b border-slate-300">
                        <img src="{{ asset('images/isWin.png') }}" alt="preview image" class="h-14 w-auto">
                    </td>
                    <td class="pb-5 border-b border-slate-300">1</td>
                    <td class="pb-5 border-b border-slate-300">
                        <input type="checkbox" name="add_teacher" id="">
                    </td>
                </tr>
                <tr>
                    <td>weapon</td>
                    <td>
                        <img src="{{ asset('images/weapon1.png') }}" alt="preview image" class="h-14 w-auto">
                    </td>
                    <td>undefinde</td>
                    <td>
                        <input type="checkbox" name="add_teacher" id="">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    {{-- <form action="" method="post" class=""> --}}
        <div class="flex">
            <a href="{{ route('upload') }}">
                <button
                    class="text-center text-white rounded-md bg-indigo-300 block w-32 py-3 mb-5 text-right drop-shadow-md font-bold">
                    <input type="submit" value="Submit" class="">
                </button>
            </a>
            <a href="{{ route('upload') }}">
                <button
                    class="text-center ml-5 bg-white text-slate-300 rounded-md bg-transparent block w-32 py-3 mb-5 text-right font-bold border border-slate-300 drop-shadow-md">
                    Cancel
                </button>
            </a>
        </div>
    {{-- </form> --}}
</x-app>
