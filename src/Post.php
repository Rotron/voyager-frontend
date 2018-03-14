<?php

namespace Pvtl\VoyagerFrontend;

use Laravel\Scout\Searchable;

class Post extends \TCG\Voyager\Models\Post
{
    use Searchable;

    public $asYouType = false;

    /**
     * Get the indexed data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        $array = $this->toArray();
        return $array;
    }

    /**
     * Update the post slug
     *
     * @param  string  $value
     * @return string
     */
    public function getSlugAttribute($value)
    {
        if (!empty($value)) {
            return 'posts/' . $value;
        }
    }
}
