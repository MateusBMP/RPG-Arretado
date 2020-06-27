<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
    /**
     * Get icon users.
     */
    public function users()
    {
        return $this->hasMany('App\User');
    }
}
