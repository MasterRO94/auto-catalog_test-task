@extends('app')

@if(isset($page) && $page)
    @section('meta_keywords', $page->keywords)
    @section('meta_description', $page->description)
    @section('head_title', $page->title)


    @section('content')
        <div class="panel-heading">
            <h1 class="text-center">{{ $page->h1 }}</h1>
        </div>

        <div class="col-md-12 panel-body">

            {!! Form::open(['id'=>'catalog_form', 'class' => '']) !!}

            @include('form.select', ['class' => 'car-marks', 'name' => 'car_mark', 'label' => 'Марка авто: ', 'values' => $marks, 'selected' => isset($mark) ? $mark->id : null  ])

            @if(isset($mark))
                @include('form.select', ['class' => 'car-models', 'name' => 'car_model', 'label' => 'Модель авто: ', 'values' => $models, 'selected' => isset($model) ? $model->id : null  ])

                @if(isset($model))
                    @include('form.select', ['class' => 'car-options', 'name' => 'car_options', 'label' => 'Комплектация авто: ', 'values' => $options, 'selected' => null  ])
                @endif
            @endif

                {!! Form::close() !!}


            @if($page->body)
                <article class="col-md-12 panel-body">{!! $page->body !!}</article>
            @endif

        </div>


    @stop

@endif
