<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $guarded = [];

    public function Jawabans(){

        return $this->hasMany(Jawaban::class);
    }
}
