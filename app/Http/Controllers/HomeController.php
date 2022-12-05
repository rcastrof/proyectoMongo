<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
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
        $categorias = Categoria::all();
        return view('home', compact('posts', 'categorias'));
    }
    public function search(Request $request)
    {
        $output ="";
        $post=Post::where('name','Like','%'.$request->search.'%')->get();
        foreach($post as $post)
        {
            $output.=
            '
            <div class="cardpost">
            <a style="text-decoration: none" href="'.route('posts.show', [$post]).'">

                <div class="heading-card">
                    <td>'.$post->name.'</td>
                </div>

                <div class="headingcategoria-card">
                    <td>'.$post->categoria->name.'</td>
                </div>

                <div class="imagenDiv">
                    <img src="'.$post->foto.'" alt="image" width="200px" >
                </div>
                </a>

            </div>
            ';
        }
        return response($output);
    }
}
