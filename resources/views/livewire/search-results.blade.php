<div class="{{ $show ? 'block' : 'hidden' }}">
    <div class="absolute p-4 mt-4 bg-gray-700 border border-indigo-600 rounded-md">
        @if (count($results) == 0)
            <p>No results found.</p>
        @endif

        @foreach ($results as $result)
            <div class="pt-2">
                <a href="/articles/{{ $result->id }}">{{ $result->title }}</a>
            </div>
        @endforeach
    </div>
</div>
