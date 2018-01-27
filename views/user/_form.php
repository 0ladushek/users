<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'firs_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birth_date')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'gender')
    ->dropDownList([
    '0' => 'Мужчина',
    '1' => 'Женщина',
    ]); ?>


    <?= $form->field($model, 'phone')->widget(\yii\widgets\MaskedInput::className(), [
        'mask' => '+7 (999) 999 99 99']);
    ?>

    <?php if ($model->id != null): ?>
        <div class="addresses-forms">
            <div class="row">
                <div class="col-sm-12">

                    <?php $addresses = \app\models\Address::findAll(['user_id' => $model->id])?>

                    <?php foreach ($addresses as $key => $address): ?>
                        <div class="address">
                            <?= $form->field($address, "[$key]id")->hiddenInput(['value' => $address->id])->label(false) ?>
                            <?= $form->field($address, "[$key]user_id")->hiddenInput(['value' => $model->id])->label(false) ?>
                            <?= $form->field($address, "[$key]name")->textInput(['maxlength' => true]) ?>
                            <?= $form->field($address, "[$key]address")->textInput(['maxlength' => true]) ?>

                            <div class="form-group">
                                <a href="/index.php?r=user%2Faddress-delete&id=<?= $address->id ?>" title="Удалить адрес" data-method="post">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </div>

                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
        <div class="form-group">
            <input type="button" class="btn btn-primary" onclick="add_address()" value="Добавить адрес" />
        </div>
    <?php endif; ?>




    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>


    <?php ActiveForm::end(); ?>



</div>



<?php



/* @var $this yii\web\View */
/* @var $searchModel app\models\AddressSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Addresses';
$this->params['breadcrumbs'][] = $this->title;
?>