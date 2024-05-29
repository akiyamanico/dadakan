<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dadakan extends Model
{
    use HasFactory;

    protected $table='quiz_dadakan';

    protected $fillable=['nama', 'email', 'telpon', 'alamat', 'pendidikan_terakhir', 'foto_user'];
}
