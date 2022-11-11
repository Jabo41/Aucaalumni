<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class SocialActivity extends Model
{
    use HasFactory;

    protected $appends = ['social_activities_url'];

    public function getSocialActivitiesUrlAttribute(){
        return Storage::url('public/social_activities/photos' .$this->photo);
    }
}
