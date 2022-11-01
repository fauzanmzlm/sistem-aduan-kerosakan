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
    public function create()
    {
        $form = request()->form;

        $damageCategories = DamageCategory::all();

        if (empty($form)) {
            return abort(404, 'Something went wrong');
        }

        if ($form == 1) {
            $title = 'BORANG LAPORAN KEROSAKAN ASET ALIH KERAJAAN';
        } else if ($form == 2) {
            $title = 'BORANG LAPORAN KEROSAKAN INFRASTRUKTUR (BLKI)';
        } else {
            return abort(404, 'Something went wrong');
        }

        return view("complaints.complainant.form.{$form}.create", [
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
