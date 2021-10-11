<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uyeler extends Model
{
    use HasFactory;

    /**
     * Normalde model isimleri tablo ismiyle aynı verilir.
     * Bu sayede ilgili model tabloya direk bağlanmış olur.
     * ancak bazı durumlarda model ve tablo isimleri birbirinden farklı ise
     * söz konusu modeli tabloya aşağıdaki gibi bağlarız.
     */

    protected $table = "users";

    // timetstamp'in kullanılmasını istemezsek
    public $timestamps = false;

    // tablodaki id isimleri id olarak verilir
    // id haricinde farklı şekilde belirtilmişse yine burada belirtilmelidir.
    public $primaryKey = 'uye_id';


    /**
     * php artisan make:model Comment -m
     * komutu hem model oluşturuyor hem de modele ait
     * migration da otomatik olarak oluşur
     */

    /**
     * İlişkisel veritabanı işlemlerindeki tablolar arası ilişkiler
     * modeller aracılığı ile yapılıyor. Bu ilişkiler model dosyasında yapılıyor.
     * İlişkiler bilindiği üzere birebir birden çoğa şeklinde
     */

        // Birebir ilişki için örnek
    /**
     * Senaryo:
     * Kullanıcıların (users)  ve bu kullanıcıların yorumlarını (comments) içeren iki farklı tablo olsun
     * İçinde bulunduğumuz model de Comment Modeli olsun. Şu halde comments tablosunda kullanıcıya ait bir id
     * sütunu bulunacaktır. Comment tablosundaki kullanıcı id'sinden yola çıkarak kullanıcılar tablosundaki ilgili
     * kullanıcıya ait bilgileri çekmek istediğimizi varsayalım. Buna göre;
     */

    public function getUser(){
        // hasOne birebir ilişki kurulacağını söylüyor
        // Comment tablosunda user_id sütununda bulunan kullanıcı id'lerini
        // App\Models\Uyeler tablosunda uye_id içersinde ara.
                                    // Hangi tabloda o tablonun hangi sütununda         ne          arayacaksın?
        return $this->hasOne('App\Models\Uyeler', 'uye_id', 'user_id');
    }

    public function getComments(){
        // hasMany birden çoğa ilişki kurulacağını söylüyor
        return $this->hasMany('App\Models\Comment', 'user_id');
    }

    /**
     * Kullanımı
     * $uye = Uyeler::find(123);
     * $uye->getComments
     */

}
