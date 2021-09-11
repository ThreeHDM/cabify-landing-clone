<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\ProspectMail;
use App\Models\Prospect;
use Illuminate\Http\Request;

class ProspectsController extends Controller
{
    /**
     * Show the prospects form view 
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        return view('pages.prospects');
    }

    public function manageProspect(Request $request){

        $validated = $request->validate([
            'name' => 'required | max:255',
            'lastname' => 'required',
            'email' => 'required | email:rfc,dns' 
        ],
        [
            'name.required' => 'Este campo es requerido',
            'lastname.required' => 'Este campo es requerido',
            'email.required' => 'Este campo es requerido',
            'email.email' => 'El mail debe ser una direccion válida'
        ]);

        
        if(Prospect::where('email', $validated['email'])->first()){

            return view('pages.prospects')->with('message', 'Ya se encontraba registrado con anterioridad. ');
            
        } else {

            Prospect::create([
                'name' => $validated['name'],
                'lastname' => $validated['lastname'],
                'email' => $validated['email']
            ]);

            
            Mail::to($validated['email'])->send(new ProspectMail());
            
            return view('pages.prospects')->with('message', 'Siga las instrucciones del mail enviado para instalar nuestra app.');
        }
    }
}
