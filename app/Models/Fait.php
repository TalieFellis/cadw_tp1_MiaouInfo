<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Fait extends Model
{
    use HasFactory;

    protected $table = 'faits';
    protected $fillable = ['fait'];

    // Accesseur pour limiter le texte aux 60 premiers caractères
    public function getCourtFaitAttribute() {
        return Str::limit($this->fait, 60);
    }
}
