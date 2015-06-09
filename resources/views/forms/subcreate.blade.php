@extends('default')

@section('content')

    {!! Form::open(['url' => 'sub/new']) !!}

    <div class="col-sm-8 col-sm-offset-2">
        <p class="text-center alert alert-info">
            <span class="glyphicon glyphicon-ok"></span>
             <b>Create</b> a new sub
        </p>
    </div>

    <div class="col-sm-8 col-sm-offset-2">
        @if($errors->first('name'))
            {!! $errors->first('name', '<div class="alert alert-warning"><b>:message</b></div>') !!}
            <?php $name = 'has-error'; ?>
        @endif

        <div class="form-group {!! $name or '' !!}">
            {!! Form::text('name', $value = null, ['class' => 'form-control input-lg', 'placeholder' => 'Enter the name of the sub, then click Go']) !!}
        </div>

        {!! Form::submit('Go!', ['class' => 'btn btn-lg btn-block btn-info']) !!}
    </div>

    {!! Form::close() !!}
@endsection