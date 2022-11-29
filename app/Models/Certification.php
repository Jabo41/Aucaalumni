<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Certification extends Model
{
    use HasFactory;

    protected $appends = ['certificate_url'];

    public function getCertificateUrlAttribute(){
        return Storage::url('public/certificate/photos' .$this->image);
    }
}
