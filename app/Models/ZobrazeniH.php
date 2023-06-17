<?php

    namespace App\Models;
    use CodeIgniter\Model;

    class ZobrazeniH extends Model {
        protected $table = "hraci_v_sezone";
        protected $primaryKey = "idHrace";
        protected $allowedFields = ['idHrace'];
        protected $returnType = "object";
        protected $useSoftDeletes = 'true';
    protected $deletedField = 'deleted_at';
    protected $dateFormat = 'int';
    protected $useTimeStamps = 'true';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    }