<?php namespace App\Http\Controllers;

use App\Page;
use App\Car;
use App\CarMark;
use App\CarModel;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CarsController extends Controller {

    /**
     * Show catalog page
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('page.catalog')->with([
            'page' => count(Page::findByName('catalog')->get()) ? Page::findByName('catalog')->get()[0] : null,
            'marks' => ['0' => 'Выберите марку'] + CarMark::lists('title', 'id'),
        ]);
	}

    /**
     * Show catalog page with mark selected
     *
     * @param CarMark $mark
     * @return \Illuminate\View\View
     */
    public function mark(CarMark $mark)
    {
        return view('page.catalog')->with([
            'page' => count(Page::findByName('catalog')->get()) ? Page::findByName('catalog')->get()[0] : null,
            'marks' => ['0' => 'Выберите марку'] + CarMark::lists('title', 'id'),
            'mark' => $mark,
            'models' => ['0' => 'Выберите модель'] + $mark->models()->lists('title', 'id'),
        ]);
	}


    /**
     * Show catalog page with mark selected
     *
     * @param CarMark $mark
     * @param CarModel $model
     * @return \Illuminate\View\View
     */
    public function model(CarMark $mark, CarModel $model)
    {
        return view('page.catalog')->with([
            'page' => count(Page::findByName('catalog')->get()) ? Page::findByName('catalog')->get()[0] : null,
            'marks' => ['0' => 'Выберите марку'] + CarMark::lists('title', 'id'),
            'mark' => $mark,
            'models' => ['0' => 'Выберите модель'] + $mark->models()->lists('title', 'id'),
            'model' => $model,
            'options' => ['0' => 'Выберите комплектацию'] + $model->options()->lists('title', 'id'),
        ]);
	}


    /**
     * Get models for mark
     *
     * @param CarMark $mark
     * @return array
     */
    public function getModels(CarMark $mark)
    {
        return view('form.select')->with([
            'name' => 'car_model',
            'class' => 'car-models',
            'label' => 'Модель автомобиля: ',
            'values' => ['0' => 'Выберите модель'] + $mark->models()->lists('title', 'id'),
            'selected' => null
        ]);
    }

    /**
     * Get options for models
     *
     * @param CarModel $model
     * @return array
     */
    public function getOptions(CarModel $model)
    {
        return view('form.select')->with([
            'name' => 'car_options',
            'class' => 'car-options',
            'label' => 'Комплектация авто: ',
            'values' => ['0' => 'Выберите комплектацию'] + $model->options()->lists('title', 'id'),
            'selected' => null
        ]);
    }


    public function find(CarMark $mark, CarModel $model, $options)
    {

        $options = $model->options()->where('title', $options)->first();
        if($options) {
            $car = Car::where('car_options_id', $options->id)->where('enable', true)->first();
        }else{
            $car = null;
        }
        return view('page.car', compact('car'));
    }



}
