# Price Converter

It's a simple rate money

### Installation

Initialize the `convertor.class.php` in your file

Call the funcions of the API Settings

```php
$convertor = new Convertor(from, to);
```

### Example to use

```php
<?php
	require 'data/convertor.class.php';
	$convertor = new Convertor('BRL', 'USD');
	echo $convertor->getValue(); //To get transition value
?>
```

### API Settings

```php
getTo() //return 'to' money transition
getFrom() //return 'from'
getValue() //return the real value
calc(args) //return a value multiplied of the convertion
getJSON() return date and base convertion
```
