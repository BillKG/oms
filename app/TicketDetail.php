<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketDetail extends Model
{
    // Table Name
    protected $table = 'ticket_details';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}
