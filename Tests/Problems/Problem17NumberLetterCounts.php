<?php
namespace Tests\Problems;

use Problems\Problem17NumberLetterCounts;

class Problem17NumberLetterCountsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Problem17NumberLetterCounts
     */
    private $objProblem17;

    public function setUp()
    {
        $this->objProblem17 = new Problem17NumberLetterCounts();
    }
    public function testInstance()
    {
        $this->assertInstanceOf(
            Problem17NumberLetterCounts::class,
            $this->objProblem17
        );
    }

    public function testGetTotalWordsCountByNumber()
    {
        $this->assertEquals(
            21124,
            $this->objProblem17->getTotalWordsCountByNumber(1000)
        );
    }
}