<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CostumerData extends Model
{
    use HasFactory;

    protected $table = 'costumer_data';

    protected $fillable = [
        'name',
        'email',
        'phone',
    ];
}
