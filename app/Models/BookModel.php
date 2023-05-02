<?php

namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
    protected $table = "books";
    // protected $table = 'public."users"';
    // protected $table = 'public."books"';
    protected $allowedFields = ['title', 'author', 'isbn_no'];

    public function getData(){
        $db = db_connect();
        // echo '<pre>';
        // print_r($db);
        // exit;
        $sql = 'SELECT * FROM ' .$this->table.'';
        // echo '<pre>';
        // print_r($sql);
        // exit;
        $query = $db->query($sql)->getResultArray();
        // echo '<pre>';
        // print_r($query);
        // exit;
        return $query;
        // return $this->orderBy('id','ASC')->findAll();
    }

    public function getRow($id)
    {
        return $this->where('id',$id)->first();
    }
}
