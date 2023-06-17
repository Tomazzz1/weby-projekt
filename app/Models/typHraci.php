<?php

    namespace App\Models;
    use CodeIgniter\Model;

    class typHraci extends Model {
        protected $table = "hraci";
        protected $primaryKey = "idHraci";
        
        protected $returnType = "object";

        protected $autoIncrement = "true";
        protected $allowedFields = ['jmeno', 'prijmeni'];
        protected $useSoftDeletes = 'true';
    protected $deletedField = 'deleted_at';
    protected $dateFormat = 'int';
    protected $useTimeStamps = 'true';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    }  