<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tblBayar extends Model
{
    use HasFactory;

    protected $guarded =[];

    protected $primaryKey = 'nik';
    public $incrementing = false;
    public $timestamps = false;
}
