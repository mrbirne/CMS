<?php
/**
 * @author Alessio Bisgen
 * @copyright 2014
 * @version 0.1
 */
/* 
 * @var GalleryController $this 
 * @var Gallery $model
 * @var BsActiveForm $form
 * @var String $url
 * @var String $imageurl
 * @var GalleryLanguage[] $galleryLanguages
 */


$form = $this->beginWidget('bootstrap.widgets.BsActiveForm', array(
   	'layout' => BsHtml::FORM_LAYOUT_VERTICAL,
   	'enableAjaxValidation' => false,
	'id' => 'gallery-form',
	'htmlOptions'=>array(
		'onsubmit'=>"return false;",
		'onkeypress'=>" if(event.keyCode == 13){ submitForm('modal', 'content-form', '". $url ."'); } ",
	),
));
$model->imageid = 'default';
?>
	<div class="row">
		<div class="col-sm-6">
			<?php echo $form->textFieldControlGroup($model, 'label', array('labelOptions'=>array('class'=>'control-label required'), 'controlOptions'=>array('class'=>''))); ?>
			
			<?php
		        echo $form->dropDownListControlGroup($model, 'roleaccess', $roles, array(
		            'options' => array($selectedRole => array('selected' => true)),
		            'labelOptions' => array('class' => 'control-label required'),
		            'controlOptions' => array('class' => ''),
		        ));
	        ?>
	        <?php $this->renderPartial('_languages', array('model'=>$model, 'form'=>$form, 'galleryLanguages'=>$galleryLanguages))?>
		</div>
		<div class="col-sm-6">
			<?php echo BsHtml::imageThumbnail($imageurl, 'thumbnail', array('style'=>'width: 100%; height: auto;')); ?>
			<?php echo $form->hiddenField($model, 'imageid')?>
			<?php echo BsHtml::button(MsgPicker::msg()->getMessage(MSG::BTN_GALLERY_PICK),array('style'=>'margin-top: 5px;'))?>
		</div>
	</div>

		
	
<?php $this->endWidget(); ?>