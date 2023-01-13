<?php

namespace App\Http\Controllers\Adm;

use App\Exports\LeadsExport;
use App\Http\Controllers\Controller;
use App\Models\Lead;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;

use Rap2hpoutre\FastExcel\FastExcel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\StreamedResponse;

class AdmController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'password' => ['required', 'string', 'max:255'],
        ]);

        if (RateLimiter::tooManyAttempts('boxvx', $perMinute = 5)) {
            return redirect('/adm')->with([
                'error' => 'Muitas tentativas!'
            ]);
        }

        if($request->password == 'boxvx2018'){
            return view('adm');
        }else{
            return redirect('/adm')->with([
               'error' => 'Senha incorreta!'
            ]);
        }
    }

    public function reset(): Factory|View|Application
    {
        $leads = Lead::all();
        if(sizeof($leads) > 0){
            Lead::truncate();
            return view('adm');
        }else{
            return view('adm');
        }
    }

    public function generate(): string|StreamedResponse
    {
        return (new FastExcel(Lead::all()))->download('leads.xlsx');
    }
}
