<?php

namespace App\Controllers\Admin;

use CodeIgniter\RESTful\ResourceController;
use App\Models\GrupoModel;

class GrupoController extends ResourceController
{
    
    private $grupo;

    public function __construct()
    {
        helper(['form', 'url', 'session']);
        $this->session = \Config\Services::session();
        $this->grupo = new GrupoModel();
    }


    public function index()
    {

        $data = [
            'grupos'    => $this->grupo->orderBy('id', 'ASC')->findAll()
        ];

        return view('admin/grupos/index', $data);
    }

    

    public function show($id = null)
    {
        //
    }

    

    public function new()
    {
        $data = [
            'title' => 'Grupo'
        ];
        return view('admin/grupos/new', $data);
    }

   

    public function create()
    {
        //
    }

    


    public function edit($id = null)
    {
        //
    }

    


    public function update($id = null)
    {
        //
    }

    


    public function delete($id = null)
    {
        //
    }
}
