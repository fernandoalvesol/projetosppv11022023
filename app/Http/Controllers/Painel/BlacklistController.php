<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blacklist;
use App\Http\Requests\Painel\BlacklistsFormRequest;

class BlacklistController extends Controller
{

    private $blacklist, $totalPage = 100;
    private $request;
    

    public function __construct(Blacklist $blacklist, Request $request){

        $this->blacklist = $blacklist;
        $this->requet = $request;

    }

    public function index(){

        $title = "Negativação";

                
        $blacklist = $this->blacklist->paginate($this->totalPage);

       return view('Painel.Blacklist.index', compact('blacklist', 'title'));
       
        }

    public function store(BlacklistsFormRequest $request){
        
        $dataBlacklist = $request->all();

        //$dataBlacklist = $request->validated();

        $dataBlacklist['users_id'] = auth()->user()->id;


        $this->blacklist->create($dataBlacklist);

        return redirect()->route('blacklist.index');

        
    }

}
