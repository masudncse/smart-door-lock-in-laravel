<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    const STATUS_ACTIVATED = 1;
    const STATUS_DEACTIVATED = 2;
}
