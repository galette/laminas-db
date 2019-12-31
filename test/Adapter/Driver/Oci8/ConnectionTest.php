<?php
namespace LaminasTest\Db\Adapter\Driver\Oci8;

use Laminas\Db\Adapter\Driver\Oci8\Connection;
use Laminas\Db\Adapter\Driver\Oci8\Oci8;

class ConnectionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Connection
     */
    protected $connection;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->connection = new Connection(array());
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Laminas\Db\Adapter\Driver\Oci8\Connection::setDriver
     */
    public function testSetDriver()
    {
        $this->assertEquals($this->connection, $this->connection->setDriver(new Oci8(array())));
    }

    /**
     * @covers Laminas\Db\Adapter\Driver\Oci8\Connection::setConnectionParameters
     */
    public function testSetConnectionParameters()
    {
        $this->assertEquals($this->connection, $this->connection->setConnectionParameters(array()));
    }

    /**
     * @covers Laminas\Db\Adapter\Driver\Oci8\Connection::getConnectionParameters
     */
    public function testGetConnectionParameters()
    {
        $this->connection->setConnectionParameters(array('foo' => 'bar'));
        $this->assertEquals(array('foo' => 'bar'), $this->connection->getConnectionParameters());
    }

}
