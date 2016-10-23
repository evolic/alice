<?php

/*
 * This file is part of the Alice package.
 *
 * (c) Nelmio <hello@nelm.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nelmio\Alice\Exception;

use Nelmio\Alice\Throwable\BuildThrowable;

class RootBuildException extends \Exception implements BuildThrowable
{
}