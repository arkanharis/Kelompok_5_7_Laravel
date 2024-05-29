<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;

    protected $table = 'tblleaves';

    protected $fillable = [
        'LeaveType',
        'ToDate',
        'FromDate',
        'Description',
        'PostingDate',
        'AdminRemark',
        'AdminRemarkDate',
        'Status',
        'IsRead',
        'empid',
    ];

    public $timestamps = false;
}

