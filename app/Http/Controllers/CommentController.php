<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{

    public function index (){

        return view('about');
    }


    public function index_comment()
    {
        $comments = Comment::latest()->get(); // Mengambil semua komentar
        return view('views_admin.dashboardhome', compact('comments'));
    }


    public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'comment' => 'required|string',
    ]);

    // Simpan data ke database
    Comment::create($validated);

    return redirect()->route('about.comment')->with('success', 'Your comment has been posted!');
}

public function store_comment(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'comment' => 'required|string',
    ]);

    // Simpan data ke database
    Comment::create($validated);

    return redirect()->route('about.comments')->with('success', 'Your comment has been posted!');
}

}