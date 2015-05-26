<?php

namespace Nilead\OmniNganLuong\Message;

/**
 * PayPal Express Complete Purchase Request
 */
class ExpressCompletePurchaseRequest extends ExpressCompleteAuthorizeRequest
{
    protected $action = 'Sale';
}
