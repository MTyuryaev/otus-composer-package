# Процессор строк

Высчитывает длинну строки (в том числе кириллица)

## Требования

- PHP 7.4

## Установка
```bash
$composer requier MTyuryaev/otus-composer-package
```

## Использование
```php
<?php
$stringLength = new StringLength();
echo  $stringLenght->getLength('example string'); // 14
```