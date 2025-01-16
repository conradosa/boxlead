<?php

namespace App\Http\Controllers\Lead;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use Exception;
use Illuminate\Http\Request;
use ParagonIE\ConstantTime\Encoding;

class CadastroController extends Controller
{
    /**
     * @throws Exception
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:leads'],
            'telefone' => ['required', 'string', 'max:255', 'celular_com_ddd'],
            'cargo' => ['required', 'string', 'max:255']
        ]);

        /*
        $token = Encoding::hexEncode(random_bytes(9));

        if(Lead::where('codigo', $token)->first()) {
            while (Lead::where('codigo', $token)->first()) {
                $token = Encoding::hexEncode(random_bytes(9));
            }
        }
        */

        $lead = Lead::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'cargo' => $request->cargo
        ]);

        return view('success',[
            'lead' => $lead
        ]);
    }
}
