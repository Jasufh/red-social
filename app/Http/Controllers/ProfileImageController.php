<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileImageController extends Controller // Cambiado de 'ImageUpload' a 'ImageUploadController'
{
    public function imageUploadProfile(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $imageName);

        // Obtener el usuario actualmente autenticado
        $user = Auth::user();

        // Actualizar el campo profile_image del usuario
        $user->profile_image = 'images/' . $imageName;

        // guardar los cambios en el usuario
        $user->save();
        return redirect('/dashboard');
    }
}