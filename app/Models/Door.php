<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Door extends Model
{
    use HasFactory;

    const STATUS_OPEN = 1;
    const STATUS_CLOSE = 2;

    public function device()
    {
        return $this->belongsTo(Device::class);
    }
}
