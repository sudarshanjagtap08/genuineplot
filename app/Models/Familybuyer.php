<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Familybuyer extends Model
{
    protected $fillable = [
        'buyer_id ', 
        'familymembername',
        'familymembernumber',
        'familymemberemail',
        'familymemberfblink',
    ];

    use HasFactory;
}
