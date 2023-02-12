<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phonebook extends Model
{
    protected $table = 'phonebook';
    protected $primaryKey = 'id';
    protected $fillable = ['lastName','firstName','middleName', 'address', 'email','contactNumber'];
}
