<?php
namespace Eternus\BookInfoAdmin\Block\Adminhtml;

class Post extends \Magento\Backend\Block\Widget\Grid\Container
{

	protected function _construct()
	{
		$this->_controller = 'adminhtml_records';
		$this->_blockGroup = 'Eternus_BookInfoAdmin';
		$this->_headerText = __('Records');		
		parent::_construct();
	}
}