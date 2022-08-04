<?php

namespace App\Repositories;

use App\Models\Post as Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

/**
 * Class PostRepository
 *
 * @package App\Repositories
 */

class PostRepository extends CoreRepository {

    private $category_slug;
    /**
     * @retutn string
     */
    protected function getModelClass() {
        return Model::class;
    }

    /**
     * Get model for editing in admin panel
     *
     * @param int $id
     *
     * @return Model
     */
    public function getEdit($id) {
        return $this->startConditions()->find($id);
    }

    /**
     * Get model for editing in admin panel
     *
     * @param int $id
     *
     * @return Model
     */
    public function getAllWithCategory($category_slug, $perPage = null) {
        $this->category_slug = $category_slug;
        $result = $this->startConditions()
            ->orderBy('id', 'DESC')
            ->with('category')
            ->whereHas('category', function($query){
                $query->where('slug', $this->category_slug);
            })
            ->paginate($perPage);

        return $result;
    }

    /**
     * @param int $perPage
     *
     * @return Illuminate\Contracts\Pagination\Paginator
     */

    public function getAllWithPaginate($perPage = null)
    {
        $columns = implode(', ', [
            'id',
            'title_uz',
            'title_ru',
            'title_en',
            'img',
            'text_uz',
            'text_ru',
            'text_en',
            'DAY(created_at) AS day',
            'CAST(MONTHNAME(created_at) AS CHAR(3)) AS month',
            // 'user_id',
            'category_id'
        ]);

        $result = $this->startConditions()
            ->selectRaw($columns)
            ->orderBy('id', 'DESC')
            ->with([
                'category:id,title_uz',
                // 'user:id,name'
            ])
            ->paginate($perPage);

        return $result;
    }
}
