<div>
    <form>
        <div class="mt-2">
            <input type="text" class="w-full p-4 text-white bg-gray-700 border rounded-md"
                wire:model.live.debounce="searchText" placeholder="{{ $placeholder }}">

        </div>
    </form>
    <livewire:search-results :results="$results" :show="!empty($searchText)" />
</div>
