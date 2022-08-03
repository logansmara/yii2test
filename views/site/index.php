<?php
use yii\helpers\Url;
/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
<?php $i = 0; ?>      
<?php foreach($collections as $collection): ?>
<?php $i++; ?>
<?php if($i % 3 != 0): ?>
<div class="col-sm-4">

<div class="divtest">
<span style="color: red; font-weight: bold;"><?= $collection->name ?></span>
</div>
</div>
<?php else: ?>
<!-- Добавляем пустой блок -->
    <div class="col-sm-4">
<div class="divtest">
<span style="color: #fff;">qwerty</span>
</div>
</div>
<div class="col-sm-4">
<div class="divtest">
<span style="color: red; font-weight: bold;"><?= $collection->name ?></span>
</div>
</div>
<?php endif; ?>
<?php foreach($collection->products as $product): ?>
<?php $i++; ?>
<div class="col-sm-4">
<a href="<?= Url::to(['/site/product', 'id' => $product->id]); ?>" class="divtest">
<?= $product->name ?>
</a>
</div>
<?php endforeach; ?>
<?php endforeach; ?>

        </div>

    </div>
</div>
