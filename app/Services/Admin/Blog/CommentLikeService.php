<?php

namespace App\Services\Admin\Blog;

use App\Models\Admin\Blog\Comment;
use App\Models\Admin\Blog\CommentLike;
use App\Services\Admin\Misc\SystemService;
use App\Services\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class CommentLikeService extends Service{

    public function save($commentLike)
    {
        $commentLikeOrg = CommentLike::where('comment_id', $commentLike['comment_id'])
                            ->where('ip', SystemService::get_ip())
                            ->first();
        if ($commentLikeOrg==null){
            $commentLike = CommentLike::create([
                'comment_id' => $commentLike['comment_id'],
                'ip' => SystemService::get_ip(),
                'type' => $commentLike['type']
            ]);
        }else{
            // if active then do unactive (ONLY IF TYPE IS SAME)
            if ($commentLikeOrg->status==Config::get('status.active') && $commentLikeOrg->type==$commentLike['type']){
                $commentLikeOrg->update(['status' => Config::get('status.delete')]);
            }else{
                $commentLikeOrg->update([
                    'type' => $commentLike['type'],
                    'status' => Config::get('status.active')
                ]);
            }

            $commentLike = $commentLikeOrg;
        }

        $commentLikeCount = Comment::withCount(['likes', 'dislikes'])
                                    ->where('id', $commentLike['comment_id'])
                                    ->first(['likes_count', 'dislikes_count']);

        return $commentLikeCount;
    }

    public function validate(Request $request)
    {
        $validated = $request->validate([
            'comment_id' => 'required',
            'type' => 'required',
        ]);

        return $validated;
    }

}