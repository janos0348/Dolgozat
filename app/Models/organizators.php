<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class organizators extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description ',
    ];
    protected  $primaryKey = 'org_id';

}
