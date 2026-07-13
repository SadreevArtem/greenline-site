<?php

use yii\helpers\Html;
use yii\helpers\Url;

$fieldColumn = !empty($stacked) ? 'col-12' : 'col-md-6 col-12';
$formId = isset($formId) ? $formId : 'request';
$consentId = $formId . '-personal-data-consent';
$consentTextId = $consentId . '-text';
?>

<form action="/request" method="post" class="request-form">
    <div class="row">
        <h5 class="col-12"><?= Html::encode(Yii::t('main', 'Оставить заявку')) ?></h5>
        <div class="form-group <?= $fieldColumn ?>">
            <input required type="text" class="form-control" name="name" placeholder="<?= Html::encode(Yii::t('main', 'Имя')) ?>">
        </div>
        <div class="form-group <?= $fieldColumn ?>">
            <input type="text" class="form-control" name="organization" placeholder="<?= Html::encode(Yii::t('main', 'Организация (необязательно)')) ?>">
        </div>
        <div class="form-group col-12">
            <input required type="email" class="form-control" name="email" placeholder="<?= Html::encode(Yii::t('main', 'Электронная почта')) ?>">
        </div>
        <div class="form-group col-12">
            <textarea placeholder="<?= Html::encode(Yii::t('main', 'Комментарий')) ?>" class="form-control" name="comment" rows="<?= !empty($stacked) ? 3 : 1 ?>"></textarea>
        </div>
        <div class="form-consent col-12">
            <div class="form-consent__row">
                <input type="checkbox" name="personalDataConsent" value="1" id="<?= Html::encode($consentId) ?>" aria-labelledby="<?= Html::encode($consentTextId) ?>">
                <span id="<?= Html::encode($consentTextId) ?>">
                    <label for="<?= Html::encode($consentId) ?>"><?= Html::encode(Yii::t('main', 'Я даю')) ?></label>
                    <a href="<?= Html::encode(Url::to(['/consent'])) ?>" target="_blank" rel="noopener noreferrer"><?= Html::encode(Yii::t('main', 'согласие на обработку персональных данных')) ?></a>
                </span>
            </div>
            <div class="form-consent__policy">
                <?= Html::encode(Yii::t('main', 'Ознакомиться с')) ?>
                <a href="<?= Html::encode(Url::to(['/privacy-policy'])) ?>" target="_blank" rel="noopener noreferrer"><?= Html::encode(Yii::t('main', 'Политикой обработки персональных данных')) ?></a>
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-dark" disabled>
                <?= Html::encode(Yii::t('main', 'Отправить')) ?>
                <i class="fas fa-spinner fa-spin" style="display: none;"></i>
            </button>
        </div>
    </div>
</form>
