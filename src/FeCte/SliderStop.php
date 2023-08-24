<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package   slider-bundle
 * @author    Taheri Create Core Team
 * @license   GNU/LGPL
 * @copyright Taheri Create 2023 - 2026
 */



/**
 * Namespace
 */
namespace Tahericreate\SliderBundle\FECte;

/**
 * Class ContactForm
 *
 * @copyright  Taheri Create 2023 - 2026
 * @author     Taheri Create Core Team
 * @package    slider-bundle
 */

class SliderStop extends \Module
{
	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'slider_stop';
	
	/**
	 * Display a wildcard in the back end
	 *
	 * @return string
	 */
	public function generate() {
		if (TL_MODE == 'BE')
        {
            $objTemplate = new \BackendTemplate('be_wildcard');
 
            $objTemplate->wildcard = '###  Slider Bundle - Slider Stop  ###';
            $objTemplate->title = $this->headline;
            $objTemplate->id = $this->id;
            $objTemplate->link = $this->name;
            $objTemplate->href = 'contao/main.php?do=themes&table=tl_module&act=edit&id=' . $this->id;		
			
            return $objTemplate->parse();
        }
        return parent::generate();
	}
	
	/**
	 * Generate the content
	 */
	protected function compile(){
		
	}	
}
class_alias(SliderStop::class, 'SliderStop');