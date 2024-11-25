<div class="bg-white border rounded-lg shadow-md">
    @if (session()->has('success'))
        <div class="text-green-600 font-semibold mb-4">
            {{ session('success') }}
        </div>
    @endif
    <form wire:submit="save" class="bg-white border-2 border-black rounded-lg shadow mx-auto max-w-none px-4 py-5 sm:px-6 space-y-3">
        <div>
            <div class="flex items-start /space-x-3/">
                <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full object-cover"
                        src="{{ $user->avatar ? asset('storage/' . $user->avatar) : asset('images/user.jpeg') }}"
                        alt="{{ $user->name }}" />
                </div>
                <div class="text-gray-700 font-normal w-full">
                    <textarea
                        class="block w-full p-2 pt-2 text-gray-900 rounded-lg border-none outline-none focus:ring-0 focus:ring-offset-0" wire:model="content" rows="2" placeholder="What's going on, {{  $user->name }}?"></textarea>
                        @error('content') 
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                </div>
            </div>
            @if ($picture)
                <div id="previewContainer" class="relative">
                    <img id="imagePreview" src="{{ $picture->temporaryUrl() }}" class="min-h-auto w-full rounded-lg object-cover max-h-64 md:max-h-72" />
                    <button id="removeImage" type="button" wire:click="$set('picture', null)" class="absolute top-0 right-0 bg-red-500 text-white p-1 h-[30px] w-[30px] rounded-[7px]">
                        ✕
                    </button>
                </div>
            @endif

        </div>

        <div>
            <div class="flex items-center justify-between">
                <div class="flex gap-4 text-gray-600">
                    <div>
                        <input type="file" wire:model="picture" id="picture" class="hidden" accept="image/*" />
                        <label for="picture" class="-m-2 flex gap-2 text-xs items-center rounded-full p-2 text-gray-600 hover:text-gray-800 cursor-pointer">
                            <span class="sr-only">Picture</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                            </svg>
                        </label>
                        @error('picture') 
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div>
                    <button type="submit" wire:loading.attr="disabled"
                        class="-m-2 flex gap-2 text-xs items-center rounded-full px-4 py-2 font-semibold bg-gray-800 hover:bg-black text-white">
                        <span wire:loading.remove>Post</span>
                        <span wire:loading>Posting...</span>
                    </button>
                </div>


            </div>
        </div>
    </form>
</div>
