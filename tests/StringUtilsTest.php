<?php

require("src/StringUtils.php");
require("vendor/autoload.php");

use Webmozart\Assert\Assert;
use function StringUtils\capitalize;

Assert::eq(capitalize(''), '');
Assert::eq(capitalize('how are you?'), 'How are you?');
Assert::notEq(capitalize('hello'), 'hello');

echo 'Все тесты пройдены!';