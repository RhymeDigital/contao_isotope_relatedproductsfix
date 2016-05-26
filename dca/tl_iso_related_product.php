<?php

/**
 * Copyright (C) 2016 Rhyme.Digital
 * 
 * @author		Blair Winans <blair@rhyme.digital>
 * @author		Adam Fisher <adam@rhyme.digital>
 * @link		http://rhyme.digital
 * @license		http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

/**
 * Table tl_iso_related_product
 */
$GLOBALS['TL_DCA']['tl_iso_related_product']['fields']['products']['inputType'] = 'tableLookup';
$GLOBALS['TL_DCA']['tl_iso_related_product']['fields']['products']['eval'] = array
(
    'mandatory'            => true,
    'doNotSaveEmpty'       => true,
    'tl_class'             => 'clr',
    'foreignTable'         => 'tl_iso_product',
    'fieldType'            => 'checkbox',
    'listFields'           => array('type', 'name', 'sku'),
    'searchFields'         => array('name', 'alias', 'sku', 'description'),
    'sqlWhere'             => 'pid=0',
    'searchLabel'          => &$GLOBALS['TL_LANG']['MSC']['searchProducts'],
    'matchAllKeywords'     => true,
    'enableSorting'        => true
);
$GLOBALS['TL_DCA']['tl_iso_related_product']['fields']['products']['load_callback'][] = array('Rhyme\Backend\RelatedProduct\FixInputType', 'loadProductsAsArray');
$GLOBALS['TL_DCA']['tl_iso_related_product']['fields']['products']['save_callback'][] = array('Rhyme\Backend\RelatedProduct\FixInputType', 'saveProductsAsCommaSeparated');