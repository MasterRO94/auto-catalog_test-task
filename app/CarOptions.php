<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class CarOptions extends Model {



    protected $table = 'car_options';


    protected $fillable = ['title'];


    public function model()
    {
        return $this->belongsTo('App\CarModel', 'car_model_id');
    }

}
