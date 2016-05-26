<?php

/**
 * Copyright (C) 2016 Rhyme.Digital
 * 
 * @author		Blair Winans <blair@rhyme.digital>
 * @author		Adam Fisher <adam@rhyme.digital>
 * @link		http://rhyme.digital
 * @license		http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */
 
namespace Rhyme\Backend\RelatedProduct;


class FixInputType extends \Backend
{

    /**
     * Load the comma separated value as an array
     * @param mixed
     * @param object
     * @return mixed
     */
    public function loadProductsAsArray($varValue, $dc)
    {
        return explode(',', strval($varValue)) ?: array();
    }

    /**
     * Save the values as a comma separated set
     * @param mixed
     * @param object
     * @return mixed
     */
    public function saveProductsAsCommaSeparated($varValue, $dc)
    {
        $arrValue = deserialize($varValue, true);

        return implode(',', $arrValue);
    }
}
