<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Http\Requests\Painel\UserFormRequest;

class UserController extends Controller
{
    private $model;
    private $totalPage = 100;
    private $request;

    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function index(){

        $title = "Gestão de Usuários";

        $user = $this->model->paginate($this->totalPage);

        return view('Painel.Usuarios.index', compact('title', 'user'));

    }

    public function create(){

        $user = $this->model->paginate($this->totalPage);

        return view('Painel.Usuarios.create', compact('user'));
    }

    public function store(UserFormRequest $request){

        $data = $request->all();

        //Criptografa a senha
        $data['password'] = bcrypt($data['password']);

        $insert = $this->model->create($data);

        if ($insert)
            return redirect()
                            ->route('user.index')
                            ->with(['sucess' => 'CADASTRO REALIZADO COM SUCESSO.']);
        else
            return redirect()
                            ->route('user.index')
                            ->withErrors(['errors' => 'Falhar ao cadastrar...'])
                            ->withInput();


    }

    public function show($id){

        $user = $this->model->where('id', $id)->first();

        if(!$user)
            return redirect()->back();
        
        return view('Painel.Usuarios.show', compact('user'));


        }

        public function edit($id){

            $user = $this->model->find($id);
    
            return view('Painel.Usuarios.edit', compact('user'));
    
    
        }

        public function update(UserFormRequest $request, $id){

            $data = $request->all();

             //Criptografa a senha
            $data['password'] = bcrypt($data['password']);
    
            $user = $this->model->find($id);
    
            $update = $user->update($data);
    
                if($update)
                    return redirect()
                            ->route('user.index')
                            ->with(['sucess' => 'Usuário Atualizado com sucesso']);
                else
                    return redirect()
                            ->route('user.index')
                            ->with(['errors' => 'Falhar ao atualizar']);
    
    
        }

        public function destroy($id){

            $user = $this->model->find($id);
    
            $delete = $user->delete();
    
                if( $delete ){
    
                    return redirect()
                                ->route('user.index')
                                ->with(['sucess' => 'Usuário deletado com sucesso']);
    
                }
                else{
                    return redirect()
                                ->route('user.index', ['id' => $id])
                                ->withErrors(['errors' => 'Falha ao deletar']);
    
                }
    
    
    
            }

        public function search(Request $request){

                $query = $request->input('query');
                
                $user = $this->model
                                ->where('name', 'LIKE', '%'.$query.'%')
                                ->orWhere('email', 'LIKE', '%'.$query.'%')->get();
                
                 return view('Painel.Usuarios.index', compact('user', 'query'));
        
                }
    
}
