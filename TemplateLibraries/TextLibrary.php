<?php
/**
 *
 *
 * All rights reserved.
 *
 * @author Okulov Anton
 * @email qantus@mail.ru
 * @version 1.0
 * @date 08/09/16 07:25
 */

namespace Modules\Text\TemplateLibraries;

use Modules\Text\Models\InfoBlock;
use Phact\Template\TemplateLibrary;

class TextLibrary extends TemplateLibrary
{
    /**
     * @name fetch_info_block
     * @kind accessorFunction
     * @return string
     */
    public static function fetchInfoBlock($key = null, $id = null)
    {
        $filter = [];
        if ($id) {
            $filter['id'] = $id;
        }
        if ($key) {
            $filter['key'] = $key;
        }
        return InfoBlock::objects()->filter($filter)->get();
    }
}