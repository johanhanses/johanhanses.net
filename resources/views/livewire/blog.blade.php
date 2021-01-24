<div class="text-lg" style="min-height: 70vmin;">
    <h1 class="mb-12">Bloggens innehåll</h1>


    @foreach ($article_list as $article)
        {{-- @dd($article) --}}
        <div class="mb-6">
            <a href="/blog/{{ $article["link"] }}">
                <p>{{ $article["title"] }}</p>
            </a>

            <p>{{ $article["date"] }}</p>
        </div>
    @endforeach
</div>
