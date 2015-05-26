<?php

namespace Nilead\OmniNganLuong\Message;

use Nilead\OmniNganLuong\Message\CaptureRequest;
use Omnipay\Tests\TestCase;

class CaptureRequestTest extends TestCase
{
    /**
     * @var \Nilead\OmniNganLuong\Message\CaptureRequest
     */
    private $request;

    public function setUp()
    {
        $client = $this->getHttpClient();
        $request = $this->getHttpRequest();
        $this->request = new CaptureRequest($client, $request);
    }

    public function testGetData()
    {
        $this->request->setTransactionReference('ABC-123');
        $this->request->setAmount('1.23');
        $this->request->setCurrency('USD');
        $this->request->setUsername('testuser');
        $this->request->setPassword('testpass');
        $this->request->setSignature('SIG');
        $this->request->setSubject('SUB');

        $expected = array();
        $expected['METHOD'] = 'DoCapture';
        $expected['AUTHORIZATIONID'] = 'ABC-123';
        $expected['AMT'] = '1.23';
        $expected['CURRENCYCODE'] = 'USD';
        $expected['COMPLETETYPE'] = 'Complete';
        $expected['USER'] = 'testuser';
        $expected['PWD'] = 'testpass';
        $expected['SIGNATURE'] = 'SIG';
        $expected['SUBJECT'] = 'SUB';
        $expected['VERSION'] = CaptureRequest::API_VERSION;

        $this->assertEquals($expected, $this->request->getData());
    }
}
