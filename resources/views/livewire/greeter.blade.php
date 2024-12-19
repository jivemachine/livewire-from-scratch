<div>
    <form
        wire:submit="changeGreeting()"
    >
        <div class="mt-2">
            <select
                type="text"
                class="p-4 text-white bg-gray-700 border rounded-md"
                wire:model.fill="greeting"
            >
                @foreach ($greetings as $item)
                    <option value="{{$item->greeting}}">
                        {{$item->greeting}}
                    </option>
                @endforeach
            </select>
            <input
                type="text"
                class="p-4 text-white bg-gray-700 border rounded-md"
                wire:model="name"
            >
        </div>
        <div>
            @error('name')
            {{$message}}
            @enderror
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
            {{$greetingMessage}}
        </div>
    @endif
</div>
