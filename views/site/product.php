<?php
use yii\helpers\Url;
/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
<div class="col-sm-12">
<span style="font-size: 18px;">
<?= $product->name ?> (<?= $product->price ?> руб)
</span>
<br>
<span style="color: green; font-size: 18px;">
<?= $product->collection->name ?>
</span> 
</div>

        </div>

    </div>
</div>
