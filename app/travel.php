<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class travel extends Model
{
    protected $fillable = ['tempat wisata','kuliner','oleh oleh','artikel','panduan','kategori_id'];
    public $timesstamps = true;

    public function kategori()
    {
        return $this->belongto('App\kategori','kategori_id')
    }
}


