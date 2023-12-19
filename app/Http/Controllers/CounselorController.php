<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use App\Models\Counselor;
use Illuminate\Http\Request;

class CounselorController extends Controller
{
    public function index()
    {
        $counselors = Counselor::orderBy('fullname')->get(); 
        return view('counselor.index', compact('counselors'));
    }

    public function create()
    {
        $counselor = Counselor::all();

        return view('counselor.create', ['counselors' => $counselor]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'contact' => 'required',
            'specialty' => 'required'
        ]);

        Counselor::create([
            'fullname' => $request->fullname,
            'contact' => $request->contact,
            'specialty' => $request->specialty,
        ]);

    return redirect('/counselors')->with('message', 'A new counselor has been added');
    }

    public function show($fullname)
{
    $counselor = Counselor::findOrFail($fullname);
    return view('counselor.show', compact('counselor'));
}

    public function edit(Counselor $counselor)
    {
        return view('counselor.edit', compact('counselors'));
    }


    public function update(Request $request, Counselor $counselor)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'contact' => 'required|string|max:20',
            'specialty' => 'nullable|string|max:255',
            'availability' => 'boolean', 
        ]);

        $counselor->update($request->all());

        return redirect()->route('counselor.index')
            ->with('success', 'Counselors information updated successfully.');
    }

    public function delete(Counselor $counselor)
    {
        $counselor->delete();

        return redirect('/counselors')->with('message', "$counselor->fullname has been deleted successfully!");

    }

}
