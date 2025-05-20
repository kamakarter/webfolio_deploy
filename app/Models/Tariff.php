<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tariff extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'type_payment',
        'description',
        'pluses',
        'duration',
    ];

    public function subscriptions(){
        return $this->hasMany(Subscription::class);
    }

    
}
