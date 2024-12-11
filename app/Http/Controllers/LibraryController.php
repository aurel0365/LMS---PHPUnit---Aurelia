<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;  // Import Auth
use App\Models\User;  // Pastikan kamu mengimpor model User jika diperlukan

class LibraryController extends Controller
{
    public function showSignInForm()
    {
        return view('library.welcome');
    }

    public function signIn(Request $request)
    {
        // Validasi data input dari form
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        // Menjalankan autentikasi menggunakan Auth::attempt
        if (Auth::attempt($validated)) {
            // Jika berhasil login, alihkan ke halaman dashboard atau halaman utama lainnya
            return redirect()->intended('dashboard');
        }

        // Jika gagal login, kembali dengan error
        return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
    }
}
