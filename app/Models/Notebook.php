<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notebook extends Model
{
    use HasFactory;

    protected $fillable = ['surname', 'name', 'patronymic', 'company', 'phone', 'email', 'birth_date', 'photo'];
    protected $guarded = ['id', 'updated_at'];
}
