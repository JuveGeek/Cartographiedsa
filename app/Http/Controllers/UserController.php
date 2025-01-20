<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Liste des utilisateurs paginés

    public function index()
    {
        $users = User::paginate(10); // Récupérer les utilisateurs et les paginer par 10
        return view('users-layout-membre', compact('users'));
    }

    public function store(Request $request)
    {

        /*$request->validate([
            'name'      => 'required|string|min:2|max:255',
            'firstname' => 'required|string|min:2|max:255',
            'email'     => ['required', 'email', 'max:255', Rule::unique('users')],
            'password'  => 'required|min:6',
            'tel'       => 'required|digits:8',
            //'role' => 'required|exists:roles,name',
        ]);*/

        $user = User::create([
            'name'      => $request->name,
            'firstname' => $request->firstname,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
            'tel'       => $request->tel,
        ]);

        //$user->save();

        $user->assignRole($request->role);

        // Message flash de succès
        session()->flash('success', 'Utilisateur ajouté avec succès !');

    // Redirection
    return redirect()->route('users-layout-membre');

    }
    /*
<div class="flex flex-col sm:flex-row mt-2">
                                @foreach($roles as $role)
                                    <div class="form-check mr-2">
                                        <input id="role-{{ $role->id }}" class="form-check-input" type="radio" name="role" value="{{ $role->name }}">
                                        <label class="form-check-label" for="role-{{ $role->id }}">{{ $role->name }}</label>
                                    </div>
                                @endforeach
                            </div>
    */

}
