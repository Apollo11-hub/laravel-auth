@extends('layouts.app')

@section('content')
<div class="container">
    @if(session('prodotto_cancellato'))
        <div class="alert alert-success" role="alert">
            {{ session('prodotto_cancellato') }}
        </div>
    @endif
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th class="" scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $posts as $post )

                <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td>{{$post->title}}</td>
                    <td class="d-flex">
                        <a type="button" class="btn btn-primary " href="{{route('admin.posts.show', $post)}}">SHOW</a>
                        <a type="button" class="btn btn-success mx-2" href="{{route('admin.posts.edit', $post)}}">EDIT</a>
                        <form
                            onsubmit="return confirm('confermi l\'eliminazione di: {{ $post->title }}?')"
                        action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger" >DELETE</button>
                        </form>

                    </td>

                </tr>

            @endforeach
        </tbody>
    </table>
</div>
@endsection
