<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostComment;

class PostController extends Controller
{


	public function index() {
		$posts = Post::first();
		$postcomments = PostComment::first();
        return view('index', compact('posts','postcomments'));
	}



	public function addpost() {                                 $posts = Post::all();                             $postcomments = PostComment::all();                                                         return view('add_post');                             }                                                                                                                                                                                                                                                      
	
	
	
	public function addpostcomment() {                                 $posts = Post::all();                             $postcomments = PostComment::all();                                                         return view('add_post_comment');                             }



	public function editpost() {                                 $posts = Post::first();                             $postcomments = PostComment::first();                                                         return view('edit_post', compact('posts','postcomments'));                             }




	public function editpostcomment() {                                 $posts = Post::first();                             $postcomments = PostComment::first();                                                         return view('edit_post_comment', compact('posts','postcomments'));                             }





	// Add post
	
	public function uploadpost(Request $request, Post $post) {                              //   $posts = Post::all();                        //     $postcomments = PostComment::all();   


	if (empty($request->name) && empty($request->username) && empty($request->post) && empty($request->like)) {                     
		return back()->with('error', 'Inpu
t can\'t be empty!!!');                                       }	

$post = $request->validate([                     // 'category_id' => ['required', 'min:1'],                                                           //  'subcategory_id' => ['required', 'min:1'],                                                        
      	'name' => ['required', 'min:1'],                  'username' => ['required', 'min:1'],              'email' => [],                                    'post' => ['required', 'min:1'],                  'comment' => [],                                  'repost' => [],                                   'like' => [],                                     'view' => [],                                     'share' => [],                                    'image' => ['mimes:jpg,png,jpeg,webp,svg,gif', 'max:1000000']                           ]);



	$request->image->move(public_path('assets/img'));
        $post['image'] = 'postuserpicture.jpg';



	Post::create($post);


	return back()->with('success', 'Post upload successfully.');
	}





	// Update

	public function updatepost(Request $request, Post $posts)
    {


	    if (empty($request->name) && empty($request->username) && empty($request->post) && empty($request->like)) {                                                   return back()->with('error', 'Input can\'t be empty!!!');
	    }


	    $post = $request->validate([
           // 'category_id' => ['required', 'min:1'],
           // 'subcategory_id' => ['required', 'min:1'],
            'name' => ['required', 'min:1'],
            'username' => ['required', 'min:1'],
            'email' => [],
            'post' => ['required', 'min:1'],
            'comment' => [],
	    'repost' => [],
	    'like' => [],
	    'view' => [],
	    'share' => [],
            'image' => ['mimes:jpg,png,jpeg,webp,svg,gif', 'max:1000000']
	    ]);

if (!empty($request->image)) {
	 $newImageName = time() . '-' . $request->name . '.' . $request->image->extension();
        $request->image->move(public_path('assets/img'), $newImageName);
        $post['image'] = $newImageName;
        }


      $posts->update($post);

        return back()->with('success', 'Post updated successfully.');
	}








//





	// Add post comment

        public function uploadpostcomment(Request $request, PostComment $postcomment)
	{

		if (empty($request->post_id) && empty($request->name) && empty($request->username) && empty($request->post) && empty($request->like)) {                                                   return back()->with('error', 'Input can\'t be empty!!!');
		}

	
		$post = $request->validate([    		// 'category_id' => ['required', 'min:1'],   
			//	'subcategory_id' => ['required', 'min:1'],    
			
			'post_id' => ['required', 'min:1'],
			'name' => ['required', 'min:1'],                  'username' => ['required', 'min:1'],              'email' => [],                                    'post' => ['required', 'min:1'],                  'comment' => [],                                  'repost' => [],                                   'like' => [],                                     'view' => [],                                     'share' => [],                                    'image' => ['mimes:jpg,png,jpeg,webp,svg,gif', 'max:1000000']                           ]);


    if (!empty($request->image)) {
        $request->image->move(public_path('assets/img'));
        $post['image'] = 'postcommentuserpicture.jpg';
}



	PostComment::create($post);


        return back()->with('success', 'Post upload successfully.');
        }





        // Update comment post

        public function updatepostcomment(Request $request, PostComment $postcomments)
    {



	    if (empty($request->post_id) && empty($request->name) && empty($request->username) && empty($request->post) && empty($request->like)) {                                                   return back()->with('error', 'Input can\'t be empty!!!');

	    }

            $posts = $request->validate([
            
            'post_id' => ['required', 'min:1'],
            'name' => ['required', 'min:1'],
            'username' => ['required', 'min:1'],
            'email' => [],
            'post' => ['required', 'min:1'],
            'comment' => [],
            'repost' => [],
            'like' => [],
            'view' => [],
            'share' => [],
            'image' => ['mimes:jpg,png,jpeg,webp,svg,gif', 'max:1000000']
            ]);


if (!empty($request->image)) {

	    $newImageName = time() . '-' . $request->name . '.' . $request->image->extension();                $request->image->move(public_path('assets/img'), $newImageName);                                    $posts['image'] = $newImageName;
	    }



      $postcomments->update($posts);

        return back()->with('success', 'Post Comment updated successfully.');
        }



}
