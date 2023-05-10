<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\Blacklist;
use App\Http\Requests\Painel\BlacklistsFormRequest;

class BlacklistController extends Controller
{

    protected $model;
    private $totalPage = 100;
    private $request;
    

    public function __construct(Blacklist $blacklist){

       $this->model = $blacklist;

    }

    public function index(){

        $title = "Negativação";

                
        $blacklist = $this->model->paginate($this->totalPage);

       return view('Painel.Blacklist.index', compact('blacklist', 'title'));
       
        }

    public function store(BlacklistsFormRequest $request){

        $data = $request->all();

        $data['users_id'] = auth()->user()->id;

        $insert = $this->model->create($data);

        if ($insert)
            return redirect()
                            ->route('blacklist.index')
                            ->with(['sucess' => 'NEGATIVAÇÃO REALIZADA COM SUCESSO.']);
        else
            return redirect()
                            ->route('blacklist.index')
                            ->withErrors(['errors' => 'Falhar ao cadastrar...'])
                            ->withInput();
        
    }

    public function lista(Request $request){

        $title = "Exibir Negativados";

        $blacklist = $this->model->paginate($this->totalPage);
       
        return view('Painel.Blacklist.lista', compact('blacklist', 'title'));

    }

    public function black(Request $request){

        $title = "Exibir Negativados";

        $blacklist = $this->model->paginate($this->totalPage);
       
        return view('Painel.Blacklist.black', compact('blacklist', 'title'));

    }

    public function edit($id){

        $blacklist = $this->model->find($id);

        return view('Painel.Blacklist.edit', compact('blacklist'));


    }

    public function update(BlacklistsFormRequest $request, $id){

        $data = $request->all();

        $blacklist = $this->model->find($id);

        $update = $blacklist->update($data);

            if($update)
                return redirect()
                        ->route('blacklist.black')
                        ->with(['sucess' => 'Publicaação Atualizado com sucesso']);
            else
                return redirect()
                        ->route('blacklist.black')
                        ->with(['errors' => 'Falhar ao atualizar']);


    }

    public function show($id){

        $blacklist = $this->model->where('id', $id)->first();

        if(!$blacklist)
            return redirect()->back();
        
        return view('Painel.Blacklist.show', compact('blacklist'));


    }
    
    public function search(Request $request){

        $query = $request->input('query');
        
        $blacklist = $this->model
                        ->where('razaosocial', 'LIKE', '%'.$query.'%')
                        ->orWhere('cnpjcpf', 'LIKE', '%'.$query.'%')->get();
        
         return view('Painel.Blacklist.lista', compact('blacklist', 'query'));

        }

}
