<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm()
    {
        return view('form');
    }
    public function submitForm(Request $request)
{
    // Validate the form data
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'age' => 'required|integer|min:18',
    ]);

    // If validation passes, pass the data to the success view
    $data = $request->all();
    return view('success', compact('data'));
}



}
