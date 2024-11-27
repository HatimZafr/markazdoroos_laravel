<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transactions extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'id_paket',
        'amount',
        'transaction_date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function paket()
    {
        return $this->belongsTo(Paket::class, 'id_paket');
    }
}
