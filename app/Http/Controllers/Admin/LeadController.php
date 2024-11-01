<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{


public function index()
{
    $leads = Lead::all();
    return view('admin.leads.index', compact('leads'));
}

public function create()
{
    return view('admin.leads.create');
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        // Add other validation rules as needed
    ]);

    Lead::create($request->all());

    return redirect()->route('leads.index')->with('success', 'Lead created successfully.');
}

public function edit(Lead $lead)
{
    return view('admin.leads.edit', compact('lead'));
}

public function update(Request $request, Lead $lead)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        // Add other validation rules as needed
    ]);

    $lead->update($request->all());

    return redirect()->route('leads.index')->with('success', 'Lead updated successfully.');
}

public function destroy(Lead $lead)
{
    $lead->delete();

    return redirect()->route('leads.index')->with('success', 'Lead deleted successfully.');
}

}
