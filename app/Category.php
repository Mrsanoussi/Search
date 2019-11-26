<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Sportschool;

class Category extends Model
{
    public function sportschools()
    {
        return $this->belongsToMany(Sportschool::class);
    }
}
