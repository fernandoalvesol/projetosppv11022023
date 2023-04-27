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
    
    private $model;
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
    public function show($id){

        $provedor = $this->model->where('id', $id)->first();

        if(!$provedor)
            return redirect()->back();
        
        return view('Painel.Provedores.show', compact('provedor'));


        }
        
    public function edit($id){

        $provedor = $this->model->find($id);

        return view('Painel.Provedores.edit', compact('provedor'));


    }

    public function update(ProvedorFormRequest $request, $id){

        $data = $request->all();

        $provedor = $this->model->find($id);

        $update = $provedor->update($data);

            if($update)
                return redirect()
                        ->route('provedor.index')
                        ->with(['sucess' => 'Provedor Atualizado com sucesso']);
            else
                return redirect()
                        ->route('provedor.index')
                        ->with(['errors' => 'Falhar ao atualizar']);


    }
    
    public function destroy($id){

        $provedor = $this->model->find($id);

        $delete = $provedor->delete();

            if( $delete ){

                return redirect()
                            ->route('provedor.index')
                            ->with(['sucess' => 'Provedor deletado com sucesso']);

            }
            else{
                return redirect()
                            ->route('provedor.index', ['id' => $id])
                            ->withErrors(['errors' => 'Falha ao deletar']);

            }



        }

    
    public function search(Request $request){

        $query = $request->input('query');
        
        $provedor = $this->model
                        ->where('razaosocial', 'LIKE', '%'.$query.'%')
                        ->orWhere('cnpj', 'LIKE', '%'.$query.'%')->get();
        
         return view('Painel.Provedores.index', compact('provedor', 'query'));

        }
}
