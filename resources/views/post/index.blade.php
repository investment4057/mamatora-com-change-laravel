@extends('layouts.app')

@section('content')
<h1>一覧画面</h1>
<p><a href="{{ route('post.create') }}">新規追加</a></p>

@if ($message = Session::get('success'))
<p>{{ $message }}</p>
@endif

<table border="1">
    <tr>
        <th>title</th>
        <th>詳細</th>
        <th>編集</th>
        <th>削除</th>
    </tr>
    @foreach ($posts as $post)
    <tr>
        <td>{{ $post->title }}</td>
        <th><a href="{{ route('post.show',$post->id)}}">詳細</a></th>
        <th><a href="{{ route('post.edit',$post->id)}}">編集</a></th>
        <th>
            <form action="{{ route('post.destroy', $post->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" name="" value="削除">
            </form>
        </th>
    </tr>
    @endforeach
</table>
@endsection
