<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'middle_name', 'last_name', 'second_last_name', 'phone', 'identification', 'email'];

    public function histories()
    {
        return $this->hasMany(History::class);
    }
}