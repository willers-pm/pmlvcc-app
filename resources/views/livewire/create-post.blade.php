<form wire:submit="save">

    <div class="grid grid-cols-2 gap-4 p-5">
        <div class="col-span-2 md:col-span-1">

            <p class="pb-3">
                <label class="block">
                    Überschrift
                    <input type="text" wire:model="posttitle" class="w-full border-none shadow-lvc rounded-md min-h-[40px]">
                </label>
            </p>
            <p class="pb-3">
                <label class="block">
                    Text
                    <textarea wire:model="postcontent" class="w-full border-none shadow-lvc rounded-md" rows="5"></textarea>
                </label>
            </p>

        </div>

        <div class="col-span-2 md:col-span-1">

            <p>
                Bild hochladen
            </p>
            <div class="flex flex-col items-center justify-center">
                <label class="aspect-16/9 flex flex-col items-center justify-center w-full bg-white shadow-lvc cursor-pointer rounded-md" for="file-upload">
                    <p class="bg-[#e6f2ea] py-4 px-9 mb-2 rounded-full font-bold text-green-lvd flex flex-row items-center justify-center gap-2">
                        <svg class="w-5 inline fill-green-lvd" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M448 80c8.8 0 16 7.2 16 16l0 319.8-5-6.5-136-176c-4.5-5.9-11.6-9.3-19-9.3s-14.4 3.4-19 9.3L202 340.7l-30.5-42.7C167 291.7 159.8 288 152 288s-15 3.7-19.5 10.1l-80 112L48 416.3l0-.3L48 96c0-8.8 7.2-16 16-16l384 0zM64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-320c0-35.3-28.7-64-64-64L64 32zm80 192a48 48 0 1 0 0-96 48 48 0 1 0 0 96z"/></svg>
                        Datei hochladen
                    </p>
                    <p class="font-bold text-[#666] invisible md:visible">oder Drag and Drop</p>
                </label>

                <input type="file" id="file-upload" class="hidden" wire:model="postphoto" />

                <div
                    x-data="{ isUploading: false, progress: 0 }"
                    x-on:livewire-upload-start="isUploading = true"
                    x-on:livewire-upload-finish="isUploading = false"
                    x-on:livewire-upload-error="isUploading = false"
                    x-on:livewire-upload-progress="progress = $event.detail.progress"
                >

                <!-- Progress Bar -->
                <div x-show="isUploading">
                    <progress max="100" x-bind:value="progress"></progress>
                </div>

                @error('photo') <span class="error">{{ $message }}</span> @enderror
            </div>


        </div>

        <div class="clear-both mt-5 col-span-2">
            <button type="submit" class="cursor-pointer bg-green-lvc text-[#ffffff] py-2 px-9 rounded-full w-full md:w-auto md:float-right">Inhalte ausspielen</button>
        </div>
    </div>
</form>
