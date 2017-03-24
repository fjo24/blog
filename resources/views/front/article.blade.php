@extends('admin.templates.main')

@section('title', $article->title)

@section('content')
<div class="row">
    <div class="fondo-articulo">
        <div class="col-md-8">
            <div class="row">
                <h1>
                    {!! $article->title !!}
                </h1>
                {!! $article->content !!}
            </div>
            <h3>
                Comentarios
            </h3>
            <hr>
                <div id="disqus_thread">
                </div>
                <script>
                    /**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://blog-facilito-7.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
                </script>
                <noscript>
                    Please enable JavaScript to view the
                    <a href="https://disqus.com/?ref_noscript">
                        comments powered by Disqus.
                    </a>
                </noscript>
            </hr>
        </div>
        <div class="row">
            @include ('front.partials.aside')
        </div>
    </div>
</div>
@endsection
