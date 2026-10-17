<?php
/**
 * Tests for CandleSignal
 */

use PHPUnit\Framework\TestCase;
use Candlesignal\Candlesignal;

class CandlesignalTest extends TestCase {
    private Candlesignal $instance;

    protected function setUp(): void {
        $this->instance = new Candlesignal(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Candlesignal::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
