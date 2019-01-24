<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WalletDetail extends Model
{
    // Table Name
    protected $table = 'wallet_details';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}
