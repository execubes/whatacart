<?php
/**
 * @copyright Copyright (C) 2016 Usha Singhai Neo Informatique Pvt. Ltd
 * @license https://www.gnu.org/licenses/gpl-3.0.html
 */
namespace common\modules\manufacturer\managers;

use common\modules\manufacturer\managers\ManufacturerTableBuilder;
/**
 * TableManager class file.
 * @package common\modules\manufacturer\managers
 */
class TableManager extends \usni\library\components\UiTableManager
{
    /**
     * Get table builder config.
     * @return array
     */
    protected static function getTableBuilderConfig()
    {
        return [
            ManufacturerTableBuilder::className(),
        ];
    }
}
