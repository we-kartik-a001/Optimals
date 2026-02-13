<?php

namespace App\Http\Controllers;

// Models
use App\Models\Designation;

// Requests
use Illuminate\Http\Request;
use App\Http\Requests\DesignationRequest;

// Session
use Illuminate\Support\Facades\Session;

class DesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view('designation.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DesignationRequest $request)
    {
        $input = $request->validated();
        if ($input) {
            Designation::create($input);
            Session::flash('success', 'Designation created successfully.');
            return (view('welcome'));
        }else{
            Session::flash('error', 'Failed to create designation.');
            return (view('welcome'));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Designation $designation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Designation $designation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Designation $designation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Designation $designation)
    {
        //
    }
}
