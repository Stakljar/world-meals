<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IngredientTranslation extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ["title"];

    public function language() 
    {
        return $this->belongsTo(Language::class, "locale", "locale");
    }
}
