<?php
namespace ISD\ShippingCountryNotice\Model\Checkout;

class LayoutProcessorPlugin
{
    /**
     * @param \Magento\Checkout\Block\Checkout\LayoutProcessor $subject
     * @param array $jsLayout
     * @return array
     */

    public function afterProcess(
        \Magento\Checkout\Block\Checkout\LayoutProcessor $subject,
        array  $jsLayout
    ) {
        $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']
            ['children']['shippingAddress']['children']['shipping-address-fieldset']['children']['country_id']['notice'] = 'Should you wish for your purchase to be shipped internationally, please <a href="/contact">contact us</a>'; 
        return $jsLayout;
    }
}