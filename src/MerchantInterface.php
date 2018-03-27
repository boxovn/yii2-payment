<?php
/**
 * @link https://github.com/yii2-vn/payment
 * @copyright Copyright (c) 2017 Yii2VN
 * @license [New BSD License](http://www.opensource.org/licenses/bsd-license.php)
 */


namespace yii2vn\payment;


/**
 * @package yii2vn\payment
 *
 * @author Vuong Minh <vuongxuongminh@gmail.com>
 * @since 1.0
 */
interface MerchantInterface extends CheckoutDataInterface
{

    public function getPaymentGateway(): PaymentGatewayInterface;

    public function setPaymentGateway(PaymentGatewayInterface $paymentGateway): bool;

    public function signature(): string;

    public function validateSignature(): bool;

}