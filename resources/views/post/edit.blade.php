<h1>編集画面</h1>
<p><a href="{{ route('post.index')}}">一覧画面</a></p>

@if ($message = Session::get('success'))
<p>{{ $message }}</p>
@endif

<form action="{{ route('post.update',$post->id)}}" method="POST">
    @csrf
    @method('PUT')
    <p>タイトル：<input type="text" name="title" value="{{ $post->title }}"></p>
    <p>内容：<input type="text" name="content" value="{{ $post->content }}"></p>
    <p>ユーザーID：<input type="text" name="user_id" value="{{ $post->user_id }}"></p>
    <p>状態：<input type="text" name="finished" value="{{ $post->finished }}"></p>
    <input type="submit" value="編集する">
</form>
