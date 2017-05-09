<?php
use yii\web\View;
$this->registerJs("Ext.globalEvents.on('app.launch', function(app){ var cmp = app.createCmp(".$config.");});", View::POS_END, $id . '-handler');
?>

<div id="<?= $id ?>"></div>