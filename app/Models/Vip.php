<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vip extends Model
{
    use HasFactory;
    protected $table = 'vip';

    public function persons()
    {
        return $this->hasMany(Person::class, 'vip_id', 'id');
    }
}
