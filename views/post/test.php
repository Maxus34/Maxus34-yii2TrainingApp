<?php
    use yii\widgets\ActiveForm;
    use yii\helpers\Html;
    use mihaildev\ckeditor\CKEditor;
?>

<h1>Test Action</h1>

<?php if(Yii::$app->session->hasFlash('success')): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Success!</strong>
        <?=Yii::$app->session->getFlash('success')?>
        </div>
<?php endif;?>

<?php if(Yii::$app->session->hasFlash('error')):?>
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Error!</strong>
        <?= Yii::$app->session->getFlash('error') ?>
    </div>
<?php endif;?>

<?php $form = ActiveForm::begin(['options' => ['id' => 'testForm', 'action' => '/post/index/']]) ?>
<?=   $form->field( $model, 'name' )->label('Имя')   ?>
<?=   $form->field( $model, 'email' )->input('email')?>
<?=   yii\jui\DatePicker::widget(['name' => 'attributeName']); ?>
<?php  /* $form->field( $model, 'text' )->label('Текст сообщения')->textarea(['rows' => '5']); */ ?>
<?=   $form->field($model, 'text')->widget(CKEditor::className(),[
            'editorOptions' => [
                'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                'inline' => false, //по умолчанию false
            ],
        ]);
?>
<?=   Html::submitButton( 'Отправить', ['class' => 'btn btn-success']) ?> &nbsp;&nbsp;&nbsp;&nbsp;
<?=   Html::resetButton(  'Сброс',     ['class' => 'btn btn-danger'] ) ?>
<?php ActiveForm::end() ?>