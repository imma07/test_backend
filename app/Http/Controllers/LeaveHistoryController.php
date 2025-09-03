<?php

namespace App\Http\Controllers;

use App\Models\leaveHistory;
use App\Http\Requests\StoreleaveHistoryRequest;
use App\Http\Requests\UpdateleaveHistoryRequest;

class LeaveHistoryController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreleaveHistoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(leaveHistory $leaveHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(leaveHistory $leaveHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateleaveHistoryRequest $request, leaveHistory $leaveHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(leaveHistory $leaveHistory)
    {
        //
    }
}
