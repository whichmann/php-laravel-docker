@props(['title', 'body', 'author', 'created_at', 'id', 'space'])

<div class="post alert-box outer-border scale-down">
    <h4 class="post-title">{{ $title }}</h4>
    <div class="post-body">{{ $body }}</div>
    <i class="post-date">Posted by {{ $author }} on {{ $created_at }}</i>
    @if (isset($space)) <p>As seen on <strong>,,{{ $space->name }}"</strong></p> @endif
    @if (isset($id))
    <form method="POST" action="{{ route('delete-post', $id) }}" style="color: red;">
        @csrf
        @method('DELETE')
        <div class="post-controls">
            <button type="submit" class="post-control delete-btn"><img height="auto" src="icons/delete.svg" alt="Delete" /></button>
            @if (isset($id)) <a class="post-control edit-btn" href="{{ route('my-single-post', ['post' => $id]) }}"><img height="auto" src="icons/edit.svg" alt="Edit" /></a> @endif
        </div>
    </form>
    @endif
</div>
