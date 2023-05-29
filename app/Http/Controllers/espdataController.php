<?php

namespace App\Http\Controllers;

use App\Models\espdata;
use Illuminate\Http\Request;

class espdataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->json()->all();

        $validatedData = $this->validateJsonData($requestData);

        $espData = ESPData::create($validatedData);

        return response()->json(['message' => 'ESP data stored successfully'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(espdata $espdata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, espdata $espdata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(espdata $espdata)
    {
        //
    }

    private function validateJsonData($data)
    {
        $validator = validator()->make($data, [
            'espkey' => 'required',
            'suhu' => 'required',
            'ph' => 'required',
        ]);

        if ($validator->fails()) {
            abort(400, $validator->errors());
        }

        return $validator->validated();
    }
}
