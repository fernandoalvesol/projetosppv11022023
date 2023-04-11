<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\Provedores;


class ProvedoresController extends Controller
{
    
    protected $model;
    private $totalPage = 100;
    private $request;
    

    public function __construct(Provedores $provedor){

       $this->model = $provedor;

    }

    public function index(){

        $title = "Cadastro de Provedores";

        return view('Painel.Provedores.index', compact('title'));

        
       
        }
        public function create(){

        $title = "Lista de Provedores";
                
        $provedor = $this->model->paginate($this->totalPage);

       return view('Painel.Provedores.create', compact('provedor', 'title'));

        }

        public function store(){


        }
        public function show(){

        }
        public function destroy(){

        }

        public function search(){

        }
}
