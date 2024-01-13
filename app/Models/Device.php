<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    const STATUS_ONLINE = 1;
    const STATUS_OFFLINE = 2;

    public function door()
    {
        return $this->hasOne(Door::class);
    }
}
