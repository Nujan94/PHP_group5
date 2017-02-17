<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
<?=Html::a('添加品牌',['add'],['class'=>'btn btn-success'])?>
<br>
<br>
<table class="table table-hover">
    <tr>
        <th>商品ID</th>
        <th>商品名称</th>
        <th>商品LOGO</th>
        <th>商品简介</th>
        <th>商品操作</th>
    </tr>
    <?php foreach($brands as $brand):?>
    <tr>
        <td><?=$brand->id?></td>
        <td><?=$brand->name?></td>
        <td><img src="<?=$brand->logo?>"></td>
        <td><?=$brand->intro?></td>
        <td>商品操作</td>
    </tr>
    <?php endforeach;?>
</table>
