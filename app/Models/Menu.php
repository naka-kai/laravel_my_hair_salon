<?php

namespace App\Models;

use GrahamCampbell\ResultType\Result;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu_title_id',
        'title',
        'price',
    ];

    public function reserves()
    {
        return $this->hasOne(Reserve::class);
    }

    public function menu_titles()
    {
        return $this->belongsTo(MenuTitle::class);
    }
}
