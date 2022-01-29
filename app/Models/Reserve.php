<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu_id',
        'person_id',
        'date_time',
    ];

    public function people()
    {
        return $this->belongsTo(Person::class);
    }

    public function menus()
    {
        return $this->belongsTo(Menu::class);
    }
}
