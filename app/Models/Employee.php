<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'tblemployees';

    protected $fillable = [
        'EmpId',
        'FirstName',
        'LastName',
        'EmailId',
        'Password',
        'Gender',
        'Dob',
        'Department',
        'Address',
        'City',
        'Country',
        'Phonenumber',
        'Status',
        'RegDate',
    ];

    public $timestamps = false;
}
