@extends('default')

@section('content')
    <div class="container">
        @include('snippets.post', $post)
    </div>
@endsection