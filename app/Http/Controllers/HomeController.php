<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::paginate();
        return view('home', compact('posts'));
    }
    public function search(Request $request)
    {
        $output ="";
        $post=Post::where('name','Like','%'.$request->search.'%')->get();
        foreach($post as $post)
        {
            $output.=
            '<div class="cardpost">
                <div class="heading-card">
                    <td>'.$post->name.'</td>
                </div>

                <div class="headingcategoria-card">
                    <td>'.$post->categoria->name.'</td>
                </div>

                <div class="card-bodypost">
                    <p>Agregar descripcion</p>
                </div>

                <div class="">
                    <img src="'.$post->foto.'" alt="image" width="200px">
                </div>
            </div>';
        }
        return response($output);
    }
}
