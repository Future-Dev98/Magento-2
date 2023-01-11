<?php

namespace Training\Custom\Plugin;

class TestPlugin
{

	public function beforeSetTitle(\Training\Custom\Controller\Index\Test $subject, $title)
	{
		$title = $title . " to ";
		echo __METHOD__ . "</br>";

		return [$title];
	}

    public function afterGetTitle(\Training\Custom\Controller\Index\Test $subject, $result)
	{

		echo __METHOD__ . "</br>";

		return '<h1>'. $result . 'Mageplaza.com' .'</h1>';

	}

    public function aroundGetTitle(\Training\Custom\Controller\Index\Test $subject, callable $proceed) {
        echo __METHOD__ . " - Before proceed() </br>";
		 $result = $proceed();
		echo __METHOD__ . " - After proceed() </br>";


		return $result;
    }
}