<?php

namespace Nilead\OmniNganLuong\Message;

/**
 * NganLuong Pro Purchase Request
 */
class ProPurchaseRequest extends ProAuthorizeRequest
{
    protected $action = 'Sale';
}
