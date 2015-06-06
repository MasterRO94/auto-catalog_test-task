<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class CarMark extends Model {

	protected $fillable = ['title'];


    public function models()
    {
        return $this->hasMany('App\CarModel');
    }

}
