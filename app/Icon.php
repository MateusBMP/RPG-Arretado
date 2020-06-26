<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
    /**
     * Get the users for the icon.
     */
    public function users()
    {
        return $this->hasMany('App\User');
    }
}
