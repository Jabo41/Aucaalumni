<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Slider extends Model
{
    use HasFactory;

    protected $appends = ['sliders_url'];

    public function getSlidersUrlAttribute(){
        return Storage::url('public/sliders/photos' .$this->photo);
    }
}
