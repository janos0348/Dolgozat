<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'location ',
        'org_id',
        
    ];
    protected  $primaryKey = 'event_id';


}
