<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thesis extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }
}
