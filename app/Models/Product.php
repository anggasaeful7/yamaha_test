<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'harga',
        'tipe',
        'thumbnail',
        'gambar',
        'gambar2',
        'gambar3',
        'tipe_mesin',
        'jumlah_silinder',
        'diameter',
        'perbandingan_kompresi',
        'daya_maximum',
        'torsi_maximum',
        'starter',
        'sistem_pelumasan',
        'kapasitas_oli_mesin',
        'sistem_bahan_bakar',
        'volume_silinder',
        'tipe_kopling',
        'pola_transmisi',

    ];

    protected static function boot()
    {
        parent::boot();

        static::updating(function ($model) {
            if ($model->isDirty('thumbnail') && $model->getOriginal('thumbnail') !== null) {
                Storage::disk('public')->delete($model->getOriginal('thumbnail'));
            }
        });
    }
}
