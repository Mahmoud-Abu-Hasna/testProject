<?php
/**
 * Created by PhpStorm.
 * User: Mahmoud
 * Date: 4/10/2019
 * Time: 11:42 AM
 */

namespace App\Http\Filters;


use Illuminate\Database\Eloquent\Builder;


class PostFilter extends QueryFilter
{


    /**
     * @param string $title
     */
    public function title(string $title)
    {
        $words = array_filter(explode(' ', $title));

        $this->builder->where(function (Builder $query) use ($words) {
            foreach ($words as $word) {
                $query->where('title', 'like', "%$word%");
            }
        });
    }
}