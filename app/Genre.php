<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Genre extends Model
{
    public function games() {
        return $this->belongsToMany(Game::class);
    }

    protected $fillable = [
        'name'
    ];

    protected $hidden = [
        'pivot'
    ];

    use softDeletes;
}
