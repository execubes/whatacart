<?php 
/**
 * @copyright Copyright (C) 2016 Usha Singhai Neo Informatique Pvt. Ltd
 * @license https://www.gnu.org/licenses/gpl-3.0.html
 */
namespace products\models;
    
use usni\library\components\UiSecuredActiveRecord;
/**
 * ProductImageTranslated class file
 * @package products\models
 */
class ProductImageTranslated extends UiSecuredActiveRecord
{
    /**
     * @inheritdoc
     */
    public function getProductImages()
    {
        return $this->hasOne(ProductImage::className(), ['id' => 'owner_id']);
    }
}
?>