<?php

declare(strict_types = 1);

/*
 * This file is part of the Snowtricks project.
 *
 * (c) Romain Bayette <romain.romss@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Domain\Builder\Interfaces;

use App\Domain\Models\Interfaces\PicturesInterface;

/**
 * Interface PictureFactoryInterface
 *
 * @author Romain Bayette <romain.romss@gmail.com>
 */
interface PictureFactoryInterface
{
  public function create(
    string $name,
    string $legend,
    bool $first
  ): PicturesInterface;
}