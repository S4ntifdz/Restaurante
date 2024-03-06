<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $fillable = ['table_id', 'item_id', 'quantity', 'total'];
    public function table()
    {
        return $this->belongsTo(Table::class);
    }
    public function getItemIds()
    {
        return $this->load('items')->items->pluck('id')->toArray();
    }
    public function items()
    {
        return $this->belongsToMany(Item::class)->withPivot('item_id', 'quantity');
    }
    public function getItemCount()
    {
        return $this->items()->count();
    }
}
