# Yii2 Summernote widget. NOTE IT'S Summernote 0.6.16

[Yii2](http://www.yiiframework.com) [Summernote](http://hackerwins.github.io/summernote) widget. Super simple WYSIWYG editor on Bootstrap

## Installation

### Composer

The preferred way to install this extension is through [Composer](http://getcomposer.org/).

Either run

	php composer.phar require zelenin/yii2-summernote-widget "dev-master"

or add

	"germanigortcev/yii2-summernote-widget": "dev-master"

to the require section of your composer.json

## Usage

	<?= $form->field($model, 'content')->widget(Summernote::className(), [
		'clientOptions' => [
			...
		]
	]) ?>

or

	<?= Summernote::widget([
		'name' => 'editor_id',
		'clientOptions' => [
			...
		]
	]) ?>

See [clientOptions](http://hackerwins.github.io/summernote/features.html)

## Author

[Aleksandr Zelenin](https://github.com/zelenin/), e-mail: [aleksandr@zelenin.me](mailto:aleksandr@zelenin.me)
