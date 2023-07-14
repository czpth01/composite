<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Routing\Redirector;

class BejelentkezesController extends Controller
{

    public function bejelentkezes(Request $request)
    {
        //validálás
        $this->validate($request, 
        ['nev' => 'required',
        'jelszo' => 'required'],
        
        ['ugyfel.required' => 'Felhasználónév nincs kitöltve!',
        'jelszo.required' => 'Jelszo nincs kitöltve!']
        );
        
        //ha van már ilyen névvel ügyfél, akkor visszaadjuk annak az id-ját, ha nincs, létrehozzuk
        $nev = $request->input('nev');
        $jelszo = $request->input('jelszo');
        $admin = DB::table('adminok')
                ->where('nev', '=', $nev)
                ->where('jelszo', '=', $jelszo)
                ->first();
        
        //sikerült belépni
        if(isset($admin->id)) {
            $_SESSION['admin_belepve'] = true;
            $_SESSION['admin_nev'] = $admin->nev;

            return redirect('/hibajegy_lista');
        } else {
            //nincs ilyen user
            return back()->with('error','Hibás felhasználónév vagy jelszó!');
        }
    }
    
    public function kijelentkezes() {
        unset($_SESSION);
        return view('hibajegyek');
    }

}
?>