<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model {

    protected $fillable = ['title'];


    public function mark()
    {
        return $this->hasOne('App\CarMark');
    }


    public function model()
    {
        return $this->hasOne('App\CarModel');
    }

    public function options()
    {
        return $this->hasOne('App\CarOptions');
    }

}
