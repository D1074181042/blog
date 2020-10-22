<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pokemons extends Controller
{
    public function index()
    {
        return view('pokemons.index');
    }

    public function create()
    {
        return view('pokemons.create');
    }

    public function show($id)
    {
        if ($id ==0)
        {
            $pokemons_name = "name測試";
            $pokemons_test = "test屬性";
            $pokemons_test2 = "test種族";
        }
        else
        {
            $pokemons_name = "未定";
            $pokemons_test = "未定";
            $pokemons_test2 = "未定";
        }
        return view('pokemons.show') -> with(["name"=>$pokemons_name,
            "test"=>$pokemons_test,"test2"=>$pokemons_test2]);
    }

    public function edit($id)
    {
        if ($id ==0)
        {
            $pokemons_name = "name測試";
            $pokemons_test = "test屬性";
            $pokemons_test2 = "test種族";
        }
        else
        {
            $pokemons_name = "未定";
            $pokemons_test = "未定";
            $pokemons_test2 = "未定";
        }

        $data=compact('pokemons_name','pokemons_test','pokemons_test2');

        //$data=[];
        //if ($id ==0)
        //{
        //$data['pokemons_name'] = "name測試";
        //$data['pokemons_test'] = "test屬性";
        //$data['pokemons_test2'] = "test種族";
        //}
        //else
        //{
        //$data['pokemons_name'] = "未定";
        //$data['pokemons_test'] = "未定";
        //$data['pokemons_test2'] = "未定";
        //}

        return view('pokemons.edit',$data);
    }
}
