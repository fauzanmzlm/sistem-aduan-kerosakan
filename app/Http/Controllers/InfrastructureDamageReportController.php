<?php

namespace App\Http\Controllers;

use App\Models\DamageCategory;
use App\Models\InfrastructureDamageReport;
use Illuminate\Http\Request;

class InfrastructureDamageReportController extends Controller
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
        $title = "BORANG LAPORAN KEROSAKAN INFRASTRUKTUR (BLKI)";

        return view("complaint.government-movable-assets-damage-report.create", [
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InfrastructureDamageReport  $infrastructureDamageReport
     * @return \Illuminate\Http\Response
     */
    public function show(InfrastructureDamageReport $infrastructureDamageReport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InfrastructureDamageReport  $infrastructureDamageReport
     * @return \Illuminate\Http\Response
     */
    public function edit(InfrastructureDamageReport $infrastructureDamageReport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InfrastructureDamageReport  $infrastructureDamageReport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InfrastructureDamageReport $infrastructureDamageReport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InfrastructureDamageReport  $infrastructureDamageReport
     * @return \Illuminate\Http\Response
     */
    public function destroy(InfrastructureDamageReport $infrastructureDamageReport)
    {
        //
    }
}
