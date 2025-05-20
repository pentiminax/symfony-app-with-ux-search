<?php

namespace App\Search;

use App\Entity\Movie;
use Mezcalito\UxSearchBundle\Attribute\AsSearch;
use Mezcalito\UxSearchBundle\Search\AbstractSearch;

#[AsSearch(Movie::class)]
class MovieSearch extends AbstractSearch
{
    public function build(array $options = []): void
    {
        $this->addFacet('title', 'Titre');
    }
}
