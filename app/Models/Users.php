<?php

namespace App\Models;

use CodeIgniter\Model;

class Users extends Model
{
    protected $table = 'public."users"';
    protected $primarykey = 'id';
    protected $allowedFields = ['name', 'email'];
    protected $db;

    // public function getUsers()
    // {
    //     $db = \Config\Database::connect();

    //     $query = 'SELCET * FROM' . $this->$table . 'WHERE' . $this->$table . '."Archive" = 0';
    //     echo $query;

    //     // return $query->getResult();
    // }

    public function getData()
    {
        $db = \Config\Database::connect();
        $SQL = 'SELECT * FROM ' . $this->table;
        // echo $SQL;
        // exit;
        $query = $db->query($SQL)->getResultArray();
        return $query;
        echo "<pre>";
        print_r($query);
        exit;
    }
}
