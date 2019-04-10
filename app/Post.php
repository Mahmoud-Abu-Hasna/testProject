<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Filters\Filterable;

class Post extends Model
{
    //
    use Filterable;

    protected $fillable=[
      'title','body'
    ];
}
