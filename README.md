# PSR-7 Immutability Testing

Tests the immutability of PSR-7 _ServerRequestInterface_ implementations.

To run the tests:

1. Clone this repository
2. `cd psr7immutability`
3. `composer install`
4. `composer test`

Sample output:

```
$ composer test
> ./vendor/bin/phpunit
PHPUnit 5.7.5-52-ge2651d0 by Sebastian Bergmann and contributors.

FFFFFFFFFFFFFFFFFFFFFFFF                                          24 / 24 (100%)

Time: 60 ms, Memory: 6.50MB

There were 24 failures:

1) DiactorosTest::testWithAttribute_object
withAttribute() not implemented properly (object attributes are mutable)
Failed asserting that two strings are identical.
--- Expected
+++ Actual
@@ @@
-foo
+bar

/Users/pmjones/Code/psr7immutability/tests/AbstractImmutablityTest.php:33

2) DiactorosTest::testWithAttribute_arrayContainsObject
withAttribute() not implemented properly (objects in array attributes are mutable)
Failed asserting that two strings are identical.
--- Expected
+++ Actual
@@ @@
-foo
+bar

/Users/pmjones/Code/psr7immutability/tests/AbstractImmutablityTest.php:60

3) DiactorosTest::testWithAttribute_arrayContainsReference
withAttribute() not implemented properly (references in array attributes are mutable)
Failed asserting that two strings are identical.
--- Expected
+++ Actual
@@ @@
-foo
+bar

/Users/pmjones/Code/psr7immutability/tests/AbstractImmutablityTest.php:89

4) DiactorosTest::testWithAttribute_resource
withAttribute() not implemented properly (resource attributes are mutable)
Failed asserting that two strings are identical.
--- Expected
+++ Actual
@@ @@
-foo
+bar

/Users/pmjones/Code/psr7immutability/tests/AbstractImmutablityTest.php:120

5) DiactorosTest::testWithParsedBody_object
withParsedBody() not implemented properly (parsed body objects are mutable)
Failed asserting that two strings are identical.
--- Expected
+++ Actual
@@ @@
-foo
+bar

/Users/pmjones/Code/psr7immutability/tests/AbstractImmutablityTest.php:144

6) DiactorosTest::testWithParsedBody_arrayContainsObject
withParsedBody() not implemented properly (objects in parsed body arrays are mutable)
Failed asserting that two strings are identical.
--- Expected
+++ Actual
@@ @@
-foo
+bar

/Users/pmjones/Code/psr7immutability/tests/AbstractImmutablityTest.php:168

7) DiactorosTest::testWithParsedBody_arrayContainsReference
withParsedBody() not implemented properly (references in parsed body arrays are mutable)
Failed asserting that two strings are identical.
--- Expected
+++ Actual
@@ @@
-foo
+bar

/Users/pmjones/Code/psr7immutability/tests/AbstractImmutablityTest.php:194

8) DiactorosTest::testWithParsedBody_arrayContainsResource
withParsedBody() not implemented properly (resources in parsed body arrays are mutable)
Failed asserting that two strings are identical.
--- Expected
+++ Actual
@@ @@
-foo
+bar

/Users/pmjones/Code/psr7immutability/tests/AbstractImmutablityTest.php:224

9) GuzzleTest::testWithAttribute_object
withAttribute() not implemented properly (object attributes are mutable)
Failed asserting that two strings are identical.
--- Expected
+++ Actual
@@ @@
-foo
+bar

/Users/pmjones/Code/psr7immutability/tests/AbstractImmutablityTest.php:33

10) GuzzleTest::testWithAttribute_arrayContainsObject
withAttribute() not implemented properly (objects in array attributes are mutable)
Failed asserting that two strings are identical.
--- Expected
+++ Actual
@@ @@
-foo
+bar

/Users/pmjones/Code/psr7immutability/tests/AbstractImmutablityTest.php:60

11) GuzzleTest::testWithAttribute_arrayContainsReference
withAttribute() not implemented properly (references in array attributes are mutable)
Failed asserting that two strings are identical.
--- Expected
+++ Actual
@@ @@
-foo
+bar

/Users/pmjones/Code/psr7immutability/tests/AbstractImmutablityTest.php:89

12) GuzzleTest::testWithAttribute_resource
withAttribute() not implemented properly (resource attributes are mutable)
Failed asserting that two strings are identical.
--- Expected
+++ Actual
@@ @@
-foo
+bar

/Users/pmjones/Code/psr7immutability/tests/AbstractImmutablityTest.php:120

13) GuzzleTest::testWithParsedBody_object
withParsedBody() not implemented properly (parsed body objects are mutable)
Failed asserting that two strings are identical.
--- Expected
+++ Actual
@@ @@
-foo
+bar

/Users/pmjones/Code/psr7immutability/tests/AbstractImmutablityTest.php:144

14) GuzzleTest::testWithParsedBody_arrayContainsObject
withParsedBody() not implemented properly (objects in parsed body arrays are mutable)
Failed asserting that two strings are identical.
--- Expected
+++ Actual
@@ @@
-foo
+bar

/Users/pmjones/Code/psr7immutability/tests/AbstractImmutablityTest.php:168

15) GuzzleTest::testWithParsedBody_arrayContainsReference
withParsedBody() not implemented properly (references in parsed body arrays are mutable)
Failed asserting that two strings are identical.
--- Expected
+++ Actual
@@ @@
-foo
+bar

/Users/pmjones/Code/psr7immutability/tests/AbstractImmutablityTest.php:194

16) GuzzleTest::testWithParsedBody_arrayContainsResource
withParsedBody() not implemented properly (resources in parsed body arrays are mutable)
Failed asserting that two strings are identical.
--- Expected
+++ Actual
@@ @@
-foo
+bar

/Users/pmjones/Code/psr7immutability/tests/AbstractImmutablityTest.php:224

17) SlimTest::testWithAttribute_object
withAttribute() not implemented properly (object attributes are mutable)
Failed asserting that two strings are identical.
--- Expected
+++ Actual
@@ @@
-foo
+bar

/Users/pmjones/Code/psr7immutability/tests/AbstractImmutablityTest.php:33

18) SlimTest::testWithAttribute_arrayContainsObject
withAttribute() not implemented properly (objects in array attributes are mutable)
Failed asserting that two strings are identical.
--- Expected
+++ Actual
@@ @@
-foo
+bar

/Users/pmjones/Code/psr7immutability/tests/AbstractImmutablityTest.php:60

19) SlimTest::testWithAttribute_arrayContainsReference
withAttribute() not implemented properly (references in array attributes are mutable)
Failed asserting that two strings are identical.
--- Expected
+++ Actual
@@ @@
-foo
+bar

/Users/pmjones/Code/psr7immutability/tests/AbstractImmutablityTest.php:89

20) SlimTest::testWithAttribute_resource
withAttribute() not implemented properly (resource attributes are mutable)
Failed asserting that two strings are identical.
--- Expected
+++ Actual
@@ @@
-foo
+bar

/Users/pmjones/Code/psr7immutability/tests/AbstractImmutablityTest.php:120

21) SlimTest::testWithParsedBody_object
withParsedBody() not implemented properly (parsed body objects are mutable)
Failed asserting that two strings are identical.
--- Expected
+++ Actual
@@ @@
-foo
+bar

/Users/pmjones/Code/psr7immutability/tests/AbstractImmutablityTest.php:144

22) SlimTest::testWithParsedBody_arrayContainsObject
withParsedBody() not implemented properly (objects in parsed body arrays are mutable)
Failed asserting that two strings are identical.
--- Expected
+++ Actual
@@ @@
-foo
+bar

/Users/pmjones/Code/psr7immutability/tests/AbstractImmutablityTest.php:168

23) SlimTest::testWithParsedBody_arrayContainsReference
withParsedBody() not implemented properly (references in parsed body arrays are mutable)
Failed asserting that two strings are identical.
--- Expected
+++ Actual
@@ @@
-foo
+bar

/Users/pmjones/Code/psr7immutability/tests/AbstractImmutablityTest.php:194

24) SlimTest::testWithParsedBody_arrayContainsResource
withParsedBody() not implemented properly (resources in parsed body arrays are mutable)
Failed asserting that two strings are identical.
--- Expected
+++ Actual
@@ @@
-foo
+bar

/Users/pmjones/Code/psr7immutability/tests/AbstractImmutablityTest.php:224

FAILURES!
Tests: 24, Assertions: 48, Failures: 24.
Script ./vendor/bin/phpunit handling the test event returned with error code 1
$
```