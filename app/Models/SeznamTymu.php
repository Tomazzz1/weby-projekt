<?php

namespace App\Models;

use CodeIgniter\Model;

class SeznamTymu extends Model{
    protected $table = 'liga_tymy_has_liga_sezona';
    protected $primaryKey ='tymy_idtymy';
    protected $returnType ='object';
    protected $autoIncrement = 'true';
    protected $allowedFields = ['tymy_idtymy','sezona_idsezona','stadion_idstadion','idtymy','nazev','rok_zalozeni','mesto'];
    protected $useSoftDeletes = '';
    protected $deletedField = '';
    protected $dateFormat = 'int';
    protected $useTimeStamps = '';
    protected $createdField = '';
    protected $updatedField = '';
}