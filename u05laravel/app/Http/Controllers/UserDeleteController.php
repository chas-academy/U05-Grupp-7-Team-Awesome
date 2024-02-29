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


// Mike

// I denna Controller finns en index(); som hittar alla användare från tabellen Users i databasen och displayar dom.
// Det finns även en distroy i den finns ($id)  i a taggen som skickas hit finns id med från den taggen som skickas till controllern om usern.