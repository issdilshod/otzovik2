<?php

namespace App\Services\Admin\Blog;

use App\Models\Admin\Blog\Comment;
use App\Services\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class CommentService extends Service{

    public function save($comment, $id = '')
    {
        if ($id == ''){ // create
            $comment = Comment::create($comment);
            // TODO: notify
        }else{ // update
            $comment = Comment::where('id', $id)
                            ->where('status', '!=', Config::get('status.delete'))
                            ->update($comment);
        }

        return $comment;
    }

    public function validate(Request $request)
    {
        $validated = $request->validate([
            'article_id' => 'required',
            'text' => 'required',
            'star' => 'required',
            'reply_id' => '',

            'status' => ''
        ]);

        // TODO: calculate number

        return $validated;
    }

}