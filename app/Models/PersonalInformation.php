<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class PersonalInformation extends Model
{
    use HasFactory;

    protected $appends = ['personal_information_url'];

    public function getPersonalInformationUrlAttribute()
    {
        return Storage::url('public/personal_information/photo' . $this->personal_information);
    }

    public function profession(){
        return $this->belongsTo(Profession::class,'profession_id');
    }
}
