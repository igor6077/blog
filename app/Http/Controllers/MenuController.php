<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Http\Requests\ValidateMenu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $models = Menu::paginate(2);
        return view('menu/index', ['models'=>$models]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Menu $menu)
    {
        return view('/menu/create', ['model' => $menu]);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidateMenu $request)
    {
           $model = new Menu;
       if ($this->save($request, $model)) {
            return response()->redirectToRoute('menus.index');
        }

        return view('menu/create', ['model' => $model]);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
       return view('/menu/show', ['model' => $menu]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        return view('/menu/edit', ['model' => $menu]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(ValidateMenu $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        //
    }

private function save(Request $request, Menu $model):bool
{

       $data=$request ->except(['_token']); //poluchaem dannie s zaprosa
       $model->fill($data); //zapolnenie modeli dannih s formi
       
      //esli netu parent_id , ustanovit' yjkm bkb izmenit' tablicu
       if ($model -> parent_id===null) { 
        $model->parent_id=0;
       }

       return $model->save();
}

}
