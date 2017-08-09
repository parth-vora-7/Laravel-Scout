<?php

namespace App;

use Carbon\Carbon;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use Searchable;

    public function getPublishedAtAttribute($value)
    {
    	return Carbon::parse($value)->format('d-m-Y H:i:s');
    }
}
