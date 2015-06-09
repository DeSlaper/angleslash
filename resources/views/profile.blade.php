@extends('default')

@section('content')
    <div class="col-lg-8">
        @foreach($user->posts()->paginate(15) as $post)
            @include('snippets.post', ['post' => $post])
        @endforeach
    </div>

    <div class="col-lg-4">
        <div class="alert alert-succes">
            <h3>User profile</h3>
            <p>
                {{ $user->name }} has been a user for {{ Helper::timeAgo($user->created_at, 'user') }}
                and has submitted {{ $user->posts->count() }} posts so far!
            </p>
        </div>
    </div>
@endsection