<?php

namespace macklus\holded\query;

/**
 * This is the ActiveQuery class for [[\app\models\Holded]].
 *
 * @see \app\models\Holded
 */
class HoldedQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \app\models\Holded[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \app\models\Holded|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
