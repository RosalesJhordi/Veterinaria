<div class="bg-transparent flex flex-col justify-center items-center">

    <form wire:submit.prevent='postular' class="w-96 mt-5">
        <div class="mb-4">
            <label for="cv">Curriculum o Hoja de vida(PDF)</label>
            <input wire:model="cv" id="cv" name="cv" type="file" accept=".pdf" class="block mt-1 w-full" />
        </div>
        @error('cv')
            <p class="border border-red-600 uppercase bg-red-100 text-red-600 font-bold p-1 text-sm">{{ $message }}</p>
        @enderror
        @if (session()->has('success'))
            <div class="border border-green-600 uppercase bg-green-100 text-green-600 font-bold p-1 text-sm">
                {{ session('success') }}
            </div>
        @endif
        @if (session()->has('error'))
            <div class="border border-red-600 uppercase bg-red-100 text-red-600 font-bold p-1 text-sm">
                {{ session('success') }}
            </div>
        @endif

        <button type="submit" class="my-5 bg-white text-center w-40 p-1 text-black">
            Subir
        </button>
    </form>
</div>
