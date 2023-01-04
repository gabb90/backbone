<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreZipRequest;
use App\Http\Requests\UpdateZipRequest;
use App\Models\Zip;
use Illuminate\Http\Request;

class ZipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreZipRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreZipRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  Request  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        try {
            $results = Zip::select([
                'd_codigo AS zip_code',
                'D_mnpio AS locality',
                'd_tipo_asenta AS settlement_type',
                'd_zona AS zone_type',
            ])->where('d_codigo', $id)

            ->get();

            return $results;
        } catch (\Throwable$th) {
            throw $th;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Zip  $zip
     * @return \Illuminate\Http\Response
     */
    public function edit(Zip $zip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateZipRequest  $request
     * @param  \App\Models\Zip  $zip
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateZipRequest $request, Zip $zip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Zip  $zip
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zip $zip)
    {
        //
    }
}
