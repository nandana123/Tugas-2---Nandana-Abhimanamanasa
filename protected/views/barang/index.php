<?php
/* @var $this BarangController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Barangs',
);

?>

<h1>Item List</h1>
 <div class="carousel-inner">
		<div class="item active">
			<div class="row-fluid">
				<div class="span3">
				<div class="colored_banner ">
						<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/client/rani.png" width="128" height="128" alt="Me" class="img-thumbnail"/>
						<hr/>
						<p style="color:#3a3a3a;">Nike Air Max</p>
						<p style="color:#3a3a3a;">$ 200</p>
				</div>
				</div>
				<div class="span3">
				<div class="colored_banner">
						<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/client/anis.png" width="128" height="128" alt="Me" class="img-thumbnail"/>
						<hr/>
						<p style="color:#3a3a3a;">Nike Air Min</p>
						<p style="color:#3a3a3a;">$ 178</p>
				</div>
				</div>
			</div>
		</div>
		<div class="item">
			<div class="row-fluid">
				<div class="span3">
				<div class="colored_banner ">
						<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/client/wp.png" width="128" height="128" alt="Me" class="img-circle"/>
						<hr/>
						<p style="color:#3a3a3a;">Nike Air Max</p>
						<p style="color:#3a3a3a;">$ 200</p>
				</div>
				</div>
				<div class="span3">
				<div class="colored_banner">
						<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/client/ucup.png" width="128" height="128" alt="Me" class="img-circle"/>
						<hr/>
						<p style="color:#3a3a3a;">Nike Air Min</p>
						<p style="color:#3a3a3a;">$ 178</p>
				</div>
				</div>
			</div>
		</div>
	</div>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
