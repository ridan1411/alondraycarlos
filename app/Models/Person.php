<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    protected $table = 'persons';

    public function vip()
    {
        return $this->belongsTo(Vip::class, 'vip_id', 'id');
    }

}
