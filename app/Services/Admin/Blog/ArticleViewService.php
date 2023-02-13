<?php

namespace App\Services\Admin\Blog;

use App\Models\Admin\Blog\ArticleView;
use App\Services\Admin\Misc\SystemService;
use App\Services\Service;
use Carbon\Carbon;

class ArticleViewService extends Service{

    public function store($articleId)
    {
        //
        $articleView = ArticleView::where('article_id', $articleId)
                            ->where('ip', SystemService::get_ip())
                            ->whereBetween('updated_at', [Carbon::now()->subMinute(3), Carbon::now()])
                            ->first();
        if ($articleView==null){
            ArticleView::create([
                'article_id' => $articleId,
                'ip' => SystemService::get_ip()
            ]);
        }
        return true;
    }

}