<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\Provedores;
use App\Http\Requests\Painel\ProvedorFormRequest;


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

        $provedor = $this->model->paginate($this->totalPage);

        return view('Painel.Provedores.index', compact('title', 'provedor'));

        
       
        }
        public function create(){

        $title = "Lista de Provedores";
                
        $provedor = $this->model->paginate($this->totalPage);

       return view('Painel.Provedores.create', compact('provedor', 'title'));

        }

        public function store(ProvedorFormRequest $request){

        $data = $request->all();

        $insert = $this->model->create($data);

        if ($insert)
            return redirect()
                            ->route('provedor.index')
                            ->with(['sucess' => 'CADASTRO REALIZADO COM SUCESSO.']);
        else
            return redirect()
                            ->route('provedor.index')
                            ->withErrors(['errors' => 'Falhar ao cadastrar...'])
                            ->withInput();


        }
        public function show(){

        }
        public function destroy(){

        }

        public function search(){

        }
}
