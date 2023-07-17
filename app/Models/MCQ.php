<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Option;

class MCQ extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function options(){
        return $this->hasone(Option::class,'question_id');
    }
}
