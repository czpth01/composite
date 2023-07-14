<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class HibajegyController extends Controller
{

    public function letrehoz(Request $request)
    {
        //validálás
        $this->validate($request, 
        ['ugyfel' => 'required',
        'email' => 'required|email',
        'targy' => 'required',
        'tartalom' => 'required'],
        
        ['ugyfel.required' => 'Cégnév nincs kitöltve!',
        'email.required' => 'E-mail nincs kitöltve vagy nem valid!',
        'targy.required' => 'Tárgy nincs kitöltve!',
        'tartalom.required' => 'Hibajegy leírása nincs kitöltve!']
        );
        
        //ha van már ilyen névvel ügyfél, akkor visszaadjuk annak az id-ját, ha nincs, létrehozzuk
        $ugyfel_nev = $request->input('ugyfel');
        $email = $request->input('email');
        $ugyfel = DB::table('ugyfelek')->where('nev', $ugyfel_nev)->first();
        if (isset($ugyfel->id)) {
            $ugyfel_id = $ugyfel->id;
        } else {
            $data = array(
            'nev' => $ugyfel_nev,
            'email' => $email
            );
            DB::table('ugyfelek')->insert($data);
            $ugyfel_id = DB::getPdo()->lastInsertId();
        }

        //kiszámoljuk az esedékességet
        ////////
        //Minden hibajegyre maximum 16 munkaóra reagálási idő van a létrehozását követően, az esedékességi dátum e szerint számolódik.
        //A munkaórák munkanapokon reggel 9.00 és délután 17.00 között számolódnak.
        ///////
        //-----> tehát 2 napnak felel meg a 16 óra, azaz 2 napot kell hozzáadnunk a jelenlegi dátumhoz, kivéve csütörtök-vasárnapra esik
        $most = Carbon::now();
        $ora = substr($most, 11, 2);
        //ha munkaidőben vagyunk elég simán 2 hétköznapot hozzáadni
        if ($ora > 9 && $ora < 17) {
            $esedekesseg = $most->addWeekDays(2);
        } else
            if ($ora <= 9) {
                //ha még a munkaidő kezdete után hozták létre
                $esedekesseg = substr($most->addWeekDays(2), 0, 10) . " 09:00:00";
            } else
                if ($ora >= 17) {
                    //ha már a munkaidő vége után hozták létre
                    $esedekesseg = substr($most->addWeekDays(2), 0, 10) . " 17:00:00";
                }

        //beszúrjuk a hibajegyet a fent visszaadott/létrehozott ügyfélhez
        $targy = $request->input('targy');
        $tartalom = $request->input('tartalom');
        $data = array(
            'ugyfel_id' => $ugyfel_id,
            'targy' => $targy,
            'tartalom' => $tartalom,
            'esedekesseg' => $esedekesseg,
            'letrehozva' => $most
            );
        DB::table('hibajegyek')->insert($data);
        
        return back()->with('success','Hibajegy sikeresen létrehozva! 2 munkanapon belül válaszolunk.');
    }
    
    public function hibajegy_lista(){
        $hibajegyek = DB::select('SELECT hibajegyek.*, ugyfelek.nev AS ugyfel 
        FROM hibajegyek 
        JOIN ugyfelek ON ugyfelek.id = hibajegyek.ugyfel_id');
        return view('hibajegy_lista',['hibajegyek'=>$hibajegyek]);
    }
    
    public function ugyfel_lista(){
        $ugyfelek = DB::select('SELECT ugyfelek.*, COUNT(hibajegyek.id) AS hibajegyek
        FROM ugyfelek 
        JOIN hibajegyek ON hibajegyek.ugyfel_id = ugyfelek.id 
        GROUP BY ugyfelek.id');
        return view('ugyfel_lista',['ugyfelek'=>$ugyfelek]);
    }
}
?>