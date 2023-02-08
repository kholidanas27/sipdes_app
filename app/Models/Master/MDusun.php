<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MDusun extends Model
{
    use HasFactory;

    public $timestamps = true;
    
    protected $guarded = [];
    protected $table = 'm_dusun';
}
