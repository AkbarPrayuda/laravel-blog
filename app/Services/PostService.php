<?php

namespace App\Services;

use App\Models\Post;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class PostService {

    public function getAllPosts($perPage = 6) {
        $page = request()->get('page', 1);
        $cacheKey = "get-all-posts-page-{$page}-{$perPage}";

        if (!Cache::has($cacheKey)) {
            Cache::remember($cacheKey, 3000, function () use ($perPage) {
                return Post::with('user')->paginate($perPage);
            });
        }

        Log::info("Mengambil data untuk halaman {$page}");
        return Cache::get($cacheKey);
    }

    public function getPostBySlug($slug) {
        $cacheKey = "get-post-by-slug-{$slug}";
        if (!Cache::has($cacheKey)) {
            Cache::remember($cacheKey, 3000, function () use ($slug) {
                return Post::where('slug', $slug)->first();
            });
        }
        return Cache::get($cacheKey);
    }
}
