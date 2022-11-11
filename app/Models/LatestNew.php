<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class LatestNew extends Model
{
    use HasFactory;

    protected $appends = ['latest_news_url'];

    public function getLatestNewsUrlAttribute(){
        return Storage::url('public/latest_news/photos' .$this->photo);
    }
}
