<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model {

    protected $fillable = ['image', 'description', 'enable'];


   /* public function mark()
    {
        return $this->hasOne('App\CarMark');
    }


    public function model()
    {
        return $this->hasOne('App\CarModel');
    }*/


    public function options()
    {
        return $this->belongsTo('App\CarOptions', 'car_options_id');
    }

}
