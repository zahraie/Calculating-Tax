<?php

namespace App\Http\Controllers\Api;


use App\Models\State;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiStateController extends Controller
{

    public function overallTaxState()
    {

        return  State::join('counties','counties.state_id','=','states.id')
            ->join('taxes','taxes.county_id','=','counties.id')
            ->selectRaw('states.name,SUM(taxes.amount) as overall_tax')
            ->groupBy('states.id')
            ->orderBy('overall_tax', 'desc')
            ->get();

    }

    public function averageTaxState()
    {
        return State::join('counties','counties.state_id','=','states.id')
            ->join('taxes','taxes.county_id','=','counties.id')
            ->selectRaw('states.name,AVG(taxes.amount) as average_tax')
            ->groupBy('states.id')
            ->orderBy('average_tax', 'desc')
            ->get();
    }

    public function averageCountyTaxRate()
    {
        return State::join('counties','counties.state_id','=','states.id')
            ->selectRaw('states.name,AVG(counties.tax_rate) as average_tax_rate')
            ->groupBy('states.id')
            ->orderBy('average_tax_rate', 'desc')
            ->get();
    }


    public function store(Request $request )
    {

        $inputs = $request->all();
        $state = State::create($inputs);

        return response()->json([
            'success' => true,
            'message' => 'countries List successfully show !',
            'data' => $state
        ], 200);
    }



    public function update(Request $request, State $state)
    {

        $inputs = $request->all();
        $state->update($inputs);
        return response()->json([
            'success' => true,
            'message' => 'state successfully updated!',
            'data' => $state
        ], 200);
    }

    public function index()
    {
        $states = State::orderBy('created_at', 'asc')->get();
        return response()->json([
            'success' => true,
            'message' => 'states List successfully show !',
            'data' => $states
        ], 200);

    }

    public function destroy(State $state)
    {
        $state->delete();
        return response()->json([
            'success' => true,
            'message' => 'State successfully deleted !',

        ], 200);
    }
}
