<?php

namespace PimpayBundle\Service;

use PimpayBundle\Handler\CryptoHandlerInterface;
use PimpayBundle\Model\AcceptClientParams;
use PimpayBundle\Model\Address;
use PimpayBundle\Model\ClientInfo;
use PimpayBundle\Model\CustomTransaction;
use PimpayBundle\Model\DeliveryStatusHistoryItem;
use PimpayBundle\Model\F103;
use PimpayBundle\Model\Order;
use PimpayBundle\Model\OrderBase;
use PimpayBundle\Model\OrderItem;
use PimpayBundle\Model\OrderParams;
use PimpayBundle\Model\OrderState;
use PimpayBundle\Model\PaymentOrder;
use PimpayBundle\Model\Recipient;
use PimpayBundle\Model\RussianPostPayment;
use PimpayBundle\Model\RussianPostPaymentInfo;
use PimpayBundle\Model\RussianPostPaymentsResponse;
use PimpayBundle\Model\UpsertResultItem;
use PimpayBundle\Model\UpsertResultResponse;
use PimpayBundle\Model\VerificationError;
use PimpayBundle\Model\VerificationRow;
use PimpayBundle\Model\VerificationStatusResponse;

/**
 * Class ApiService
 * @package PimpayBundle\Service
 */
class ApiService
{
    /**
     * @var string
     */
    private $wsdl;

    /**
     * @var string
     */
    private $token;

    /**
     * @var CryptoHandlerInterface
     */
    private $cryptoHandler;

    /**
     * @var SoapClientService
     */
    private $soapClient;

    /**
     * ApiService constructor.
     * @param array                  $params
     * @param CryptoHandlerInterface $cryptoHandler
     */
    public function __construct(array $params, CryptoHandlerInterface $cryptoHandler)
    {
        $this->wsdl = file_get_contents(__DIR__.'/../Resources/wsdl.xml');
        $this->token = $params['token'];
        $this->cryptoHandler = $cryptoHandler;
        $this->soapClient = new SoapClientService($this, 'data://text/xml;base64,'.base64_encode($this->wsdl), [
                'classmap' => [
                    'AcceptClientParams' => AcceptClientParams::class,
                    'ClientInfo' => ClientInfo::class,
                    'Order' => Order::class,
                    'OrderBase' => OrderBase::class,
                    'OrderParams' => OrderParams::class,
                    'DeliveryStatusHistoryItem' => DeliveryStatusHistoryItem::class,
                    'OrderState' => OrderState::class,
                    'OrderItem' => OrderItem::class,
                    'Address' => Address::class,
                    'Recipient' => Recipient::class,
                    'F103' => F103::class,
                    'PaymentOrder' => PaymentOrder::class,
                    'VerificationRow' => VerificationRow::class,
                    'CustomTransaction' => CustomTransaction::class,
                    'VerificationStatusResponse' => VerificationStatusResponse::class,
                    'VerificationError' => VerificationError::class,
                    'UpsertResultResponse' => UpsertResultResponse::class,
                    'UpsertResultItem' => UpsertResultItem::class,
                    'RussianPostPaymentsResponse' => RussianPostPaymentsResponse::class,
                    'RussianPostPaymentInfo' => RussianPostPaymentInfo::class,
                    'RussianPostPayment' => RussianPostPayment::class,
                ],
            ]
        );
    }

    /**
     * @return CryptoHandlerInterface
     */
    public function getCryptoHandler(): CryptoHandlerInterface
    {
        return $this->cryptoHandler;
    }

    /**
     * @param string $tin
     * @return mixed
     */
    public function getClient($tin)
    {
        return $this->soapClient->getClient($this->token, $tin);
    }
}
