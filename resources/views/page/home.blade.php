@extends('app')

@if(isset($page) && $page)
    @section('meta_keywords', $page->keywords)
    @section('meta_description', $page->description)
    @section('head_title', $page->title)

    @section('content')
        <div class="panel-heading">
            <h1 class="text-center">{{ $page->h1 }}</h1>
        </div>
        <article class="panel-body">{!! $page->body !!}</article>
    @stop
@endif