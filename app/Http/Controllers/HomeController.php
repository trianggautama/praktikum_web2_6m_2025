<?php

namespace App\Http\Controllers;

    use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function profile()
    {
        return view('profile');
    }

    public function profileEdit($id)
    {
        $user = User::findOrFail($id);

        return view('profile_edit',compact('user'));
    }

    public function profileUpdate(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'nomor_telepon' => 'required',
            'alamat' => 'nullable',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:4048',
        ]);

        $input = $request->all();
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/users'), $filename);
            $input['foto'] =  $filename;
        }

        $user->update($input);

        return redirect()->route('profile')->with('success','data berhasil diubah');
    }
}
