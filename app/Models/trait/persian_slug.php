<?php namespace App\Models\trait;

use Cviebrock\EloquentSluggable\Sluggable;

trait persian_slug{
    use Sluggable;
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
