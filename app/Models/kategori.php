<?php

namespace App\Models;

use App\Models\produk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class kategori extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = ['kategori'];
    public $timestamps = false;
    public $checked = false;
    /**
     * Get all of the comments for the kategori
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function produks()
    {
        return $this->hasMany(produk::class, 'kategori', 'id');
    }
}
