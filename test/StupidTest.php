Skip to content
This repository
Search
Pull requests
Issues
Gist
 @dorin1995
 Sign out
 Watch 0
  Star 0
 Fork 3 frompierro/php-test
forked from antonio-pierro/php-test
 Code  Pull requests 0  Projects 0  Wiki  Pulse  Graphs  Settings
Branch: master Find file Copy pathphp-test/tests/IndexTest.php
0d429e1  12 days ago
@antonio-pierro antonio-pierro Added RegExp test
1 contributor
RawBlameHistory     
48 lines (35 sloc)  993 Bytes
<?php
namespace PHPUnit\Framework\Tests;
use \PHPUnit\Framework\DOMTestCase;
class IndexTest extends DOMTestCase
{
    private $html;
    protected function setUp()
    {
        $this->html = file_get_contents('index.php');
    }
    public function testTagContent()
    {
        $selector = 'h1.title';
        $content  = 'Test title text';
        $this->assertSelectEquals($selector, $content, true, $this->html);
    }
    public function testClassContent()
    {
        $selector = 'div.foo';
        $content  = 'Test class text';
        $this->assertSelectEquals($selector, $content, true, $this->html);
    }
    public function testCountList()
    {
        $selector = 'ul > li';
        $count    = 2;
        $this->assertSelectCount($selector, $count, $this->html);
    }
    public function testRegExpContent()
    {
        $selector = 'div.bar';
        $regexp   = '/Pierro/';
        $this->assertSelectRegExp($selector, $regexp, true, $this->html);
    }
}
Contact GitHub API Training Shop Blog About
© 2017 GitHub, Inc. Terms Privacy Security Status Help
