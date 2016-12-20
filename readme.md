# Yii2 Summernote widget. Summernote 0.8.0

[Yii2](http://www.yiiframework.com) [Summernote](http://hackerwins.github.io/summernote) widget. Super simple WYSIWYG editor on Bootstrap

## Installation

### Composer

The preferred way to install this extension is through [Composer](http://getcomposer.org/).

Either run

	php composer.phar require marqu3s/yii2-summernote "dev-master"

or add

	"marqu3s/yii2-summernote": "dev-master"

to the require section of your composer.json

## Usage
```php
use marqu3s\summernote\Summernote;

<?= $form->field($model, 'content')->widget(Summernote::className(), [
	'clientOptions' => [
		...
	]
]) ?>
```
or
```php
use marqu3s\summernote\Summernote;

<?= Summernote::widget([
	'name' => 'editor_id',
	'clientOptions' => [
		...
	]
]) ?>
```

See [clientOptions](http://hackerwins.github.io/summernote/features.html)

## Original Author

[Aleksandr Zelenin](https://github.com/zelenin/), e-mail: [aleksandr@zelenin.me](mailto:aleksandr@zelenin.me)

## Updates by

[João Marques](https://github.com/marqu3s/), e-mail: [joao@jjmf.com](mailto:joao@jjmf.com)
