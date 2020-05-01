<?php

namespace app\modules\admin\models;

/**
 * This is the ActiveQuery class for [[ServicesCategory]].
 *
 * @see ServicesCategory
 */
class ServicesCategoryQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return ServicesCategory[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return ServicesCategory|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
