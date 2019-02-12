<?php

namespace ImLiam\IndefiniteArticle\Tests\Unit;

use ImLiam\IndefiniteArticle\Tests\TestCase;
use ImLiam\IndefiniteArticle\IndefiniteArticle;

class IndefiniteArticleTest extends TestCase
{
    /** @test */
    public function given_phrases_return_the_correct_articles()
    {
        // Valid "a" articles
        $this->assertEquals('a frog', (new IndefiniteArticle('frog'))->parse());
        $this->assertEquals('a universe', (new IndefiniteArticle('universe'))->parse());
        $this->assertEquals('a house is big', (new IndefiniteArticle('house is big'))->parse());
        $this->assertEquals('a hound', (new IndefiniteArticle('hound'))->parse());
        $this->assertEquals('a hotel', (new IndefiniteArticle('hotel'))->parse());
        $this->assertEquals('a German', (new IndefiniteArticle('German'))->parse());
        $this->assertEquals('a Ukranian', (new IndefiniteArticle('Ukranian'))->parse());
        $this->assertEquals('a euphenism', (new IndefiniteArticle('euphenism'))->parse());
        $this->assertEquals('a normal', (new IndefiniteArticle('normal'))->parse());
        $this->assertEquals('a xylophone', (new IndefiniteArticle('xylophone'))->parse());
        $this->assertEquals('a unanimous vote', (new IndefiniteArticle('unanimous vote'))->parse());
        $this->assertEquals('a honeysuckle shrub', (new IndefiniteArticle('honeysuckle shrub'))->parse());
        $this->assertEquals('a NASA scientist', (new IndefiniteArticle('NASA scientist'))->parse());
        $this->assertEquals('a FIAT car', (new IndefiniteArticle('FIAT car'))->parse());
        $this->assertEquals('a use', (new IndefiniteArticle('use'))->parse());
        $this->assertEquals('a useless', (new IndefiniteArticle('useless'))->parse());
        $this->assertEquals('a user', (new IndefiniteArticle('user'))->parse());

        // Valid "an" articles
        $this->assertEquals('an apple', (new IndefiniteArticle('apple'))->parse());
        $this->assertEquals('an exclamation mark is small', (new IndefiniteArticle('exclamation mark is small'))->parse());
        $this->assertEquals('an honest man', (new IndefiniteArticle('honest man'))->parse());
        $this->assertEquals('an umbrella', (new IndefiniteArticle('umbrella'))->parse());
        $this->assertEquals('an hour', (new IndefiniteArticle('hour'))->parse());
        $this->assertEquals('an American', (new IndefiniteArticle('American'))->parse());
        $this->assertEquals('an Euler number', (new IndefiniteArticle('Euler number'))->parse());
        $this->assertEquals('an XPath', (new IndefiniteArticle('XPath'))->parse());
        $this->assertEquals('an example', (new IndefiniteArticle('example'))->parse());
        $this->assertEquals('an egg', (new IndefiniteArticle('egg'))->parse());
        $this->assertEquals('an MRI scan', (new IndefiniteArticle('MRI scan'))->parse());
        $this->assertEquals('an unanticipated result', (new IndefiniteArticle('unanticipated result'))->parse());
        $this->assertEquals('an ∞ of oregano', (new IndefiniteArticle('∞ of oregano'))->parse());
        $this->assertEquals('an NSA analyst', (new IndefiniteArticle('NSA analyst'))->parse());
        $this->assertEquals('an FAA policy', (new IndefiniteArticle('FAA policy'))->parse());
        $this->assertEquals('an heir', (new IndefiniteArticle('heir'))->parse());
        $this->assertEquals('an heirloom', (new IndefiniteArticle('heirloom'))->parse());
        $this->assertEquals('an Uzbekistani', (new IndefiniteArticle('Uzbekistani'))->parse());
    }

    /** @test */
    public function it_can_process_a_large_word_list()
    {
        $wordList = include_once(__DIR__ . '/../fixtures/words.php');

        foreach ($wordList as $word) {
            (new IndefiniteArticle($word))->parse();
        }

        $this->addToAssertionCount(1);
    }
}
