<?php
/**
 *
 *
 * All rights reserved.
 *
 * @author Okulov Anton
 * @email qantus@mail.ru
 * @version 1.0
 * @date 28/09/16 12:03
 */

namespace Modules\Text\Models;

use Phact\Orm\Fields\CharField;
use Phact\Orm\Fields\TextField;
use Phact\Orm\Model;
use Phact\Translate\Translator;

/**
 * Class InfoBlock
 * @package Modules\Text\Models
 *
 * @property String name
 * @property String text
 * @property String key
 */
class InfoBlock extends Model
{
    use Translator;

    public static function getFields()
    {
        return [
            'name' => [
                'class' => CharField::class,
                'label' => self::t('Text.main', 'Name')
            ],
            'text' => [
                'class' => TextField::class,
                'label' => self::t('Text.main', 'Text')
            ],
            'key' => [
                'class' => CharField::class,
                'label' => self::t('Text.main', 'Key (for developer)'),
                'null' => true
            ]
        ];
    }

    public function __toString()
    {
        return (string) $this->name;
    }
}