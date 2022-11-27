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
            '<div class="card" style="display:inline-block">
                <td>'.$post->name.'</td>
                <br>
                <td>'.$post->categoria->name.'</td>
                <br>
                    <th>
                        <img src="{{'.asset($post->foto).'}}" alt="image" width="200px">
                    </th>
            </div>';
        }
        return response($output);
    }
}
