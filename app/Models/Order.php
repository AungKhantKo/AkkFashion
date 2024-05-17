<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use App\Models\User;

class Order extends Model
{
    use HasFactory;
    use softDeletes;
    protected $table ="orders";
    protected $fillable = [
        'vocherNo',
        'user_id',
        'item_id',
        'quantity',
        'payment_id',
        'paymentSlip',
        'status'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function payment(){
        return $this->belongsTo(Payment::class);
    }

    public function item(){
        return $this->belongsTo(Item::class);
    }
}
