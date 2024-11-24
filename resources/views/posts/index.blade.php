@extends('partials.layout')
@section('title', 'Posts')
@section('content')

    <a class="btn btn-primary" href="{{ route('posts.create') }}">Add post</a>
    <div class="my-4 text-center">
        {{ $posts->links() }}
    </div>

    <table class="table table-zebra">
        <thead>
            <th>ID</th>
            <th>Title</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr class="hover">
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->updated_at }}</td>
                    <td>
                        <div class="join">
                            <a class="join-item btn btn-info" href="{{ route('posts.show', ['post' => $post]) }}">View</a>
                            <a class="join-item btn btn-warning" href="{{ route('posts.edit', ['post' => $post]) }}">Edit</a>
                            <form action="{{ route('posts.destroy', ['post' => $post]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="join-item btn btn-error">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <th>ID</th>
            <th>Title</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Actions</th>
        </tfoot>
    </table>

    <div class="my-4 text-center">
        {{ $posts->links() }}
    </div>
@endsection
