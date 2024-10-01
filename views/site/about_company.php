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
                <br>
                手机: <a href="tel:+79622676755">+7(962)-267-67-55</a>
                <br>
                <img style="width: 16px;padding-bottom: 3px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAABbElEQVR4nLXWv0sdQRDA8Y+iiBorC0kk4YHGkDSCITE2qYQoor0EhIdiCAhWgrWNWOTfSNo0Qv6BgH1QQjp/gAoW/kJI45ODFc7Lvbv1xTcwcLe7M9+dnZvZgykcoPbAuo9J4aHWJN3TROe1oKULfmAOA+hEFwZRxSauGwUkeXmvXEbx676ALfRFOL+VRyHSKMAxnri/9NSJ5J+B6YxhP55FQt7l5OTOyzZaUgYVnOIQHZGQzSLAcmbxSmpuNhJQLQKMZBYvhvEk7A+RgOdFgOyX04szHIUaiJHuIsDjHIP5MPcVrf8LGKtjtJ6q6qd4E3rYWk7Ur4oAqwU7W8LfoJcpmwSel7dcwE7JMbzAN1yF9X9CUtPys6zQhpVLRyi+7GZmyir5HO0akwpOygDfG3T+Er9jmt3nlFHSMobQVnJUn3AR267HsRC++aMwtouNcL6v8RYf8SV03nqOC++Dh1RNv/STX4tmQBLnEzcgWlGMsAUQBgAAAABJRU5ErkJggg=="> : <a href="https://wa.me/79622676755">+79622676755</a>
                <br>
                <img style="width: 16px;padding-bottom: 3px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAABaElEQVR4nMXWPUsdQRTG8d9NvMQUggg2gZAmkBQW6QQRCzGYIMGXIhDUyhdEsBCsrP0AlqJEUmmTxtoukCKNIKQXchUULOIXcGVlFtbL7t295i45cGCemd3zn9k5Z2ZhAueIOuwNfBQaUUX+R4XBo+D/F3CKr9jCDn7ithOAHxiMBzPsDQ7+BbCLLsW28RjAL9RDgDh9j9AT9FMcYiEFOWwXMJ16eR03eBF0Ny6wnXrmbbuAZLaJPcnQr7CIVSzhW0EtPRDxLFvZZ0yi1tRfC/2XRYCRFsE/4XXOWAJ8mQF5IL7nBHiOqZQ+wVpov8Nf9Ae9UpSmyxmAsVSARMd7IXzWLyHLklW0BMSVOt8EmMEz5ayvTCWPYxZ7IVviohouCXhfZgW/M/qPM9K22brCeVW4gjzfDxueZfWQJKUOu1Z+hk0MYQCjmEMvrjsBiHL8KtxglQGiHK8e0Kgw+P2lH/9aVAGJg3+4AwyVmTqZQLBfAAAAAElFTkSuQmCC"> : +79622676755
            </div>
		</div>
	</div>
</section>