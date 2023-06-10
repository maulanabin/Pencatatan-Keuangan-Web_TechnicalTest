<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;

    protected $table = 'incomes';

    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function report(){
        return $this->hasMany(Report::class, 'income_id');
    }
}
