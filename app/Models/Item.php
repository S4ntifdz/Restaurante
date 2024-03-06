<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price', 'menu_id'];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
    
    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
