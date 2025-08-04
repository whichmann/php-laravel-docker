<x-layout :title="'Add New Post'">
    <form method="POST" action="/add-post">
        @csrf
        <div class="add-post-container">
            <section style="justify-content: flex-start">
                <input value="{{ old('title') }}" required id="title" type="text" name="title" class="form-input" placeholder="Title" maxlength="32" />
                <input value="{{ old('author') }}" id="author" type="text" name="author" required class="form-input" placeholder="Author">

                <select id="space_id" name="space_id" style="display: none;">
                    <option disabled value="">Select a space</option>
                    @foreach ($spaces as $space)
                    <option value="{{ $space->id }}" {{ $space->id == old('space_id') ? 'selected' : '' }}>{{ $space->name }}</option>
                    @endforeach
                </select>

                <textarea class="form-input" id="body" name="body" required rows="5" placeholder="Write your post here...">{{ old('body')}}</textarea>
            </section>
            <section class="field-row" style="justify-content: flex-end">
                <button class="btn" onclick="{{ route('all-my-posts') }}'">
                    <a class="link" href="{{ route('all-my-posts') }}">Cancel</a>
                </button>
                <button type="submit" class="btn">
                    Submit Post
                </button>
            </section>
        </div>
        @if ($errors->any())
        <div style="color:red;font-weight:500;">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </form>


</x-layout>
