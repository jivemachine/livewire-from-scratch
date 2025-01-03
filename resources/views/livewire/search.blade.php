<div>
    <form>
        <div class="mt-2">
            <input type="text" class="w-9/12 p-4 text-white bg-gray-700 border rounded-md"
                wire:model.live.debounce="searchText" placeholder="{{ $placeholder }}">

            <button class="p-4 font-medium text-white bg-indigo-600 rounded-md disabled:bg-indigo-400"
                wire:click.prevent="clear()" {{ empty($searchText) ? 'disabled' : '' }}>
                Clear
            </button>
        </div>
    </form>
    <livewire:search-results :results="$results" :show="!empty($searchText)" />
</div>
