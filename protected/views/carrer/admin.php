<?php
/* @var $this BannersController */
/* @var $model Banners */
$this->pageTitle = Yii::app()->name;
$active = array(
    '0' => 'Inactivos',
    '1' => 'Activos',
);

foreach ($active as $key => $value) {
    $listData[$key] = $value;
}
?>

<div style="padding-left: 20px;">
    <h2 style="text-align: center;">Banner</h2>
    <hr style="width: 30%;"/>

</div>
<div style="padding: 5px;">
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'banners-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(  
         
         array(
                'name' => 'active',
                'type' => 'raw',
                'value' => 'Banners::visible($data->active,$data->id);',
                'htmlOptions' => array('style' => 'width: 100px; height: auto; text-align: center;'),
                'filter' => $listData
            ),
        'orden',
            
         array(
                'name' => 'ruta',
                'type' => 'html',
                'value' => 'CHtml::image(Yii::app()->params["pageUrl"].Yii::app()->params["folder"].$data->ruta,"1",array("style"=>"width:200px;"));'
            ),
        
           
//        array(
//                'name' => 'language',
//                'value' => '$data->language0->name',
//                'type' => 'text',
//                'filter' => CHtml::listData(Languages::model()->findAll(), "code", "name")
//            ), 
		 array(
                'class' => 'CButtonColumn',
                'header' => Yii::t('modules', "Actions"),
                'template' => '{update}{delete}',
                'buttons' => array(
                    'update' => array(
                        'imageUrl' => Yii::app()->request->baseUrl . '/images/icn_edit_article.png',
                        'visible' => 'Yii::app()->authManager->checkAccess("editarBanner", Yii::app()->user->getState("rolId"))'
                    ),
                    'delete' => array(
                        'imageUrl' => Yii::app()->request->baseUrl . '/images/icn_trash.png',
                        'visible' => 'Yii::app()->authManager->checkAccess("eliminarBanner", Yii::app()->user->getState("rolId"))'
                    ),
                )
            ),
	),
)); ?>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        altura();
        $('.make-switch').on('switch-change', function(e, data) {
            console.log("hoal");
            div = $(this);
            $.ajax({
                type: "POST",
                url: "<?php echo Yii::app()->request->baseUrl; ?>/banners/updateActive",
                cache: false,
                data: {active: data.value, id: $(this).attr("id"), YII_CSRF_TOKEN: '<?php echo Yii::app()->request->csrfToken; ?>'}
            }).done(function(response) {
                if (response !== '')
                {
                    alert(response);
                    div.bootstrapSwitch('setState', false, true);

                }
            });
        });
    });
    //CUANDO SE EJECUTA UNA FUNCION AJAX POR EL CGRIDVIEW EL ANTERIOR SE PIERDE POR ESO SE HACE LA FUNCION DE ABAJO
    $(document).ajaxComplete(function(event, xhr, settings) {
        if (settings.type === "GET")
        {
            altura();
            $('.make-switch').on('switch-change', function(e, data) {
                console.log("hoal");
                div = $(this);
                $.ajax({
                    type: "POST",
                    url: "<?php echo Yii::app()->request->baseUrl; ?>/banners/updateActive",
                    cache: false,
                    data: {active: data.value, id: $(this).attr("id"), YII_CSRF_TOKEN: '<?php echo Yii::app()->request->csrfToken; ?>'}
                }).done(function(response) {
                    if (response !== '')
                    {
                        alert(response);
                        div.bootstrapSwitch('setState', false, true);

                    }
                });
            });
        }
    });
</script>