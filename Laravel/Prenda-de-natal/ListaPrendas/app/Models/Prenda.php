<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prenda extends Model
{
    use HasFactory;

    protected $fillable = ['namePrenda', 'valor_prev', 'userId', 'valorGasto'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getDiferencaValorAttribute()
    {
        return $this->valor_prev - $this->valorGasto;
    }
}
