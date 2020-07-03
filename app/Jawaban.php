<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    protected $guarded = [];

    public function pertanyaan(){
        return $this->belongsTo(Pertanyaan::class);
    }
}
