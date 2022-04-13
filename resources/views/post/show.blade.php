@extends('layouts.app')

@section('content')
<h1>詳細画面</h1>
<p><a href="{{ route('post.index')}}">一覧画面</a></p>

<table border="1">
    <tr>
        <th>id</th>
        <th>title</th>
        <th>content</th>
        <th>user_id</th>
        <th>finished</th>
        <th>created_at</th>
        <th>updated_at</th>
    </tr>
    <tr>
        <td>{{ $post->id }}</td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->content }}</td>
        <td>{{ $post->user_id }}</td>
        <td>{{ $post->finished }}</td>
        <td>{{ $post->created_at }}</td>
        <td>{{ $post->updated_at }}</td>
    </tr>
</table>
@endsection
