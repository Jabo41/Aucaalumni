<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Program extends Model
{
    use HasFactory;

    protected $appends = ['programs_url'];

    public function getProgramsUrlAttribute(){
        return Storage::url('public/programs/photos' .$this->photo);
    }
}
