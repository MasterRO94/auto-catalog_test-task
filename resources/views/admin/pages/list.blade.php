@extends('admin.admin')

@section('head_title', 'Админ панель - Страницы')

@section('content')


    <div class="panel-heading">
        <h1 class="text-center">Страницы</h1>
    </div>
    <div class="list-group">
        @foreach($pages as $page)
            <a href="{{ route('admin_page_edit', ['page' => $page]) }}" class="list-group-item">
                <h4 class="list-group-item-heading">{{ $page->title }}</h4>
                <p class="list-group-item-text">{{ substr($page->description, 0,300) }}</p>
            </a>
        @endforeach
    </div>

    {!! $pages->render() !!}

@stop