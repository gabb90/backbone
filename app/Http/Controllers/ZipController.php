<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreZipRequest;
use App\Http\Requests\UpdateZipRequest;
use App\Models\Zip;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

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
     * Funcion para buscar datos de un codigo postal.
     *
     * @param  String  $zip_code
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Request $request, $zip_code)
    {
        try {
            return Cache::rememberForever($zip_code, function () use ($zip_code) {
                $results = Zip::select([
                    'd_codigo AS zip_code',
                    'D_mnpio AS locality',
                    'd_tipo_asenta AS settlement_type',
                    'd_zona AS zone_type',
                ])->where('d_codigo', $zip_code)
                    ->get();
                if ($results == null) {
                    throw new Exception('No hay informacion para ese codigo postal.', 404);
                }
                return $results;
            });
        } catch (Exception $th) {
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
