<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor; // Make sure to import the Doctor model

class DoctorController extends Controller
{
    // Show the registration form
    public function showRegistrationForm()
    {
        return view('Doctor.Auth.signup'); // Make sure this path matches your view structure
    }

    // Handle the registration logic
    public function register(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'spl' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:doctors',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create a new doctor record
        Doctor::create([
            'name' => $validatedData['name'],
            'specialization' => $validatedData['spl'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']), // Hash the password
        ]);

        // Redirect or return a response
        return redirect()->route('doctor.login')->with('success', 'Account created successfully!');
    }
}
