<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Item;

class menu extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    
    public function Items()
    {
        return $this->hasMany(Item::class);
    }

}
