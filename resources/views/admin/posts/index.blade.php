@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $posts as $post )

                <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td>{{$post->title}}</td>
                    <td>BOTTONIXXX</td>

                </tr>

            @endforeach
        </tbody>
    </table>
</div>
@endsection
