<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Opportunity extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = ['opportunities_url'];

    public function getopportunitiesUrlAttribute(){
        return Storage::url('public/opportunities/photos' .$this->photo);
    }

    public function getStatusColorAttribute()
    {
        $colors = [
            'Pending' => 'warning',
            'Approved' => 'success',
            'Rejected' => 'danger',
            'Draft' => 'secondary',
        ];
        return $colors[$this->status] ?? 'secondary';
    }

}
