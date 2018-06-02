<?php

namespace SubjectivePHPTest\Spl\Exceptions;

use SubjectivePHP\Spl\Exceptions\UndefinedPropertyException;
use LogicException;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \SubjectivePHPTest\Spl\Exceptions\UndefinedPropertyException
 */
final class UndefinedPropertyExceptionTest extends TestCase
{
    /**
     * @test
     */
    public function basicUsage()
    {
        $previous = new \RuntimeException();
        $exception = new UndefinedPropertyException('the message', 1, $previous);
        $this->assertSame('the message', $exception->getMessage());
        $this->assertSame(1, $exception->getCode());
        $this->assertSame($previous, $exception->getPrevious());
        $this->assertInstanceOf(LogicException::class, $exception);
    }
}
