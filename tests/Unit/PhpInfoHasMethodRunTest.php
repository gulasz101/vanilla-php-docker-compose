<?php

declare(strict_types=1);

namespace Tests\Unit;

use App\PhpInfo;
use PHPUnit\Framework\TestCase;

class PhpInfoHasMethodRunTest extends TestCase
{
	public function testPositive(): void
	{
		$this->assertTrue(method_exists(new PhpInfo(), 'run'));
	}
}
