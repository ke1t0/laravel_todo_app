<header>
    <h1>編集フォーム</h1>
</header>

<main>
    <form action="{{ url('hello/update/'.$post['id']) }}" method="POST">
        {{ csrf_field() }}
        <input type="text" name="title" value="{{$post['title']}}" class="edit-new" />
        <button type="submit" name="add" class="btn">変更</button>
    </form>
    <br>
    <br>
    <a href="/hello" class="btn">ホームへ</a>
</main>

<link
    href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c"
    rel="stylesheet"
/>
<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
