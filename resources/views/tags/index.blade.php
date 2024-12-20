@extends('partials.layout')
@section('title', 'Tags')
@section('content')
    <a class="btn btn-primary mt-5" href="{{ route('tags.create') }}">Add a tag</a>
    <div class="my-3 text-center">
      {{ $tags->links('partials.pagination') }}
    </div>
    <table class="table table-zebra mt-5">
      <thead>
         <th>ID</th>
         <th>Name</th>
         <th>Created at</th>
         <th>Updated at</th>
         <th>Actions</th>
      </thead>
      <tbody>
        @foreach($tags as $tag)
          <tr class="hover">
            <td>{{$tag->id}}</td>
            <td>{{$tag->name}}</td>
            <td>{{$tag->created_at}}</td>
            <td>{{$tag->updated_at}}</td>
            <td>
              <div class="join">
                <a class="btn join-item btn-warning" href="{{ route('tags.edit', ['tag' => $tag]) }}">Edit</a>
                <form action="{{ route('tags.destroy', ['tag' => $tag]) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button class="btn join-item btn-error" href="">Delete</button>
                </form>
              </div>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
@endsection