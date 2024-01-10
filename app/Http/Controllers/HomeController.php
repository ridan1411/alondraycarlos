<?php

namespace App\Http\Controllers;

use App\Models\Couples;
use App\Models\Gallery;
use App\Models\Image;
use App\Models\Person;
use App\Models\Vip;
use App\Models\WeddingInformation;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index ()
    {
        // Información general del evento
            $information = WeddingInformation::first();
            $eventDate = Carbon::parse($information->event_date);
            $format_date = $eventDate->locale('es')->isoFormat('D [de] MMMM [de] YYYY');
            $event_date = $eventDate->locale('es')->isoFormat('dddd, D [de] MMMM [de] YYYY');
            $earliestTime = $information->earliestTime;
            $time_church = Carbon::createFromFormat('H:i:s', $information->time_church)->format('h:i A');
            $time_party = Carbon::createFromFormat('H:i:s', $information->time_party)->format('h:i A');

        // Información de los novios
            $couples = Couples::first();

        //Personas que nos acompañan
            $vip = Vip::all(); // categorias de persons
            $persons = Person::all();

        // Imagenes
            $images = Image::first();

        //Galería
            $gallery = Gallery::all();

        return view('wedding.index',[
            'information' => $information,
            'format_date' => $format_date,
            'time_church' => $time_church,
            'time_party' => $time_party,
            'event_date' => $event_date,
            'year' => $eventDate->year,
            'month' => $eventDate->month,
            'day' => $eventDate->day,
            'hours' => $earliestTime->hour,
            'minutes' => $earliestTime->minute,
            'seconds' => $earliestTime->second,
            'couples' => $couples,
            'images' => $images,
            'gallery' => $gallery,
            'vip' => $vip,
            'persons' => $persons
        ]);
    }
}
