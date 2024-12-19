<div>
    <form
        wire:submit="changeName()"
    >
        <div class="mt-2">
            <select
                type="text"
                class="p-4 text-white bg-gray-700 border rounded-md"
                wire:model.fill="greeting"
            >
                <option value="Hello">Hello</option>
                <option value="Hi">Hi</option>
                <option value="Hey">Hey</option>
                <option value="Howdy" selected>Howdy</option>
            </select>
            <input
                type="text"
                class="p-4 text-white bg-gray-700 border rounded-md"
                wire:model="name"
            >
        </div>
        <div class="mt-2">
            <button
                type="submit"
                class="px-4 py-2 font-medium text-white bg-blue-600 rounded-md"
            >
                Greet
            </button>
        </div>
    </form>
    @if ($name !== '')
        <div class="mt-5">
            {{$greeting}}, {{ $name }}!
        </div>
    @endif
</div>
