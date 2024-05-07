<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class ProfileImageController extends Controller
{
    public function imageUploadProfile(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $imageName);

        $user = Auth::user();
        $user->profile_image = 'images/' . $imageName;
        $user->save();
        
        return redirect('/dashboard');
    
    }

}
