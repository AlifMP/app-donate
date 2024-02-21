<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
        'campaign_id',
        'donatur_id'
    ];
    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }
    public function donatur()
    {
        return $this->belongsTo(Donatur::class);
    }
}
