<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
   
}
