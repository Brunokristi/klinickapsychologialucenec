<?php

namespace App\Http\Controllers;
use App\Models\Dates;

use Illuminate\Http\Request;

class OutgoingController extends Controller {
    
    public function show() {
        $outgoings = Dates::all();
        return view('outgoings.index', compact('outgoings'));
    }
    
    public function create(Request $request) {
        
        $request->validate([
            'date' => 'required|date',
            'text' => 'required|string|max:100',
        ]);
        
        Dates::create($request->only(['date', 'text']));
        
        return redirect()->route('outgoings.show')->with('success', 'Neprítomnosť úspešne pridaná!');
    }
     
    public function delete($id) {
        $date = Dates::findOrFail($id);
        $date->delete();
        return redirect()->route('outgoings.show')->with('success', 'Neprítomnosť úspešne odstránená!');
    }
}
