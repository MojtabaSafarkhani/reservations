<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::query()->with(['user', 'hotel'])->paginate(6);

        return view('admin.comments.index', [
            'comments' => $comments
        ]);
    }

    public function destroy(Comment $comment)
    {
        if ($comment->children()->count() > 0) {
            session()->flash('delete',
                "کامنت به دليل داشتن زير مجموعه قابل حذف نيست"
            );
            return redirect(route('admin.comments.index'));
        }

        $comment->delete();
        
        return redirect(route('admin.comments.index'));
    }
}
