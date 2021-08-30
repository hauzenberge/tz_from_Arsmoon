<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Emploeer;

class EmploeerController extends Controller
{
    public function edit($id)
    {
        return view('employeer.edit',[
            'emploeer' => Emploeer::find($id),
        ]);
    }

    public function update($id, Request $request)
    {
        $emploeer = Emploeer::find($id);
        $emploeer->fname =  $request->input('fname');
        $emploeer->sname = $request->input('sname');
        $emploeer->pname =$request->input('pname');
        $emploeer->save();
        return redirect('/employeer/edit/'.$id);
    }
    public function destroy($id)
    {
        $emploeer = Emploeer::find($id);
        $emploeer->delete();
        return redirect('home');
    }
    public function store(Request $request)
    {
        $emploeer = new Emploeer;
        $emploeer->fname =  $request->input('fname');
        $emploeer->sname = $request->input('sname');
        $emploeer->pname =$request->input('pname');
        $emploeer->save();
        return redirect('home');
    }
}
