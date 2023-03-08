<?php

namespace App\Http\Controllers\Complainant;

use App\Http\Controllers\Controller;
use App\Models\Complaint;
use App\Models\DamageCategory;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {

        }

        return view('complaints.complainant.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createComplaintGovernmentMovableAssetsDamageReportForm() 
    {
        $damageCategories = DamageCategory::all();
        $title = "BORANG LAPORAN KEROSAKAN ASET ALIH KERAJAAN";

        return view("complaints.complainant.form.government-movable-assets-damage-report.create", [
            'title' => $title,
            'damageCategories' => $damageCategories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createInfrastructureDamageReportForm() 
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $complaint
     * @return \Illuminate\Http\Response
     */
    public function edit(Complaint $complaint)
    {
        return view('complaints.complainant.edit', [
            'complaint' => $complaint
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
