<?php namespace ILIAS\GlobalScreen\Scope\MainMenu\Collector\Renderer;

use ILIAS\GlobalScreen\Scope\MainMenu\Factory\hasSymbol;
use ILIAS\GlobalScreen\Scope\MainMenu\Factory\isItem;
use ILIAS\GlobalScreen\Scope\Tool\Factory\Tool;
use ILIAS\UI\Component\Component;
use ILIAS\UI\Component\Symbol\Symbol;
use ILIAS\UI\Factory;

/**
 * Class BaseTypeRenderer
 *
 * @author Fabian Schmid <fs@studer-raimann.ch>
 */
class BaseTypeRenderer implements TypeRenderer {

	/**
	 * @var Factory
	 */
	protected $ui_factory;


	/**
	 * BaseTypeRenderer constructor.
	 */
	public function __construct() {
		global $DIC;
		$this->ui_factory = $DIC->ui()->factory();
	}


	/**
	 * @inheritDoc
	 */
	public function getComponentForItem(isItem $item): Component {
		if ($item instanceof Tool) {
			$symbol = $this->getStandardSymbol($item);

			return $this->ui_factory->mainControls()->slate()->legacy($item->getTitle(), $symbol, $item->getContent());
			// return $item->getContent();
		}

		return $this->ui_factory->legacy("");
	}


	/**
	 * @param isItem $item
	 *
	 * @return Symbol
	 */
	protected function getStandardSymbol(isItem $item): Symbol {
		if ($item instanceof hasSymbol && $item->hasSymbol()) {
			return $item->getSymbol();
		}

		return $this->ui_factory->symbol()->icon()->custom("./src/UI/examples/Layout/Page/Standard/question.svg", 'ILIAS', 'small', true);
	}
}
