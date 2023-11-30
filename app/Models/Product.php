<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded;

    protected $table = 'product';

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function transaksi() {
        return $this->hasMany(Transaction::class, 'product_id');
    }
}
