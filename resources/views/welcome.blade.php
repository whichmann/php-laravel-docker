<x-layout>
    <div class="window main">
        <div class="title-bar">
            <h1 class="title">My Blog</h1>
        </div>
        <form id="postForm">
            <div class="standard-dialog center scale-down container">
                <input class="form-input" type="text" id="title" placeholder="Title" maxlength="32" required />
                <textarea class="form-input" id="body" placeholder="Write your post here..." required></textarea>
                <button class="btn form-btn" type="submit">Add Post</button>
            </div>
        </form>
        <div id="posts"></div>
    </div>
    <a href="/blogs">Blogs</a>
</x-layout>
