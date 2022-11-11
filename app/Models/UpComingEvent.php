<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class UpComingEvent extends Model
{
    use HasFactory;

    protected $appends = ['up_coming_event_url'];

    public function getUpComingEventUrlAttribute(){
        return Storage::url('public/up_coming_event/photos' .$this->photo);
    }
}
