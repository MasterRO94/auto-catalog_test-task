@extends('app')

@if($car)

    @section('head_title', $car->options->model->mark->title . ' ' . $car->options->model->title . ' ' . $car->options->title)

    @section('content')
        <div class="panel-heading">
            <h1 class="text-center">{{ $car->options->model->mark->title . ' ' . $car->options->model->title . ' ' . $car->options->title }}</h1>
        </div>

        <div class="col-md-12 panel-body">
            <figure class="pull-left thumbnail">
                <img src="{{ asset('/uploads/cars') .'/'. $car->image  }}" alt=""/>
            </figure>
            <article class="description">{!! $car->description !!}</article>
        </div>

    @stop

@else

    @section('head_title', 'Автомобиль отсутствует')

    @section('content')
        <div class="panel-heading">
            <h1 class="text-center">Автомобиль отсутствует в данной комплектации</h1>
        </div>
    @stop

@endif