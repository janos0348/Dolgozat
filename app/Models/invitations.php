<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invitations extends Model
{
    use HasFactory;

    protected $fillable = [
        'appeared',
        'event_id ',
        'user_id',
    ];
    protected  $primaryKey = 'invitation_id';

}
