<div class="w-1/2 m-auto">
    @foreach ($articles as $article)
        <div class="p-3 mt-5" wire:key='{{ $article->id }}'>
            <h3 class="mb-3 text-2xl text-blue-500 hover:text-blue-700">
                <a href="/articles/{{ $article->id }}">{{ $article->title }}</a>
            </h3>
            <p>
                {{ str($article->content)->words(30) }}
            </p>
        </div>
    @endforeach

</div>
