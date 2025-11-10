<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;

    protected $table = 'contact_inquiries'; // ✅ Table name (same as DB)

    protected $fillable = [
        'fullname',
        'email',
        'whatsapp',
        'college_name',
        'address',
        'program_type',
        'duration',
        'course',
        'education',
        'preferred_location',
        'batchdays',
        'batchtiming',
        'course_fee',
        'message',
    ];
}
