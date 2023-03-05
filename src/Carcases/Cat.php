<?php


namespace CowSay;

class Cat extends \CowSay\Core\Calf {

	use Traits\Eyes;
	use Traits\Tongue;
	use Traits\Poop;

	protected $carcass = '
     \                  _
      \  ^___^         //
        ( %s )\_______//
        ~(..)~         |
          %s \__________|
             // // // //
            // // // // %s
			            
			             ';
                

	protected function buildCarcass(): string { 
		return sprintf(
			$this->carcass, 
			$this->getEyes(), 
			$this->getTongue(),  
			$this->getPoop()
			);
		}
}
