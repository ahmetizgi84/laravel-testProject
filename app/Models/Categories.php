<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $fillable = [
        "categoryName",
        "status",
        "created_at",
        "updated_at"
    ];

    public function getProducts(){
        return $this->hasMany('App\Models\Products', 'productCategory');
    }
}


/**
 * One To Many Relation
 * Kategoriler ve Ürünler tablosu olsun. Kategoriler tablosu aşağıdaki sütunlardan oluşuyor.
 * id - categoryName - status
 * Ürünler tablosu ise şu sütunlardan oluşuyor.
 * id - productName - productDetail - productPrice
 *
 * Her bir kategori için birden fazla ürün olabilir. Örneğin Elektronik kategorisine ait hiç ürün olmayacağı gibi
 * tek bir ürün olabilir veya birden fazla ürün de olabilir. Bu ilişki kategoriler tablosundan kurulacağı için, bu işlemi
 * kategoriler modelin de (Categories.php) yapmak daha uygun olacaktır.
 *
 */
