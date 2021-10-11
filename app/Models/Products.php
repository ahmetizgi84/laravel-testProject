<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    /**
     * Model dosyasını kullanarak bir veri eklemek istediğimizde model dosyasına eklenmek istenen
     * sütun adlarının fillable olarak tanımlanması gerekir.
     */
    protected $fillable = [
        "productName",
        "productDetail",
        "productImageUrl",
        "productPrice",
        "productCategory",
        "created_at",
        "updated_at"
    ];

    protected $guarded = [];


    public function getCategory()
    {
        return $this->hasOne('App\Models\Categories', 'id', 'productCategory');
    }


}



/**
 * Model isminin tablo ismiyle aynı olması en ideal kullanım.
 */


/**
 * One to One Relation
 * Paylaşımlar ve kullanıcılar tablosu olsun ve paylaşım tablosunun aşağıdaki sütunlardan oluştuğunu varsayalım.
 * id - title - content - userId
 * Kullanıcılar tablosunun da aşağıdaki sütunlardan oluştuğunu varsayalım.
 * user_id - name - email - age - gender
 *
 * Her paylaşıma ait bir kullanıcı olduğundan, bir paylaşım sorguladığımızda bu paylaşıma ait kullanıcı bilgilerine de
 * ulaşacağımız anlamına gelir. İşte bu birebir ilişkidir. Bu ilişki paylaşımlar tablosu için kurulacağı için, bu işlemi
 * paylaşımlar modelin de (Post.php) yapmak daha uygun olacaktır.
 *
 * public function getUser(){
 * return $this->hasOne('App\Models\Kullanicilar', 'user_id', 'userId');  // $this === Post:: (Post -> paylaşımlar modelinin ismi)
 * }
 *
 * Kullanımı (Controller içinde)
 * public function index(){
 * $paylasim = Post::find(4);
 * }
 */

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
