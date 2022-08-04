<?php

namespace App\Observers;
use App\Models\Post;

class PostObserver
{
    // public function retrieved(Post $post){dd(__METHOD__);}
    // public function saving(Post $post){dd(__METHOD__);}
    // public function saved(Post $post){dd(__METHOD__);}

    /**
     * Handle the Post "created" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function creating(Post $post)
    {
        $this->setUser($post);
        // return $post->user_id = $post->user_id ?? \Auth::id();
    }

    /**
     * Handle the Post "saving" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */

    public function saving(Post $post)
    {
        $this->setSlug($post);
        $this->setTitle($post);
    }

    /**
     * Set slug for \App\Models\Post $post
     *  @param  \App\Models\Post  $post
     * @return void
     */
    private function setSlug(Post $post)
    {
        if (empty($post->slug)) {
            $post->slug = \Str::slug($post->title_uz);
        }
    }

    /**
     * If title_ur or title_en is empty set them for \App\Models\Post $post
     *  @param  \App\Models\Post  $post
     * @return void
     */
    private function setTitle(Post $post)
    {
        if (empty($post->title_ru)) {
            $post->title_ru = $post->title_uz;
        }

        if (empty($post->short_ru)) {
            $post->short_ru = $post->short_uz;
        }

        if (empty($post->text_ru)) {
            $post->text_ru = $post->text_uz;
        }

        if (empty($post->title_en)) {
            $post->title_en = $post->title_uz;
        }

        if (empty($post->short_en)) {
            $post->short_en = $post->short_uz;
        }

        if (empty($post->text_en)) {
            $post->text_en = $post->text_uz;
        }
    }

    /**
     * Set user for \App\Models\Post $post
     *  @param  \App\Models\Post  $post
     * @return void
     */
    private function setUser(Post $post)
    {
        $post->user_id = $post->user_id ?? auth()->id();
    }
}
