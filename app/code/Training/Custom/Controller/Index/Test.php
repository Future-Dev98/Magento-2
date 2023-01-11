<?php
namespace Training\Custom\Controller\Index;

class Test extends \Magento\Framework\App\Action\Action
{

	public function execute()
	{
		$textDisplay = new \Magento\Framework\DataObject(array('text' => 'Training'));
		$this->_eventManager->dispatch('training_custom_display_text', ['mp_text' => $textDisplay]);
        $this->setTitle('Welcome');
		echo $this->getTitle().' '.$textDisplay->getText();
		exit;
	}

    public function setTitle($title)
	{
		return $this->title = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}
}