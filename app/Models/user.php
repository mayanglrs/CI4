<?php

namespace App\Models;

use CodeIgniter\Model;

class user extends Model
{
    protected $table      = 'user';
    protected $primaryKey = 'id_karyawan';
    protected $returnType     = 'object';
    protected $allowedFields = [
        'nama_user', 
        'password',
        'email',
        'ttl_user',
        'alamat-user',
        'telp_user',
        'id_role'
    ];
}

