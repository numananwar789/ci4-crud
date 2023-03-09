<?php

namespace App\Controllers;

use App\Models\Users;

class UsersController extends BaseController
{
    public function index()
    {
        $usersmodel = new Users();
        $data['Users'] = $usersmodel->getData();

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        // exit;

        return view('UsersList', $data);
    }

    // public function getUsers()
    // {
    //     $usermodel = new Users();

    //     $data['users'] = $usermodel->getData();
    //     print_r($data);


    //     // // Load the custom model
    //     // $users = new Users();

    //     // // Use the get_users method to retrieve data 
    //     // $users = $users->get_users();

    //     // // Pass the data to the view
    //     // $data['users'] = $users;
    //     // echo '<pre>';
    //     // print_r($data);
    //     // exit;

    //     // return view('about', $data);
    // }
}
