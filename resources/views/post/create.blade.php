<h1>新規作成画面</h1>
<p><a href="{{ route('post.index')}}">一覧画面</a></p>

<form action="{{ route('post.store')}}" method="POST">
    @csrf
    <p>タイトル：<input type="text" name="title" value="{{old('title')}}"></p>
    <p>内容：<input type="text" name="content" value="{{old('content')}}"></p>
    <p>ユーザーID：<input type="text" name="user_id" value="{{old('user_id')}}"></p>
    <p>状態：<input type="text" name="finished" value="{{old('finished')}}"></p>
    <input type="submit" value="登録する">
</form>
