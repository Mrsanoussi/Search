<?php

namespace App;


use Laravel\Scout\Searchable;
use Laravel\framework\src\Illuminate\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use App\Category;


class Sportschool extends Model
{

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    use Searchable;

    protected $table = 'sportschools';

    protected $primaryKey = 'id';

    
}
