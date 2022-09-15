<x-app>
    <h2 class="bold text-3xl mb-14">レコード一覧</h2>
    <div class=" pb-5">
        <p class="bold text-1xl font-bold mb-5">Table name</p>
        <div class="w-full border-slate-300 border-1 h-10 mb-5 rounded-md pl-5 bg-white pt-2">スプラトゥーン2</div>
    </div>
    <div class="">
        <p class="bold text-1xl font-bold mb-5">Base image</p>
        <img src="{{ asset('images/sample_spla.png') }}" alt="preview image" class="pb-5">
    </div>
    <div class=" pb-5">
        <p class="bold text-1xl font-bold mb-5">Date table</p>
        <div class="p-5 w-full bg-white rounded-md mb-14 drop-shadow-md">
            <table class="table-auto w-full border-separate border-spacing-y-8">
                <thead>
                    <tr class="pb-5">
                        <th class="text-left">Ofject name</th>
                        <th class="text-left">Columun name</th>
                        <th class="text-left">Time stamp</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="pb-5 border-b border-slate-300">3</td>
                        <td class="pb-5 border-b border-slate-300">kill</td>
                        <td class="pb-5 border-b border-slate-300">2022-07-24 13:23:35</td>
                    </tr>
                    <tr>
                        <td class="pb-5 border-b border-slate-300">12</td>
                        <td class="pb-5 border-b border-slate-300">sspecial</td>
                        <td class="pb-5 border-b border-slate-300">2022-07-24 13:23:35</td>
                    </tr>
                    <tr>
                        <td class="pb-5 border-b border-slate-300">1</td>
                        <td class="pb-5 border-b border-slate-300">isWin</td>
                        <td class="pb-5 border-b border-slate-300">2022-07-24 13:23:35</td>
                    </tr>
                    <tr>
                        <td class="pb-5 border-b border-slate-300">スプラシューター</td>
                        <td class="pb-5 border-b border-slate-300">weapon</td>
                        <td class="pb-5 border-b border-slate-300">2022-07-24 13:23:35</td>
                    </tr>
                    <tr>
                        <td class="pb-5 border-b border-slate-300">ホットブラスター</td>
                        <td class="pb-5 border-b border-slate-300">weapon</td>
                        <td class="pb-5 border-b border-slate-300">2022-07-24 13:23:35</td>
                    </tr>
                    <tr>
                        <td class="pb-5 border-b border-slate-300">スプラシューターコラボ</td>
                        <td class="pb-5 border-b border-slate-300">weapon</td>
                        <td class="pb-5 border-b border-slate-300">2022-07-24 13:23:35</td>
                    </tr>
                    <tr>
                        <td class="pb-5 border-b border-slate-300">スプラシューターコラボ</td>
                        <td class="pb-5 border-b border-slate-300">weapon</td>
                        <td class="pb-5 border-b border-slate-300">2022-07-24 13:23:35</td>
                    </tr>
                    <tr>
                        <td class="">0</td>
                        <td class="">isWin</td>
                        <td class="">2022-07-24 13:23:35</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <form action="" method="post" class="">
        <div class="flex">
            <a href="{{ route('table_list') }}">
                <button
                    class="text-center bg-white text-slate-300 rounded-md bg-transparent block w-32 py-3 mb-5 text-right font-bold border border-slate-300 drop-shadow-md">
                    Back
                </button>
            </a>
        </div>
    </form>
</x-app>
