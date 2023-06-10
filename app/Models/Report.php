<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $table = "reports";

    protected $guarded = [];

    public function income(){
        return $this->belongsTo(Income::class);
    }

    public function pengeluaran(){
        return $this->belongsTo(Expense::class);
    }
}
