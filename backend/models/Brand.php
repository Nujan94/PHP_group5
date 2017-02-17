<?php
/**
 * Created by PhpStorm.
 * User: najun
 * Date: 2017/2/16
 * Time: 18:37
 */

namespace backend\models;


use yii\db\ActiveRecord;

class Brand extends ActiveRecord
{
    public function AttributeLabels()
    {
        return [
            'name'=>'商品名',
            'intro'=>'商品简介',
            'status'=>'商品状态',
            'sort'=>'排序',
            'logo'=>'商品logo'
        ];
    }

    public function rules()
    {
        return [
            [['name','status','logo'],'required'],
            ['sort','integer'],
            ['status','integer'],
            ['intro','safe']
        ];
    }


}