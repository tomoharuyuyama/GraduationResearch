<x-app>
    <h2 class="bold text-3xl mb-14">画像アップロード</h2>

    <form action="" method="post" class="">
        <h3 class="bold text-1xl mb-5 font-bold">Upload image</h3>
        <input type="file" name="base_image" class="w-full border-slate-300 border-1 h-10 mb-5">
        <div class="flex mb-5">
            <div class="">
                <p class="bold text-1xl font-bold mb-5">Base image</p>
                <img src="{{ asset('images/sample_spla.png') }}" alt="preview image" class="pb-5">
            </div>
            <div class="">
                <p class="bold text-1xl font-bold mb-5">Upload image</p>
                <img src="{{ asset('images/sample_spla.png') }}" alt="preview image" class="pb-5 pl-5">
            </div>
        </div>
        <div class="flex">
            <button
                class="text-center text-white rounded-md bg-indigo-300 block w-32 py-3 mb-5 text-right drop-shadow-md font-bold">
                <input type="submit" value="Submit" class="">
            </button>
            <button
                class="text-center ml-5 bg-white text-slate-300 rounded-md bg-transparent block w-32 py-1 mb-5 text-right font-bold border border-slate-300 drop-shadow-md">
                Back
            </button>
        </div>
    </form>


</x-app>
