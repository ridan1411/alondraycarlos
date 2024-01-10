<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeddingInformation extends Model
{
    use HasFactory;
    protected $table = 'wedding_information';


    public function getEarliestTimeAttribute() {
        $timeChurch = Carbon::parse($this->time_church);
        $timeParty = Carbon::parse($this->time_party);
        return $timeChurch->lessThan($timeParty) ? $timeChurch : $timeParty;
    }

}
