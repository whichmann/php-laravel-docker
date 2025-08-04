<x-layout :title="'Space Blog'">
    <ul>
        @foreach ($posts as $post)
        <li>
            <x-post :id="$post['id']" :author="$post['author']" :created_at="$post['created_at']" :title="$post['title']" :body="$post['body']" />
        </li>
        @endforeach
        @if($posts->isEmpty())
        <p class='no-posts'>No posts yet.</p>
        @endif
    </ul>
</x-layout>
