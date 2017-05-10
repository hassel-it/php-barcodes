<?php

namespace HasselIT\Barcodes\Test;

use HasselIT\Barcodes\BarcodeValidator;

/**
 * Class BarcodeValidatorTest
 * @package HasselIT\Barcodes\Test
 */
class BarcodeValidatorTest extends \PHPUnit_Framework_TestCase
{

    public function testInit()
    {
        $validator = new BarcodeValidator('12345123');
        $this->assertInstanceOf('\HasselIT\Barcodes\BarcodeValidator', $validator);
    }

    public function testEan()
    {

        $validator = new BarcodeValidator('string123');
        $this->assertFalse($validator->isValid());

        $validator = new BarcodeValidator('001303050100');
        $this->assertFalse($validator->isValid());

        $validator = new BarcodeValidator('2100000030019');
        $this->assertTrue($validator->isValid());
        $this->assertSame('EAN_RESTRICTED', $validator->getType());

        $validator = new BarcodeValidator('570691542245');
        $this->assertTrue($validator->isValid());
        $this->assertSame('UPC_COUPON_CODE', $validator->getType());

        $validator = new BarcodeValidator('8838108476586');
        $this->assertTrue($validator->isValid());
        $this->assertSame('EAN', $validator->getType());
    }
}
