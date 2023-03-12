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

}
