<div>
    @if($success)
        <span class="block mb-4 text-green-500">Post saved successfully.</span>
    @endif

    <form method="POST" wire:submit="save">
        <div>
            <label for="title" class="block font-medium text-sm text-gray-700">Title</label>
            <input id="title" wire:model="title" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" type="text" />
            @error('title')
            <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
            @enderror
        </div>

        <div class="mt-4">
            <label for="body" class="block font-medium text-sm text-gray-700">Body</label>
            <textarea id="body" wire:model="body" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm"></textarea>
            @error('body')
            <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
            @enderror
        </div>

        <button class="mt-4 px-4 py-2 bg-gray-800 rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">
            Save
        </button>
    </form>
</div>
