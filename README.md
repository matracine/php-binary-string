[![Latest Stable Version](https://poser.pugx.org/mracine/php-binary-string/v/stable)](https://packagist.org/packages/mracine/php-binary-string)
[![PHP 7 ready](https://php7ready.timesplinter.ch/matracine/php-binary-string/master/badge.svg)](https://travis-ci.org/matracine/php-binary-string)
[![License](https://poser.pugx.org/mracine/php-binary-string/license)](https://packagist.org/packages/mracine/php-binary-string)
[![Travis Build Status](https://travis-ci.org/matracine/php-binary-string.svg?branch=master)](https://travis-ci.org/matracine/php-binary-string)
[![Scrutinizer Build Status](https://scrutinizer-ci.com/g/matracine/php-binary-string/badges/build.png?b=master)](https://scrutinizer-ci.com/g/matracine/php-binary-string/build-status/master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/matracine/php-binary-string/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/matracine/php-binary-string/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/matracine/php-binary-string/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/matracine/php-binary-string/?branch=master)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/matracine/php-binary-string/badges/code-intelligence.svg?b=master)](https://scrutinizer-ci.com/code-intelligence)
[![Maintainability](https://api.codeclimate.com/v1/badges/e6d172b10c3f12e1bb35/maintainability)](https://codeclimate.com/github/matracine/php-binary-string/maintainability)

# PHP BINARY STRING HELPER 

**mracine\Helpers\BinaryStringHelper** is a library that provide tools to manipulate binary strings with PHP.

## Installation

You can add this library as a local, per-project dependency to your project using [Composer](https://getcomposer.org/):

    composer require mracine/php-binary-string

## Usage

The mracine\Helpers\BinaryStringHelper is a class that provide one method :

 - IntegerToNBOBinaryString static method : takes one integer parameter and returns a Network byte ordered trimed string

```php
<?php
use mracine\Helpers\BinaryStringHelper;

//   0xFF7 => chr(0x0F).chr(0xF7)
//   0x12345678 => chr(0x12).chr(0x34).chr(0x56).chr(0x76)

// Compatible with all xx bits systems (16, 32 ...) 

$networkReadyString =  BinaryStringHelper::IntegerToNBOBinaryString(123456789);
// $network ready string contains chr(0x7).chr(0x5B).chr(0xCD).chr(0x15)
$networkReadyString =  BinaryStringHelper::IntegerToNBOBinaryString(0x12345);
// $network ready string contains chr(0x1).chr(0x23).chr(0x45)
```
