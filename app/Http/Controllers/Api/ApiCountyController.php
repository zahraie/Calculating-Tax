<?php

namespace App\Http\Controllers\Api;

use App\Models\State;
use App\Models\County;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ApiCountyRequest;

class ApiCountyController extends Controller
{

    public function store(ApiCountyRequest $request)
    {
        $inputs = $request->all();
        $state = County::create($inputs);

        return response()->json([
            'success' => true,
            'message' => 'countries List successfully show !',
            'data' => $state
        ], 200);
    }

    public function update(Request $request, County $county)
    {
        $inputs = $request->all();
        $county->update($inputs);
        return response()->json([
            'success' => true,
            'message' => 'county successfully updated!',
            'data' => $county
        ], 200);
    }


    public function index()
    {
        $counties = County::orderBy('created_at', 'asc')->get();
        return response()->json([
            'success' => true,
            'message' => 'counties List successfully show !',
            'data' => $counties
        ], 200);
    }

    public function destroy(County $county)
    {
        $county->delete();
        return response()->json([
            'success' => true,
            'message' => 'County successfully deleted !',

        ], 200);
    }
}
