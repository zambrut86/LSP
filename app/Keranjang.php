<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Item;

class Keranjang extends Model
{
    protected $guarded = [];

    public function item(){
        return $this->belongsTo(Item::class);
    }
}
