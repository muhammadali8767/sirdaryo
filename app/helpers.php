<?php

use App\Models\StaticPage;

function getPage($page_id) {
    $page = StaticPage::find($page_id)->first();
    if ($page)
        return [
            'title' => $page->title,
            'link' => route('page', $page->slug)
        ];
    return [
        'title' => '',
        'link' => ''
    ];
}
