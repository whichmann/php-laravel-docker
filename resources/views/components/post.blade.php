@props(['title', 'body', 'author', 'created_at', 'id'])

<div style="border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;">
    <h4><b>{{ $title }}</b></h4>
    <p>{{ $body }}</p>
    <p><i>Posted by {{ $author }} on {{ $created_at }}</i></p>
    @if (isset($id)) <a href="{{ route('my-single-post', ['id' => $id]) }}">Read More</a> @endif
</div>
