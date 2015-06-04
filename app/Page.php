<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model {

    protected $fillable = ['name', 'title', 'keywords', 'description', 'h1', 'body' ];


    public function scopeFindByName($query, $name)
    {
        return $query->where('name', '=', $name);
    }


}
