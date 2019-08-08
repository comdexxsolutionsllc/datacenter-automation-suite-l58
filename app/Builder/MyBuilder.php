<?php

namespace App\Builder;

use Illuminate\Database\Eloquent\Builder;

class MyBuilder extends Builder
{

    public function findBySlug($slug, $columns = ['*'])
    {
        return $this->where('slug', $slug)->first($columns);
    }
}
