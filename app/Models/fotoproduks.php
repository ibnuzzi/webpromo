<?php

namespace App\Models;

use App\Models\produk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class fotoproduks extends Model
{
    use HasFactory;

    protected $guarded = [];
    /**
     * Get all of the produks for the fotoproduks
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function produks(): HasMany
    {
        return $this->hasMany(produk::class);
    }
}
