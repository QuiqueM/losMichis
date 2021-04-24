<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Citas;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        /**
         * QUERY probado en MYSQL directamente para obtner el veterinario con mas citas
         * SELECT COUNT(`fecha`), users.name FROM `citas` INNER JOIN users ON citas.user_id = users.id GROUP BY(`user_id`) LIMIT 1
         */

        $users = User::all();
        $today = Carbon::today()->toDateString();
        $lastMonth = Carbon::today()->subMonth()->toDateString();
        $cita = Citas::select(DB::raw('count(citas.fecha) as numCitas, citas.user_id'))
                        ->join('users','citas.user_id','users.id')
                        ->whereBetween('fecha', [$lastMonth, $today])
                        ->groupBy('citas.user_id')
                        ->orderBy('numCitas','DESC')
                        ->first();
        return view('admin.index', compact('users', 'today', 'lastMonth', 'cita'));
    }
    
    public function show(Request $request)
    {
        $veterinario = User::find($request->id);
        $today = Carbon::today()->toDateString();
        $lastMonth = Carbon::today()->subMonth()->toDateString();
        $numCitas = Citas::whereBetween('fecha', [$lastMonth, $today])->where('user_id',$request->id)->count();

        return view('admin.veterinarios.show', compact('veterinario', 'today', 'lastMonth','numCitas'));

    }
}
