<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    //protected $garded = ['id'];
    protected $fillable = ['name', 'developper_id', 'pegi', 'physical_release'];

    public function developper() {
        return $this->belongsTo(Developper::class);
    }

    public function platforms() {
        return $this->belongsToMany(Platform::class);
    }
}
