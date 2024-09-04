<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function thanas(){
        return $this->hasMany(Thana::class, 'district_id');
    }

    public function mentor(){
        return $this->hasMany(User::class, 'district_id');
    }
}
