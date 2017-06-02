<?php

namespace WebChemistry\Testing\Components\Helpers;

use Nette\Application\UI\Presenter;

class FakePresenter extends Presenter {

	/** @var array */
	public $startupComponents = [];

	protected function startup() {
		parent::startup();

		foreach ($this->startupComponents as $name => $component) {
			$this->addComponent($component, $name);
		}
	}

	protected function afterRender() {
		parent::afterRender();

		$this->terminate();
	}

}
