<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**

 * PHP version 7
 * @package   [slider-Bundle]
 * @author    Taheri Create Core Team
 * @license   GNU/LGPL
 * @copyright Taheri Create 2023 - 2026
 */

/**
 * Table tl_content
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['slider_start'] = '{type_legend},type,headline;{slider_legend},sliderDelay,sliderSpeed,sliderStartSlide,sliderContinuous;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['palettes']['slider_stop']  = '{type_legend},type;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests;{invisible_legend:hide},invisible,start,stop';

$GLOBALS['TL_DCA']['tl_content']['palettes']['custom_content'] = '{type_legend},type,headline;{source_legend},singleSRC,size,imagemargin,fullsize,overwriteMeta;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop;{type_legend},headline;{text_legend},description;{image_legend},addImage;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop';

$GLOBALS['TL_DCA']['tl_content']['fields']['description'] = array(
        'label'        => &$GLOBALS['TL_LANG']['tl_content']['description'],
        'exclude'      => true,
        'inputType'    => 'textarea',
        'eval'         => array('mandatory'=>false, 'rte'=>'tinyMCE', 'helpwizard'=>true),
        'sql'          => "mediumtext NULL"
    );
$GLOBALS['TL_DCA']['tl_content']['fields']['singleSRC'] = array(
        'label'        => &$GLOBALS['TL_LANG']['tl_content']['singleSRC'],
        'exclude'      => true,
        'inputType'    => 'fileTree',
        'eval'         => array('filesOnly'=>true, 'fieldType'=>'radio', 'mandatory' => false , 'tl_class'=>'clr'),
        'sql'          => "binary(16) NULL"
    );
