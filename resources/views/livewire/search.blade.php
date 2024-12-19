<div>
    <form>
        <div class="mt-2">
            <input
                type="text"
                class="w-9/12 p-4 text-white bg-gray-700 border rounded-md"
                wire:model.live.debounce="searchText"
                placeholder="Search..."
            >

            <button class="p-4 font-medium text-white bg-indigo-600 rounded-md disabled:bg-indigo-400"
                wire:click.prevent="clear()"
                {{ empty($searchText) ? 'disabled' : '' }}
            >
                Clear
            </button>
        </div>
    </form>
    <div class="mt-4">
        @foreach($results as $result)
        <div class="pt-2">
            {{$result->title}}
        </div>
        @endforeach
    </div>
</div>
