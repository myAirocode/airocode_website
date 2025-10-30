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
        'mobile',
        'email',
        'program_type',
        'duration',
        'course',
        'education',
        'batchdays',
        'batchtiming',
        'message',
    ];
}
