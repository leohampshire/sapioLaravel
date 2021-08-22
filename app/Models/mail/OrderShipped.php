<?php

namespace App\Models\mail;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderShipped extends Model implements \Illuminate\Contracts\Mail\Mailable
{
    use HasFactory;
}
