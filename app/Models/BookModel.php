<?php

namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
    protected $table = "books";
    protected $allowedFields = ['title', 'author', 'isbn_no'];

    public function getData(){
       return $this->orderBy('id','ASC')->findAll();
    }

    public function getRow($id)
    {
        return $this->where('id',$id)->first();
    }
}
