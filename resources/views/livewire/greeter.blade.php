<div>
    <form
        wire:submit="changeName(document.querySelector('#newName').value)"
    >
        <div>
            Hello, {{ $name }}!
        </div>
        <div class="mt-2">
            <input
                id="newName"
                type="text"
                class="block w-full p-4 text-white bg-gray-700 border rounded-md"
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
</div>
