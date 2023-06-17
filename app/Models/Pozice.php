<?php

    namespace App\Models;
    use CodeIgniter\Model;

    class Pozice extends Model {
        protected $table = "pozice";
        protected $primaryKey = "idpozice";

        protected $returnType = "object";
    }