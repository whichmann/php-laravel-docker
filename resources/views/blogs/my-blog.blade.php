<x-layout>
    my blog
    <ul>
        @foreach ($posts as $post)
        <li>
            <x-post :id="$post['id']" :author="$post['author']" :created_at="$post['created_at']" :title="$post['title']" :body="$post['body']" />
        </li>
        @endforeach
    </ul>
</x-layout>
