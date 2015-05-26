<?php

namespace Nilead\OmniNganLuong\Message;

/**
 * Ngan Luong Fetch Checkout Details Request
 */
class ExpressFetchCheckoutRequest extends AbstractRequest
{
    public function getData()
    {
        $this->validate();

        $data = $this->getBaseData('GetExpressCheckoutDetails');

        return $data;
    }
}
