<x-app>
    <h2 class="bold text-3xl mb-14">トップページ</h2>
    <div class="p-5 w-full bg-white rounded-md mb-14 drop-shadow-md">
        <table class="table-auto w-full">
            <thead>
                <tr class="pb-5">
                    <th class="text-left">Table name</th>
                    <th class="text-left">Record</th>
                    <th class="text-left"></th>
                </tr>
            </thead>
            <tbody>
                <tr class="pb-5">
                    <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                    <td>Malcolm Lockyer</td>
                    <td class="flex flex-row-reverse">
                        <button
                            class="text-white rounded-md bg-transparent block px-3 py-1 mb-5 text-right font-bold border border-slate-300 ml-3">
                            <input type="submit" value="Setting" class="text-slate-300">
                        </button>
                        <button
                            class="text-white rounded-md bg-transparent block px-3 py-1 mb-5 text-right font-bold ml-5 border border-red-300">
                            <input type="submit" value="Delete" class="text-red-300">
                        </button>
                    </td>
                </tr>
                <tr class="pb-5">
                    <td>Witchy Woman</td>
                    <td>The Eagles</td>
                    <td class="flex flex-row-reverse">
                        <button
                            class="text-white rounded-md bg-transparent block px-3 py-1 mb-5 text-right font-bold border border-slate-300 ml-3">
                            <input type="submit" value="Setting" class="text-slate-300">
                        </button>
                        <button
                            class="text-white rounded-md bg-transparent block px-3 py-1 mb-5 text-right font-bold ml-5 border border-red-300">
                            <input type="submit" value="Delete" class="text-red-300">
                        </button>
                    </td>
                </tr>
                <tr class="pb-5">
                    <td>Shining Star</td>
                    <td>Earth, Wind, and Fire</td>
                    <td class="flex flex-row-reverse">
                        <button
                            class="text-white rounded-md bg-transparent block px-3 py-1 mb-5 text-right font-bold border border-slate-300 ml-3">
                            <input type="submit" value="Setting" class="text-slate-300">
                        </button>
                        <button
                            class="text-white rounded-md bg-transparent block px-3 py-1 mb-5 text-right font-bold ml-5 border border-red-300">
                            <input type="submit" value="Delete" class="text-red-300">
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <h3 class="bold text-1xl mb-5 font-bold">Add table</h3>
    <form action="" method="post" class="">
        <p class="bold text-1xl">Table name</p>
        <input type="text" name="table_name" class="w-full border-slate-300 border-1 h-10 mb-5 rounded-md pl-5">
        <p class="bold text-1xl">Upload base image</p>
        <input type="file" name="base_image" class="w-full border-slate-300 border-1 h-10">
        <img src="{{ asset('images/sample_spla.png') }}" alt="preview image" class="pb-5">
        <button
            class="text-white rounded-md bg-indigo-300 block px-8 py-3 mb-5 text-right ml-auto drop-shadow-md font-bold">
            <input type="submit" value="Submit" class="">
        </button>
    </form>
</x-app>
