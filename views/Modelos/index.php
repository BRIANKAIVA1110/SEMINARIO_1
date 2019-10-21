<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Modelos</h1>
<ul>
<?php foreach ($modelos as $Modelo): ?>
    <li>
        <?= Html::encode("{$modelo->modeloId} ({$modelo->codigo})") ?>:
        <?= $modelo->descripcion ?>
    </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>