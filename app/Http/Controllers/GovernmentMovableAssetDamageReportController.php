<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGovernmentMovableAssetDamageReportRequest;
use App\Models\DamageCategory;
use App\Models\GovernmentMovableAssetDamageReport;
use Illuminate\Http\Request;

class GovernmentMovableAssetDamageReportController extends Controller
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
        $damageCategories = DamageCategory::all();
        $title = "BORANG LAPORAN KEROSAKAN ASET ALIH KERAJAAN";

        return view("complaints.complainant.form.government-movable-assets-damage-report.create", [
            'title' => $title,
            'damageCategories' => $damageCategories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGovernmentMovableAssetDamageReportRequest $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GovernmentMovableAssetDamageReport  $governmentMovableAssetDamageReport
     * @return \Illuminate\Http\Response
     */
    public function show(GovernmentMovableAssetDamageReport $governmentMovableAssetDamageReport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GovernmentMovableAssetDamageReport  $governmentMovableAssetDamageReport
     * @return \Illuminate\Http\Response
     */
    public function edit(GovernmentMovableAssetDamageReport $governmentMovableAssetDamageReport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GovernmentMovableAssetDamageReport  $governmentMovableAssetDamageReport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GovernmentMovableAssetDamageReport $governmentMovableAssetDamageReport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GovernmentMovableAssetDamageReport  $governmentMovableAssetDamageReport
     * @return \Illuminate\Http\Response
     */
    public function destroy(GovernmentMovableAssetDamageReport $governmentMovableAssetDamageReport)
    {
        //
    }
}
