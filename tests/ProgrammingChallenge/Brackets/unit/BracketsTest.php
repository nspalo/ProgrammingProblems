<?php

declare(strict_types=1);

namespace ProgrammingChallenge\Brackets\unit;

use ProgrammingChallenge\BaseTest;
use ProgrammingChallenge\Brackets\Bracket;

/**
 * Class TestBrackets
 * @package Brackets\unit
 */
final class BracketsTest extends BaseTest
{
    /**
     * @var Bracket
     */
    private Bracket $bracket;

    public function setUp(): void
    {
        parent::setUp();

        /**
         * Initialize the ArmstrongNumber Class
         */
        $this->bracket = new Bracket();
    }

    /**
     * Test nested brackets is empty
     */
    public function testEvaluateNestedBrackets0(): void
    {
        $brackets = "";
        $result = $this->bracket->solution($brackets);

        $this->displayMessage((string)$brackets, (string)$result);
        self::assertTrue($result);
    }

    /**
     * Test nested brackets is {
     */
    public function testEvaluateNestedBrackets1(): void
    {
        $brackets = "{";
        $result = $this->bracket->solution($brackets);

        $this->displayMessage((string)$brackets, (string)$result);
        self::assertFalse($result);
    }

    /**
     * Test nested brackets []
     */
    public function testEvaluateNestedBrackets2(): void
    {
        $brackets = "[]";
        $result = $this->bracket->solution($brackets);

        $this->displayMessage((string)$brackets, (string)$result);
        self::assertTrue($result);
    }

    /**
     * Test nested brackets [])
     */
    public function testEvaluateNestedBrackets3(): void
    {
        $brackets = "[])";
        $result = $this->bracket->solution($brackets);

        $this->displayMessage((string)$brackets, (string)$result);
        self::assertFalse($result);
    }

    /**
     * Test nested brackets {[[)(]]}
     */
    public function testEvaluateNestedBrackets4(): void
    {
        $brackets = "{[()()]}";
        $result = $this->bracket->solution($brackets);

        $this->displayMessage((string)$brackets, (string)$result);
        self::assertTrue($result);
    }

    /**
     * Test nested brackets []()[
     */
    public function testEvaluateNestedBrackets5(): void
    {
        $brackets = "([)()]";
        $result = $this->bracket->solution($brackets);

        $this->displayMessage((string)$brackets, (string)$result);
        self::assertFalse($result);
    }

    /**
     * Test nested brackets {[)(]{(}{)}}
     */
    public function testEvaluateNestedBrackets6(): void
    {
        $brackets = "{[)(]{(}{)}}";
        $result = $this->bracket->solution($brackets);

        $this->displayMessage((string)$brackets, (string)$result);
        self::assertTrue($result);
    }

    /**
     * Test nested brackets [{}([]{})[{()}]]
     */
    public function testEvaluateNestedBrackets7(): void
    {
        $brackets = "[{}([]{})[{()}]]";
        $result = $this->bracket->solution($brackets);

        $this->displayMessage((string)$brackets, (string)$result);
        self::assertTrue($result);
    }

    /**
     * Test nested brackets []()[
     */
    public function testEvaluateNestedBrackets8(): void
    {
        $brackets = "[]()[";
        $result = $this->bracket->solution($brackets);

        $this->displayMessage((string)$brackets, (string)$result);
        self::assertFalse($result);
    }

    /**
     * Test nested brackets [(][){}(])
     */
    public function testEvaluateNestedBrackets9(): void
    {
        $brackets = "[(][){}(])";
        $result = $this->bracket->solution($brackets);

        $this->displayMessage((string)$brackets, (string)$result);
        self::assertFalse($result);
    }
}