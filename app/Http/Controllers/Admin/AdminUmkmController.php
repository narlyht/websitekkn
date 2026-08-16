<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Umkm;
use Illuminate\Support\Facades\Storage;

class AdminUmkmController extends Controller
{
    public function loginForm()
    {
        if (session('admin_logged_in')) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if ($request->username === 'admin' && $request->password === 'password') {
            session(['admin_logged_in' => true]);
            return redirect()->route('admin.dashboard')->with('success', 'Selamat datang di Dashboard Admin KKN Cikokol!');
        }

        return back()->withErrors(['username' => 'Username atau Password salah!']);
    }

    public function logout()
    {
        session()->forget('admin_logged_in');
        return redirect()->route('admin.login')->with('success', 'Anda telah berhasil keluar.');
    }

    public function index()
    {
        $umkms = Umkm::latest()->get();
        return view('admin.dashboard', compact('umkms'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'owner' => 'required|string|max:255',
            'rw' => 'required|string',
            'rt' => 'required|string',
            'category' => 'required|string',
            'price' => 'required|string',
            'phone' => 'required|string',
            'hours' => 'required|string',
            'address' => 'required|string',
            'description' => 'required|string',
            'image_files.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:5120',
        ]);

        $uploadedImages = [];

        if ($request->hasFile('image_files')) {
            $files = array_slice($request->file('image_files'), 0, 5); // Max 5 images
            foreach ($files as $file) {
                $path = $file->store('umkms', 'public');
                $uploadedImages[] = asset('storage/' . $path);
            }
        }

        // Fallback default image if no files uploaded
        if (count($uploadedImages) === 0) {
            $uploadedImages[] = 'https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=800&q=80';
        }

        $validated['images'] = $uploadedImages;
        $validated['image'] = $uploadedImages[0];

        // Process dynamic menu products
        $products = [];
        if ($request->has('product_title')) {
            $titles = $request->product_title;
            $prices = $request->product_price;
            foreach ($titles as $idx => $t) {
                if (!empty($t)) {
                    $products[] = [
                        'title' => $t,
                        'price' => $prices[$idx] ?? 'Rp 0'
                    ];
                }
            }
        }
        $validated['products'] = $products;

        Umkm::create($validated);

        return redirect()->route('admin.dashboard')->with('success', 'Data UMKM baru beserta gambar berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $umkm = Umkm::findOrFail($id);
        return view('admin.edit', compact('umkm'));
    }

    public function update(Request $request, $id)
    {
        $umkm = Umkm::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'owner' => 'required|string|max:255',
            'rw' => 'required|string',
            'rt' => 'required|string',
            'category' => 'required|string',
            'price' => 'required|string',
            'phone' => 'required|string',
            'hours' => 'required|string',
            'address' => 'required|string',
            'description' => 'required|string',
            'image_files.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:5120',
        ]);

        if ($request->hasFile('image_files')) {
            $uploadedImages = [];
            $files = array_slice($request->file('image_files'), 0, 5); // Max 5 images
            foreach ($files as $file) {
                $path = $file->store('umkms', 'public');
                $uploadedImages[] = asset('storage/' . $path);
            }
            if (count($uploadedImages) > 0) {
                $validated['images'] = $uploadedImages;
                $validated['image'] = $uploadedImages[0];
            }
        } else {
            $validated['images'] = $umkm->images_list;
            $validated['image'] = $umkm->image ?? ($umkm->images_list[0] ?? null);
        }

        // Process dynamic menu products
        $products = [];
        if ($request->has('product_title')) {
            $titles = $request->product_title;
            $prices = $request->product_price;
            foreach ($titles as $idx => $t) {
                if (!empty($t)) {
                    $products[] = [
                        'title' => $t,
                        'price' => $prices[$idx] ?? 'Rp 0'
                    ];
                }
            }
        }
        $validated['products'] = $products;

        $umkm->update($validated);

        return redirect()->route('admin.dashboard')->with('success', 'Data UMKM & Gambar berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $umkm = Umkm::findOrFail($id);
        $umkm->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Data UMKM berhasil dihapus!');
    }
}
