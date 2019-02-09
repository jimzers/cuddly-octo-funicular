<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blogpost;

class BlogpostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $allBlogposts = Blogpost::all();
        return view('blogposts.index', [
            'blogposts' => $allBlogposts,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('blogposts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        /*
         *
            $table->string('title');
            $table->string('topic');
            $table->string('content');
         */

        $validated = request()->validate([
            'title' => ['required', 'min:3'],
            'author' => ['required'],
            'topic' => ['required'],
            'content' => ['required', 'min:3'],
        ]);

        Blogpost::create($validated);
        return redirect('/blogposts');

    }

    public function show(Blogpost $blogpost)
    {
        //

        return view('blogposts.show', [
            'blogpost' => $blogpost,
        ]);
    }

    public function edit(Blogpost $blogpost)
    {
        //
        return view('blogposts.edit', [
            'blogpost' => $blogpost,
        ]);
    }

    public function update(Blogpost $blogpost)
    {
        /*
         * 'title' => ['required', 'min:3'],
            'author' => ['required'],
            'topic' => ['required'],
            'content'
         */

        //
        $blogpost->update(['title', 'author', 'topic', 'content']);
        return redirect('/blogposts');
    }

    public function destroy(Blogpost $blogpost)
    {
        //
        $blogpost->delete();

        return redirect('/blogposts');
    }
}
