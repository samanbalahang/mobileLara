<?php

namespace App\Http\Controllers\admin;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\admin\HelperController;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
    public function thePublicIndex()
    {
        return view('thepublic.index');
    }
    public function thePublicPosts()
    {
        return view('thepublic.posts');
    }
    public function thePublicProduct(Post $post,$uri)
    {
        return view('thepublic.product');
    }
    public function thePublicShop()
    {
        return view('thepublic.shop');
    }
    
    public function test()
    {   
        $helper = new HelperController;
        echo $helper->createhash('kodexadmin@example.com',4);
    }

}
