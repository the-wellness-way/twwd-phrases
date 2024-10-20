<?php
namespace TwwdPhrases\Tests;

class Test_TwwdPhrases extends \WP_UnitTestCase {
    public function test_instance() {
        $this->assertInstanceOf(\TwwdPhrases::class, new \TwwdPhrases());
    }
}