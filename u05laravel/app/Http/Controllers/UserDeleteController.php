<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserDeleteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();

        return view('userDelete', compact('users'));
    }


    public function destroy($id)
    {
        $user = User::find($id);

        if ($user) {
            $user->delete();
            return back()->with('success', 'Användaren har tagits bort!');
        } else {
            return back()->with('error', 'Kunde inte hitta användaren.');
        }
    }
}
