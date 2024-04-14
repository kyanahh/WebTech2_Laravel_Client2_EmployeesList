<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Employees;
use App\Models\User;
use \Illuminate\Database\Eloquent\Relations\HasMany;

class EmployeesController extends Controller
{
    public function landingpage()
    {
        return view('employees.landingpage');
    }

    public function loginpage()
    {
        return view('employees.loginpage');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            return redirect()->route('home');
        } else {
            return back()->withErrors([
                'email' => 'Invalid credentials',
            ]);
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('log');
    }


    public function createaccount()
    {
        return view('employees.createaccount');
    }

    public function createuser(Request $request)
    {
        // Validate data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        // Create a new user
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        // Log in the newly created user
        auth()->login($user);

        return redirect()->route('home')->withSuccess('Account created successfully');
    }

    public function homepage()
    {
        return view('employees.homepage');
    }

    /**
     * Display a listing of the resource.
     */
    public function employeestable()
    {
        $user = auth()->user();
        $employees = $user->employees()->get();
        return view('employees.employeestable', ['employees' => $employees]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function addemployees()
    {
        return view('employees.addemployees');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate data
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required'
        ]);

        $employees = new Employees;
        $employees->firstname = $request->firstname;
        $employees->lastname = $request->lastname;
        $employees->email = $request->email;
        $employees->user_id = auth()->user()->id;
        $employees->save();

        return back()->withSuccess('Employee added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employees = Employees::findOrFail($id);
        return view('employees.edit', compact('employees'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // validate data
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required'
        ]);

        // Fetch the product from the database
        $employees = Employees::findOrFail($id);

        $employees->firstname = $request->firstname;
        $employees->lastname = $request->lastname;
        $employees->email = $request->email;
        $employees->save();

        return redirect()->route('tables', ['employees' => $employees])->withSuccess('Employee information successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $employees = Employees::findOrFail($id);
        $employees->delete();
        return redirect()->route('tables')->withSuccess('Employee Data Deleted');
    }
}
