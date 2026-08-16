<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class AdminNewsController extends Controller
{
    public function index()
    {
        $newsList = News::latest()->get();
        return view('admin.news.index', compact('newsList'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|string',
            'category' => 'required|string',
            'excerpt' => 'required|string',
            'content' => 'required|string',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
        ]);

        if ($request->hasFile('image_file')) {
            $path = $request->file('image_file')->store('news', 'public');
            $validated['image'] = asset('storage/' . $path);
        } else {
            $validated['image'] = 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=800&q=80';
        }

        News::create($validated);

        return redirect()->route('admin.news.index')->with('success', 'Berita kegiatan KKN baru berhasil diterbitkan!');
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('admin.news.edit', compact('news'));
    }

    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|string',
            'category' => 'required|string',
            'excerpt' => 'required|string',
            'content' => 'required|string',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
        ]);

        if ($request->hasFile('image_file')) {
            $path = $request->file('image_file')->store('news', 'public');
            $validated['image'] = asset('storage/' . $path);
        }

        $news->update($validated);

        return redirect()->route('admin.news.index')->with('success', 'Berita berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        return redirect()->route('admin.news.index')->with('success', 'Berita berhasil dihapus!');
    }
}
