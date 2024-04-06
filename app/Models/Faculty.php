<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Faculty extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    function courseassign()
    {
        return $this->hasMany(Assign_course::class, 'f_id', 'id');
    }
    function assigncourse()
    {
        return $this->hasMany(Assign_course::class, 'f_id', 'id');
    }
}
