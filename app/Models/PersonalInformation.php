<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class PersonalInformation extends Model
{
    use HasFactory;

    protected $casts = [
        'start_date' => "datetime",
        'end_date' => "datetime",

    ];

    protected $appends = ['personal_information_url'];

    public function getPersonalInformationUrlAttribute()
    {
        return Storage::url('public/personal_information/photos' . $this->photo);
    }

    public function profession()
    {
        return $this->belongsTo(Profession::class, 'profession_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function myFaculty(): BelongsTo
    {
        return $this->belongsTo(Faculty::class, 'faculty', 'id');
    }


}
