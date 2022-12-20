<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorestatusRequest;
use App\Http\Requests\UpdatestatusRequest;
use App\Models\status;

class StatusController extends Controller
{
    public function index()
    {
        $status = Status::all();
 
        return view('status.index', compact('status'));
    }
 
    public function create()
    {
        return view('status.create');
    }
 
    public function store(StorestatusRequest $request)
    {
        Status::create($request->validated());
 
        return redirect()->route('status.index');
    }
 
    public function edit(Status $status)
    {
        return view('status.edit', compact('status'));
    }
 
    public function update(UpdatestatusRequest $request, Status $status)
    {
        $status->update($request->validated());
 
        return redirect()->route('status.index');
    }
 
    public function destroy(Status $status)
    {
        $status->delete();
 
        return redirect()->route('status.index');
    }
}
