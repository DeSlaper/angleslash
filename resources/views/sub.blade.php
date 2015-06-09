@extends('default')

@section('content')
    <div>
        @if($posts->count() > 0)
            @foreach($posts as $post)
                @include('snippets.post', ['post' => $post])
            @endforeach
        @else
            <p>
                Nobody has submitted a post yet, looks like you will be the first!
            </p>
        @endif
    </div>
@endsection