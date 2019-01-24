<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    // Table Name
    protected $table = 'wallets';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}
