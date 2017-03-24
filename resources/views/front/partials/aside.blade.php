<div class="col-md-4">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">
                Categorias
            </h3>
        </div>
        <div class="panel-body">
            <ul class="list-group">
                @foreach($categories as $category)
                <li class="list-group-item">
                    <span class="badge">
                        {{ $category->articles->count()}}
                    </span>
                    <a href="{{ route('front.search.category', $category->name) }}">
                        {{$category->name}}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="panel-heading">
            <h3 class="panel-title">
                Tags
            </h3>
        </div>
        <div class="panel-body">
            <ul class="list-group">
                @foreach($tags as $tag)
                <li class="list-group-item">
                    {{$tag->name}}
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>