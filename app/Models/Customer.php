<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'email', 'email_verified_at', 'password', 'remember_token'
    ];
    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id');
    }
}