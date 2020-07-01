@extends("layouts.app")

@section("title","List Articles")

@section("content")

    <a href="{{ route("articles.create") }}" class="btn btn-success"><i class="fa fa-plus"></i> Create New Article</a>
    <table align="center" class="table table-striped mt-3 table-bordered">
        <thead>
        <tr>
            <th>Title</th>
            <th>Summary</th>
            <th>Tag</th>
            <th>Published?</th>
            <th width="20%"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($articles as $article)
            <tr>
                <td><a href="{{ route("articles.show", $article->id) }}">{{ $article->title }}</a></td>
                <td>{{ $article->summary }}</td>
                <td>{{ $article->tag_id }}</td>
                <td>{{ $article->published }}</td>

                <td width="20%">
                    <form method="post" action="{{ route('articles.destroy', $article->id) }}">
                        <a href="{{ route("articles.show", $article->id) }}" class="btn btn-info btn-sm"><i class='fa fa-eye'></i></a>

                        <a href="{{ route("articles.edit", $article->id) }}" class="btn btn-primary btn-sm"><i class='fa fa-edit'></i></a>

                        <a href="{{ route("delete-article", $article->id) }}" onclick='return confirm("Are you sure dude?")' class="btn btn-warning btn-sm"><i class='fa fa-trash'></i></a>

                        <button onclick='return confirm("Are you sure dude?")' type="submit" class="btn btn-danger btn-sm"><i class='fa fa-trash'></i></button>
                        @csrf
                        @method("DELETE")
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
