@extends('admin.admin')

@if($page)
    @section('head_title', $page->title)

    @section('content')

    <div class="panel-heading">
        <h1 class="text-center">{{ $page->title }}</h1>
    </div>

    {!! Form::open(['id'=>'edit_page_form', 'url' => route('admin_page_save', ['page' => $page]), 'class' => 'edit-form clearfix', 'role' => 'form']) !!}

    @if (count($errors) > 0)
        <div class="alert alert-danger col-md-10 col-md-offset-1">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="col-md-10 col-md-offset-1">
        {!! Form::label('title', 'Заголовок (title): ') !!}
        {!! Form::text('title', $page->title, ['class' => 'form-control' ]) !!}
    </div>

    <div class="col-md-10 col-md-offset-1">
        {!! Form::label('keywords', 'Ключевые слова') !!}
        {!! Form::text('keywords', $page->keywords, ['class' => 'form-control' ]) !!}
    </div>

    <div class="col-md-10 col-md-offset-1">
        {!! Form::label('descriptions', 'Описание') !!}
        {!! Form::text('descriptions', $page->description, ['class' => 'form-control' ]) !!}
    </div>

    <div class="col-md-10 col-md-offset-1">
        {!! Form::label('h1', 'Заголовок (h1): ') !!}
        {!! Form::text('h1', $page->h1, ['class' => 'form-control', 'required' ]) !!}
    </div>
    <div class="col-md-10 col-md-offset-1">
        {!! Form::label('body', 'Заголовок (h1): ') !!}
        {!! Form::textarea('body', $page->body, ['class' => 'form-control' ]) !!}
    </div>

    <div class="col-md-10 col-md-offset-1 submit">
        {!! Form::submit('Сохранить', ['class' => 'btn btn-primary center-block' ]) !!}
    </div>

    {!! Form::close() !!}

    <script src="{{ asset('/js/ckeditor/ckeditor.js') }}"></script>
    <script> CKEDITOR.replace( 'body' ); </script>

    @stop

@else

    @section('head_title', 'Страница не найдена!')

    @section('content')

        <div class="panel-heading">
            <h1 class="text-center">Страница не найдена!</h1>
        </div>

    @stop

@endif