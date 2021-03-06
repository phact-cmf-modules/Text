<?php
/**
 *
 *
 * All rights reserved.
 *
 * @author Okulov Anton
 * @email qantus@mail.ru
 * @version 1.0
 * @date 03/10/16 10:32
 */

namespace Modules\Text\Admin;

use Modules\Admin\Contrib\Admin;
use Modules\Text\Forms\InfoBlockForm;
use Modules\Text\Models\InfoBlock;
use Phact\Orm\Model;

class InfoBlockAdmin extends Admin
{
    public function getSearchColumns()
    {
        return ['name', 'key'];
    }

    public function getForm()
    {
        return new InfoBlockForm();
    }

    /**
     * @return Model
     */
    public function getModel()
    {
        return new InfoBlock();
    }

    public function getName()
    {
        return $this->t('Text.main', 'Text blocks');
    }

    public function getItemName()
    {
        return $this->t('Text.main', 'Text blocks');
    }
}