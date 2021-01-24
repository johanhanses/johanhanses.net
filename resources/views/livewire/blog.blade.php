<div class="text-lg" style="min-height: 70vmin;">
    <h1 class="mb-12">Bloggens innehåll</h1>

    @foreach ($article_list as $article)
    {{-- @dd($article) --}}
        <div class="mb-6">
            <a href="/blog/{{ $article["link"] }}">
                <h3 class="font-vollkorn font-black text-2xl">{{ $article["title"] }}</h3>
                <p class="text-base text-gray-600">{{ $article["date"] }}</p>
            </a>
        </div>
    @endforeach
</div>
