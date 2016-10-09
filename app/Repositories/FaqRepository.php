<?php

namespace App\Repositories;

use App\Models\Faq;

class FaqRepository extends BaseRepository
{
    /**
     * Create a new FaqRepository instance.
     *
     * @param  \App\Models\Faq $faq
     * @return void
     */
    public function __construct(Faq $faq)
    {
        $this->model = $faq;
    }
}
