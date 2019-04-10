<?php
/**
 * Created by PhpStorm.
 * User: Mahmoud
 * Date: 4/10/2019
 * Time: 11:45 AM
 */
namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

trait Filterable
{
    /**
     * @param Builder $builder
     * @param QueryFilter $filter
     */
    public function scopeFilter(Builder $builder, QueryFilter $filter)
    {
        $filter->apply($builder);
    }
}