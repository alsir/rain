<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_en',
        'name_ar',
        'quantity',
        'description_en',
        'description_ar',
        'photo',
        'is_available',
        'discount'
    ];
    public function manfacturer()
    {
        return $this->hasMany(manfacturer::class , 'id','manfacturer_id');
    }
    public function type()
    {
        return $this->hasMany(type::class , 'id','type_id');
    }
    public function categroy()
    {
        return $this->belongsTo(categroy::class , 'id','categroy_id');
    }
    public function orderitem()
    {
        return $this->belongsToMany(Orderitem::class);
    }
}
