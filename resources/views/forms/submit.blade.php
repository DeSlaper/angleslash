@extends('default')

@section('content')
    {!! Form::open(['url' => 'post/new']) !!}

    <div class="col-sm-8 col-sm-offset-2">
        <p class="text-center alert alert-info">
            <span class="glyphicon glyphicon-ok"></span>
            <b>Submit</b> a new link
        </p>
    </div>

    <div class="col-sm-8 col-sm-offset-2">
        @foreach($errors->all(':message') as $message)
            <div class="alert alert-warning">
                <b>{!! $message !!}</b>
            </div>
            @if(str_contains($message, 'title'))
                <?php $title = 'has-error'; ?>
            @endif
            @if(str_contains($message, 'url'))
                <?php $url = 'has-error'; ?>
            @endif
            @if(str_contains($message, 'sub'))
                <?php $sub = 'has-error'; ?>
            @endif
        @endforeach
            <div class="form-group {!! $title or '' !!}">
                {!! Form::text('title', $value = null, ['class' => 'form-control input-lg', 'placeholder' => 'Enter the title here']) !!}
            </div>

            <div class="form-group {!! $url or '' !!}">
                {!! Form::text('url', $value = null, ['class' => 'form-control input-lg', 'placeholder' => 'http://example.com']) !!}
            </div>

            <div class="form-group {!! $sub or '' !!}">
                {!! Form::text('sub', $value = null, ['class' => 'form-control input-lg', 'placeholder' => 'Name of sub here']) !!}
            </div>

            {!! Form::submit('Go!', ['class' => 'btn btn-lg btn-block btn-info']) !!}
    </div>

    {!! Form::close() !!}
@endsection