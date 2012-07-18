<?php
/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-07-10 at 02:00:19.
 */
class PHPCtagsTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var PHPCtags
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $options = array(
            'excmd' => 'pattern',
            'fields' => array('n','k','s','S','a'),
            'format' => 2,
        );

        $this->object = new PHPCtags(__DIR__ . '/PHPCtagsTest.example.php', $options);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers PHPCtags::export
     */
    public function testExport()
    {
        $this->object->export();
    }

}