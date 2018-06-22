<?php
namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function getTimeline()
    {
        $posts = Post::all();
        return view('timeline', ['posts' => $posts]);
    }

    public function postCreatePost(Request $request)
    {
        // Validation
        $this->validate($request, [
          'body' => 'required|max:1000',
          'cover_img' => 'image|nullable|max:1999'
        ]);

        // Handle file upload
        if ($request->hasFile('cover_img')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_img')->getClientOriginalName();
            // Get just $filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_img')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Uplead Image
            $path = $request->file('cover_img')->storeAs('public/cover_img', $fileNameToStore);
        } else {
          $fileNameToStore = 'noimage.jpg';
        }

        $post = new Post();
        $post->body = $request['body'];
        $post->cover_img = $fileNameToStore;
        $message = 'There was an error';
        if ($request->user()->posts()->save($post)) {
            $message = 'Post Successfully created!';
        };

        return redirect()->route('timeline')->with(['message' => $message]);
    }
}
