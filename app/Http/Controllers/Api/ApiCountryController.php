<?php

namespace App\Http\Controllers\Api;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiCountryController extends Controller
{

    public function averageTaxCountry ()
    {
        return Country::join('states', 'states.country_id', 'countries.id')
            ->join('counties', 'counties.state_id',  'states.id')
            ->join('taxes', 'taxes.county_id', 'counties.id')
            ->selectRaw('countries.name, AVG(taxes.amount) as average_tax')
            ->groupBy('countries.id')
            ->orderBy('average_tax', 'desc')
            ->get();

    }

    public function overallTaxCountry()
    {
        return Country::join('states', 'states.country_id', 'countries.id')
            ->join('counties', 'counties.state_id',  'states.id')
            ->join('taxes', 'taxes.county_id', 'counties.id')
            ->selectRaw('countries.name, SUM(taxes.amount) as overall_tax')
            ->groupBy('countries.id')
            ->orderBy('overall_tax', 'desc')
            ->get();
    }

    public function store(Request $request)
    {
        $country = Country::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'countries List successfully show !',
            'data' => $country
        ], 200);
    }

    public function update(Request $request, Country $country)
    {

        $inputs = $request->all();
        $country->update($inputs);

        return response()->json([
            'success' => true,
            'message' => 'countries List successfully show !',
            'data' => $country
        ], 200);
    }

    public function index()
    {
        $country = Country::orderBy('created_at', 'asc')->get();

        // dd($country);
        return response()->json([
            'success' => true,
            'message' => 'countries List successfully show !',
            'data' => $country
        ], 200);
    }


    public function destroy(Country $country)
    {
        $country->delete();
        return response()->json([
            'success' => true,
            'message' => 'Country successfully deleted !',

        ], 200);
    }
}
