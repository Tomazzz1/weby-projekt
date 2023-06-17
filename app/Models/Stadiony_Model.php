<?php

    namespace App\Models;
    use CodeIgniter\Model;

    class Stadiony_Model extends Model {
        protected $table = "stadion";
        protected $primaryKey = "idstadion";
        
        protected $returnType = "object";

        protected $autoIncrement = "true";
        protected $allowedFields = ['nazev_stadionu', 'kapacita', 'rok_otevreni','adresa'];
        protected $useSoftDeletes = "true";
        protected $deletedField = "deleted_at";
        protected $dateFormat = "int";
        protected $useTimeStamps = "";
        protected $createdField = "created_at";
        protected $updatedField = "updated_at";
    }  