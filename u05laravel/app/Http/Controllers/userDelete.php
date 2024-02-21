<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\User;

class userDelete extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = DB::select('select * from users');

        return view('userDelete', ['users' => $users]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Hitta användaren med det angivna ID:t
        $user = User::findOrFail($id);

        // Ta bort användaren
        $user->delete();

        // Omdirigera tillbaka eller till en annan sida
        return back()->with('success', 'Användaren har tagits bort!');
    }
}
