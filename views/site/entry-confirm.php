<?php

use yii\helpers\Html;
use yii\web\UploadedFile;

?>
<p>Вы ввели следующую информацию:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
    <?=$model->file = UploadedFile::getInstance($model, 'file');?>
    <li><label>File</label>: <?= $model->file->saveAs('photo/'.$model->file->baseName. "." .$model->file->extension); ?></li>

</ul>
