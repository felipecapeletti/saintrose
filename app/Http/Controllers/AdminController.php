<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function imagemupdate(Request $request)
        {
            $request->validate([
                'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $user = Auth::user();

            if ($request->hasFile('profile_picture')) {

                // Remove a imagem antiga, se houver
                if ($user->profile_picture) {
                    Storage::delete($user->profile_picture);
                }

                // Salva a nova imagem
                $path = $request->file('profile_picture')->store('profile_pictures', 'public');
                $user->profile_picture = $path;
            }

            $user->save();

            return redirect()->back();
        }

    public function perfilupdate(Request $request)
        {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
            ]);
        
            $user = Auth::user();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();
        
            return redirect()->back();
        }

    public function senhaupdate(Request $request)
        {
            $request->validate([
                'password' => 'required|string|min:8|confirmed',
            ]);
        
            $user = Auth::user();
            
            // Atualiza a senha do usuário
            $user->password = Hash::make($request->password);
        
            $user->save();
        
            return redirect()->back();
        }
}
