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
class CustomContent extends \Module
{
	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'custom_content';
	
	/**
	 * Display a wildcard in the back end
	 *
	 * @return string
	 */
	public function generate() {
		if (TL_MODE == 'BE')
        {
            $objTemplate = new \BackendTemplate('be_wildcard');
 
            $objTemplate->wildcard = '###  Slider Bundle - CustomContent  ###';
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

		// Add public assets to global list
		$GLOBALS['TL_CSS'][] = 'bundles/slider/css/slick.css';
        $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/slider/js/jquery-3.6.0.min.js';
        $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/slider/js/slick.js';

		$objFile = \ContentModel::findById($this->id);
		$singleSRC = $objFile->singleSRC;
		$description = $objFile->description;

		$this->Template->singleSRC = $singleSRC;
		$this->Template->description = $description;
	}		
}
class_alias(CustomContent::class, 'CustomContent');