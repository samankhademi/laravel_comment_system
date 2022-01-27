<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;
use Symfony\Component\HttpFoundation\Response;
use function PHPUnit\Framework\throwException;

class BlogController extends Controller
{

    public function index(){
        $blogs = Blogs::all();

        return view('blog',['blogs' => $blogs]);
    }
    public function getById($blogId = 0){

        try {
            $blog = Blogs::where('id', $blogId)->first();
            if(!$blog->id) throwException('Post not found');
            return view('blog_item', ['blog' => $blog]);
        }catch (\Exception $error){
            return redirect('/blog');
        }

    }
}
