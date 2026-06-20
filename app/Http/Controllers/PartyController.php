<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Party;
use Illuminate\Support\Facades\Validator;
class PartyController extends Controller
{
    public function addParty()
    {
        return view('party.add');
    }
    public function index()
    {
        return view('party.manage');
    }
   // Function to store party data in database
public function createParty(Request $request)
{

$request->validate([
  
    'party_type' => 'required',
    'full_name' => 'required|string|min:2|max:20',
    'phone_no' => 'required|digits_between:7,15',
    'address' => 'required|string|min:5|max:255',
    'account_holder_name' => 'required|string|min:2|max:50',
    'account_no' => 'required|string|min:5|max:30',
    'bank_name' => 'required|string|min:2|max:50',
    'ifsc_code' => 'required|string|min:4|max:20',
    'zip_code' => 'required|string|min:3|max:10',
    'state' => 'required|string|min:2|max:50',
    'branch_address' => 'required|string|min:5|max:255',
   

]);
    Party::create($request->only([
        'party_type',
        'full_name',
        'phone_no',
        'address',
        'account_holder_name',
        'account_no',
        'bank_name',
        'ifsc_code',
        'zip_code',
        'state',
        'branch_address',
    ]));

    // Redirect user back to the add-party page
    return redirect()->route('add-party')->with('status', 'Party created successfully');
}
}
