<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employereq;

class EmployeReqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('become-employer');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
        'CompanayName' => 'required',
        'BusinessPermit' => 'required',
        'MayorsPermit' => 'required',
        'Jobvacancies' => 'required',
    ]);
        $emp = new employereq;

        $emp->CompanayName = $request('CompanayName');
        $emp->BusinessPermit = $request('BusinessPermit');
        $emp->MayorsPermit = $request('MayorsPermit');
        $emp->Jobvacancies = $request('Jobvacancies');

        $emp->save();

        return redirect('/employereq')->width('success', 'Data Saved');

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
