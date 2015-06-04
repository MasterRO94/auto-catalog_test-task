@extends('app')

@if(isset($page))
    @section('meta_keywords', $page->keywords)
    @section('meta_description', $page->description)
    @section('head_title', $page->title)
@endif

@section('content')
<section class="content">
    <h1>{{ $page->h1 }}</h1>
    <article>{!! $page->body !!}</article>
</section>
@stop