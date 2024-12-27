<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Database\Migrations\MigrationBouketMounichan;

class FormModel extends Model
{
    protected $table = 'tb_bouketmounichan';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $useSoftDeletes = false;
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $allowedFields = ['name', 'email', 'phone', 'address', 'ukuran', 'jenis', 'information'];
}
