@extends('layouts.app')

@section('content')
<div class="container" id="projects-container">
    <div class="row justify-content-center">
        <div class="col-12">
            <form action="{{ route('admin.projects.update', $project->id) }}" method="POST">
                @csrf
                @method('PUT')

                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-5">
                    <label for="exampleFormControlInput1" class="form-label">
                        Title
                    </label>
                    <input type="text" class="form-control" id="title" placeholder="Insert your post's title" name="title" value="{{ old( 'title' , $project->title) }}">
                </div>

                @error('url')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-5">
                    <label for="url" class="form-label">
                        Project Url
                    </label>
                    <input type="text" class="form-control" id="url" placeholder="https://ginetto-va-in-campagna-col-cappello.jpg" name="url" value="{{  old( 'url' , $project->url) }}">
                </div>

                @error('content')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-5">
                    <label for="content" class="form-label">
                        Content
                    </label>
                    <textarea class="form-control" id="content" rows="7" name="content">
                        {{ old( 'content' , $post->content) }}
                    </textarea>
                </div>

                <div class="mb-3">
                    <button type="submit" class="me-3">
                        Update post
                    </button>
                    <button type="reset">
                        Reset
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection