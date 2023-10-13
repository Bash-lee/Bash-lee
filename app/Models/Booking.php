<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $primaryKey = 'booking_id';
    protected $table = 'booking';


    protected $fillable = [
        'firstname',
        'email',
        'phone',
        'arrival',
        'kids',
        'adults',
        'description'
    ];
}
