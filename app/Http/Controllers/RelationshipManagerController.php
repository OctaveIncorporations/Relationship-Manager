<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RelationshipManager;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RelationshipManagerController extends Controller
{

    public function showLoginForm()
    {
        if (Auth::guard('relationshipManager')->check()) {
            return redirect()->route('relationship-manager.profile');
        } else {
            return view('manager.auth.login');
        }
    }
    public function showRegisterForm()
    {
        if (Auth::guard('relationshipManager')->check()) {
            return redirect()->route('relationship-manager.profile');
        } else {
            return view('manager.auth.register');
        }
    }

    public function register(Request $request)
    {
        $manager = new RelationshipManager;
        $manager->manager_name = $request->input('name');
        $manager->email = $request->input('email');
        $manager->password = Hash::make($request->input('password'));
        $manager->save();
    }

    public function Login(Request $request)
    {
        $check = $request->all();
        if (Auth::guard('relationshipManager')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
            return redirect()->route('relationship-manager.profile');
        } else {
            return back()->with('error', 'Invalid Credentials');
        }
    }

    public function managerLogout(Request $request)
    {
        Auth::guard('relationshipManager')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return to_route('relationship-manager.login');
    }

    public function show()
    {
        return view('manager.profile');
    }

    public function showAllRelationshipManagers()
    {
        $managers = RelationshipManager::latest()->get();
        return view('', compact('managers'));
    }

    public function showManagerProfile($id)
    {
        $manager = RelationshipManager::findOrFail($id);
        return view('', compact('manager'));
    }
}
