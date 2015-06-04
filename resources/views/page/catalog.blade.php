@extends('app')

@if(isset($page))
    @section('meta_keywords', $page->keywords)
    @section('meta_description', $page->description)
    @section('head_title', $page->title)
@else
    @section('head_title', 'Каталог')
@endif