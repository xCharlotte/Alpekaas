<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Auth;
use App\Card;

class RetroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $card_options = ['Samenwerking', 'Communicatie', 'Leiderschap', 'Projectmanagment'];
        $cards = Card::all();
        return view('retro', compact('card_options', 'cards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('card.create')
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      DB::table('cards')
          ->insert(['title' => $request->input('title'), 'description' => $request->input('description')]);

      return redirect('retro');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $card = Card::find($id);
        return view('card.show', compact('card'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $card = Card::find($id);
      return view('card.edit', compact('card'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
          'title' => 'required',
          'description' => 'required',
        ]);

        $card = Card::find($id)->update($request->all());
        return redirect()->route('card.index')->with('success','het is successvol opgeslagen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $card = Card::find($id)->delete();
      return redirect()->route('card.index')->with('success','het is successvol verwijderd');
    }
}
