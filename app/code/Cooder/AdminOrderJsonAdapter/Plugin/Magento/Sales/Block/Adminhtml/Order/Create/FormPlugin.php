<?php
 
namespace Cooder\AdminOrderJsonAdapter\Plugin\Magento\Sales\Block\Adminhtml\Order\Create;

/**
 * Plugin per oggetto Magento\Sales\Block\Adminhtml\Order\View
 * 
 * @author Devid Marcantoni <devid@cooder.it>
 */
class FormPlugin 
{
	
	/**
	 * Sostuisco single quote nel json
	 * 
	 * @param \Magento\Sales\Block\Adminhtml\Order\Create $subject
	 * @param string $result
	 * 
	 * @return string
	 */
	public function afterGetOrderDataJson(\Magento\Sales\Block\Adminhtml\Order\Create\Form $subject, $result)
	{
		return str_replace("'", "&#39;", $result);
	}
	
}