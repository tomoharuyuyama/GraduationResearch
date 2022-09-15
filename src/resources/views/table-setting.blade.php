<x-app>
    <h2 class="bold text-3xl mb-14">テーブル設定</h2>
    <h3 class="bold text-1xl font-bold mb-5">Edit table name</h3>
    <form action="" method="post" class="mb-5">
        <div class="flex mb-5">
            <input type="text" name="table_name" class="w-full border-slate-300 border-1 h-10 mb-5 rounded-md pl-5">
            <button
                class="text-white rounded-md bg-indigo-300 block px-8 h-auto mb-5 text-right drop-shadow-md font-bold ml-5 mb-5">
                <input type="submit" value="Submit" class="">
            </button>
        </div>
    </form>
    <h3 class="bold text-1xl font-bold mb-5">Colmun list</h3>
    <div class="p-5 w-full bg-white rounded-md mb-14 drop-shadow-md">
        <table class="table-auto w-full border-separate border-spacing-y-8">
            <thead>
                <tr class="pb-5">
                    <th class="text-left">Colmun name</th>
                    <th class="text-left">Record</th>
                    <th class="text-left"></th>
                </tr>
            </thead>
            <tbody>
                <tr class="pb-5">
                    <td class="pb-5 border-b border-slate-300">weapon</td>
                    <td class="pb-5 border-b border-slate-300">229</td>
                    <td class="pb-5 border-b border-slate-300 flex flex-row-reverse">
                        <a href="{{ route('column_setting') }}">
                            <button
                                class="text-white rounded-md bg-transparent block px-3 py-1 text-right font-bold border border-slate-300 ml-3">
                                <input type="submit" value="Setting" class="text-slate-300">
                            </button>
                        </a>
                        <button
                            class="text-white rounded-md bg-transparent block px-3 py-1 text-right font-bold ml-5 border border-red-300">
                            <input type="submit" value="Delete" class="text-red-300">
                        </button>
                    </td>
                </tr>
                <tr class="pb-5">
                    <td class="pb-5 border-b border-slate-300">isWin</td>
                    <td class="pb-5 border-b border-slate-300">346</td>
                    <td class="pb-5 border-b border-slate-300 flex flex-row-reverse">
                        <button
                            class="text-white rounded-md bg-transparent block px-3 py-1 text-right font-bold border border-slate-300 ml-3">
                            <input type="submit" value="Setting" class="text-slate-300">
                        </button>
                        <button
                            class="text-white rounded-md bg-transparent block px-3 py-1 text-right font-bold ml-5 border border-red-300">
                            <input type="submit" value="Delete" class="text-red-300">
                        </button>
                    </td>
                </tr>
                <tr class="pb-5">
                    <td class="">special</td>
                    <td class="">953</td>
                    <td class="flex flex-row-reverse">
                        <button
                            class="text-white rounded-md bg-transparent block px-3 py-1 text-right font-bold border border-slate-300 ml-3">
                            <input type="submit" value="Setting" class="text-slate-300">
                        </button>
                        <button
                            class="text-white rounded-md bg-transparent block px-3 py-1 text-right font-bold ml-5 border border-red-300">
                            <input type="submit" value="Delete" class="text-red-300">
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <h3 class="bold text-1xl mb-5 font-bold">Add column</h3>
    <form action="" method="post" class="">
        <div class="flex mb-5">
            <input type="text" name="table_name" class="w-full border-slate-300 border-1 h-10 mb-5 rounded-md pl-5">
            <button
                class="text-white rounded-md bg-indigo-300 block px-8 h-auto mb-5 text-right drop-shadow-md font-bold ml-5 mb-5">
                <input type="submit" value="Submit" class="">
            </button>
        </div>
    </form>
    <a href="{{ route('table_list') }}">
        <button
            class="text-center bg-white text-slate-300 rounded-md bg-transparent block w-32 py-3 text-right font-bold border border-slate-300 drop-shadow-md ml-auto">
            Back
        </button>
    </a>
</x-app>
