<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    protected $table = 'expenses';

    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function report(){
        return $this->hasMany(Report::class, 'expense_id');
    }
}
