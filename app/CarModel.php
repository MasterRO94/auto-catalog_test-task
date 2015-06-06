<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model {

    protected $fillable = ['title'];


    public function mark()
    {
        return $this->belongsTo('App\CarMark', 'car_mark_id');
    }


    public function options()
    {
        return $this->hasMany('App\CarOptions');
    }

}
