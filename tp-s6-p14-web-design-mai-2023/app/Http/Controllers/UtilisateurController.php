<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class UtilisateurController extends Controller
{
    public function loginPage(){
        return view('loginPage');
    }


    public function login(){
        $email = request('email');
        $mdp = request('mdp');
        $user = DB::select('SELECT * FROM Utilisateurs WHERE email = ? AND mdp = ?',[$email,$mdp]);
        if($user!=null){
            if($user[0]->profil_id == 1){
                session()->put('redacteur', $user);
                return redirect()->route('redacteur');
            }
            if($user[0]->profil_id == 2){
                session()->put('redacteurchef', $user);
                return redirect()->route('redacteur-chef');
            }
            if($user[0]->profil_id == 3){
                session()->put('admin', $user);
                return redirect()->route('administrateur');
            }
        }
        return redirect()->back()->with('error', 'Email ou Mot de passe incorrect(e)');
    }

}
