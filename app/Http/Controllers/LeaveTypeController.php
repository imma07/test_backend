<?php

namespace App\Http\Controllers;

use App\Models\leaveType;
use App\Http\Requests\StoreleaveTypeRequest;
use App\Http\Requests\UpdateleaveTypeRequest;
use Illuminate\Support\Facades\Auth;

class LeaveTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $leaveTypes = leaveType::all();
        return response()->json([
            'message' => 'Leave Types retrieved successfully.',
            'leaveTypes'    => $leaveTypes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreleaveTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(leaveType $leaveType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(leaveType $leaveType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateleaveTypeRequest $request, leaveType $leaveType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(leaveType $leaveType)
    {
        //
    }
}
