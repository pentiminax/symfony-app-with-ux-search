<?php

namespace App\Factory;

use App\Entity\Movie;
use Zenstruck\Foundry\Persistence\PersistentProxyObjectFactory;

/**
 * @extends PersistentProxyObjectFactory<Movie>
 */
final class MovieFactory extends PersistentProxyObjectFactory
{
    public static function class(): string
    {
        return Movie::class;
    }

    protected function defaults(): array
    {
        return [
            'title' => self::faker()->text(30),
        ];
    }

    protected function initialize(): static
    {
        return $this;
    }
}
