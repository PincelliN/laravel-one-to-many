<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'slug',
        'subject',
        'start_date',
        'end_date',
        'post',
        'collaborators',
        'description',

    ];
}