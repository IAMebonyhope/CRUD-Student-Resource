<?php

namespace App;


class Student extends Model
{
    protected $fillable = [
        'fullName', 'email', 'phoneNo', 'dept', 'matricNo','password'
    ];
}
