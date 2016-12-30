<?php
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use PHPUnit\Framework\AssertionFailedError;

/**
 * Extension to PHPUnit_Framework_AssertionFailedError to mark the special
 * case of a skipped test suite.
 *
 * @since Class available since Release 3.1.0
 */
class PHPUnit_Framework_SkippedTestSuiteError extends AssertionFailedError implements PHPUnit_Framework_SkippedTest
{
}
