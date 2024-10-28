<?php
/**
 * @var $this \yii\web\View
 */

use app\components\helpers\Html;

$this->title = Yii::t('main', 'Green Line - ') . 'Partnership';

$this->registerMetaTag([
    'name' => 'description',
    'content' => Yii::t('main', 'Green Line - ') . 'Partnership',
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'Partnership',
]);
$this->registerMetaTag([
    'name' => 'robots',
    'content' => 'index, follow',
]);
?>

<header id="header" class="container-fluid navigate-header">
	<div class="img-container">
		<img src="/img/headers/about.jpg" alt="<?php echo 'Partnership' ?>">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1 col-12">
				<h1><?php echo 'Partnership' ?></h1>
				<span class="breadcrumbs">
						<?php echo Html::a(Yii::t('main', 'Главная'), ['/']) ?>
                    	- <?php echo Html::a('Partnership', ['/about-company'], ['class' => 'current']) ?>
					</span>
			</div>
		</div>
	</div>
</header>

<section id="principles" class="container">
	<div class="row">
		<div class="col-lg-10 offset-lg-1 col-12">
			<h2 class="up-line green">Green Line</h2>
			<div class="item">
                我们公司Greenline位于俄罗斯最西端的加里宁格勒市。 我们专业从事向俄罗斯供应各种外国产品。 除了简单地应客户的要求提供各种产品外，我们是许多欧洲工厂的代表。 我们公司的年营业额约为1000万美元，我们在莫斯科和圣彼得堡设有办事处，员工约20人。 由于加里宁格勒市靠近大海，周围有许多造船和修理企业，我们在圣彼得堡的办事处为许多造船企业提供服务，我们正在寻找新的海洋、海洋设备或技术领域的永久合作伙伴，我们将能够持续向俄罗斯提供这些服务。 我们的主要客户是Gazprom Neft，Lukoil，Novatek，Sibur等公司。 如果您有兴趣合作，请通过以下联系方式与我们联系:
                <br>
                <br>
                电邮：<a href="mailto:info@greenlinerussia.com">info@greenlinerussia.com</a>
                <br>
                电话: <a href="tel:+74012926962">+7(4012)-92-69-62</a>
            </div>
		</div>
	</div>
</section>