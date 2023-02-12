<?php

namespace App\Services\Admin\Blog;

use App\Models\Admin\Blog\Article;
use App\Services\Admin\Misc\StringService;
use App\Services\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class ArticleService extends Service{

    public function findAll($name = '')
    {
        $articles = Article::where('status', '!=', Config::get('status.delete'))
                        ->orderBy('updated_at', 'desc')
                        ->paginate(Config::get('pagination.per_page'));
        return $articles;
    }

    public function find($id)
    {
        $article = Article::where('status', '!=', Config::get('status.delete'))
                        ->where('id', $id)
                        ->first();
        return $article;
    }

    public function save($article, $id = '')
    {
        // slug
        if ($article['slug']==''){
            $article['slug'] = StringService::slug($article['title']);
        }

        // cover
        if ($article['cover']==null){
            unset($article['cover']);
        }

        if ($id == ''){ // add
            $article = Article::create($article);
        }else{ // update
            $articleOrg = Article::where('id', $id)
                            ->first();
            $articleOrg->update($article);
            $article = $articleOrg;
        }

        return $article;
    }

    public function delete($id)
    {
        Article::where('id', $id)
            ->update(['status' => Config::get('status.delete')]);
        return true;
    }

    public function validate(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'text' => 'required',
            'slug' => '',
            'current_user_id' => '',
        ]);

        return $validated;
    }
    
}