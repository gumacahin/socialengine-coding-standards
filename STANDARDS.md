# Social Engine Coding Standard
## Control Structure Signatures

Control Structures should have no spaces before opening parentheses and 1 space after closing parentheses. The opening brace should be preceded by one space and should be at the end of the line.

####Correct spacing around the condition.
  <table>
   <tr>
    <th><font color='green'>Valid</font></th>
    <th><font color='red'>Invalid</font></th>
   </tr>
   <tr>
<td>
```php
if( $foo ) {

}
```
</td>
<td>

```php
if ( $foo ) {

}
```
</td>
   </tr>
  </table>
####Correct spacing around the loop.
  <table>
   <tr>
    <th><font color='green'>Valid</font></th>
    <th><font color='red'>Invalid</font></th>
   </tr>
   <tr>
<td>
```php
while( $foo ) {

}
```
</td>
<td>

```php
while ( $foo ) {

}
```
</td>
   </tr>
  </table>
####Correct placement of the opening brace.
  <table>
   <tr>
    <th><font color='green'>Valid</font></th>
    <th><font color='red'>Invalid</font></th>
   </tr>
   <tr>
<td>
```php
if( $foo ) {

}
```
</td>
<td>

```php
if ( $foo )
{

}
```
</td>
   </tr>
  </table>
## Control Structure Spacing

Control Structures should have 1 space after opening parentheses and 1 space before closing parentheses.

####Whitespace used inside the parentheses.
  <table>
   <tr>
    <th><font color='green'>Valid</font></th>
    <th><font color='red'>Invalid</font></th>
   </tr>
   <tr>
<td>
```php
if( $foo ) {
    $var = 1;
}
```
</td>
<td>

```php
if ($foo) {
    $var = 1;
}
```
</td>
   </tr>
  </table>
## Zend Code Analyzer

PHP Code should pass the zend code analyzer.

####Valid PHP Code.
  <table>
   <tr>
    <th><font color='green'>Valid</font></th>
    <th><font color='red'>Invalid</font></th>
   </tr>
   <tr>
<td>
```php
function foo($bar, $baz)
{
    return $bar + $baz;
}
```
</td>
<td>

```php
function foo($bar, $baz)
{
    return $bar + 2;
}
```
</td>
   </tr>
  </table>
## Closing PHP Tags

Files should not have closing php tags.

####No closing tag at the end of the file.
  <table>
   <tr>
    <th><font color='green'>Valid</font></th>
    <th><font color='red'>Invalid</font></th>
   </tr>
   <tr>
<td>
```php
<?php
$var = 1;
```
</td>
<td>

```php
<?php
$var = 1;
?>
```
</td>
   </tr>
  </table>
## Function Argument Spacing

Function arguments should have one space after a comma, and single spaces surrounding the equals sign for default values.

####Single spaces after a comma.
  <table>
   <tr>
    <th><font color='green'>Valid</font></th>
    <th><font color='red'>Invalid</font></th>
   </tr>
   <tr>
<td>
```php
function foo($bar, $baz)
{
}
```
</td>
<td>

```php
function foo($bar,$baz)
{
}
```
</td>
   </tr>
  </table>
####Single spaces around an equals sign in function declaration.
  <table>
   <tr>
    <th><font color='green'>Valid</font></th>
    <th><font color='red'>Invalid</font></th>
   </tr>
   <tr>
<td>
```php
function foo($bar, $baz = true)
{
}
```
</td>
<td>

```php
function foo($bar, $baz=true)
{
}
```
</td>
   </tr>
  </table>
## Opening Brace in Function Declarations

Function declarations follow the &quot;BSD/Allman style&quot;. The function brace is on the line following the function declaration and is indented to the same column as the start of the function declaration.

####brace on next line
  <table>
   <tr>
    <th><font color='green'>Valid</font></th>
    <th><font color='red'>Invalid</font></th>
   </tr>
   <tr>
<td>
```php
function fooFunction($arg1, $arg2 = '')
{
    ...
}
```
</td>
<td>

```php
function fooFunction($arg1, $arg2 = '') {
    ...
}
```
</td>
   </tr>
  </table>
## PHP Code Tags

Always use &lt;?php ?&gt; to delimit PHP code, not the &lt;? ?&gt; shorthand. This is the most portable way to include PHP code on differing operating systems and setups.

## No Tab Indentation

Spaces should be used for indentation instead of tabs.

## Class Declarations

The opening brace of a class must be on the line after the definition by itself.

####Opening brace on the correct line.
  <table>
   <tr>
    <th><font color='green'>Valid</font></th>
    <th><font color='red'>Invalid</font></th>
   </tr>
   <tr>
<td>
```php
class Foo
{
}
```
</td>
<td>

```php
class Foo {
}
```
</td>
   </tr>
  </table>
## Default Values in Function Declarations

Arguments with default values go at the end of the argument list.

####argument with default value at end of declaration
  <table>
   <tr>
    <th><font color='green'>Valid</font></th>
    <th><font color='red'>Invalid</font></th>
   </tr>
   <tr>
<td>
```php
function connect($dsn, $persistent = false)
{
    ...
}
```
</td>
<td>

```php
function connect($persistent = false, $dsn)
{
    ...
}
```
</td>
   </tr>
  </table>
## Closing Brace Indentation

Closing braces should be indented at the same level as the beginning of the scope.

####Consistent indentation level for scope.
  <table>
   <tr>
    <th><font color='green'>Valid</font></th>
    <th><font color='red'>Invalid</font></th>
   </tr>
   <tr>
<td>
```php
if ($test) {
    $var = 1;
}
```
</td>
<td>

```php
if ($test) {
    $var = 1;
    }
```
</td>
   </tr>
  </table>
## Line Length

It is recommended to keep lines at approximately 80 characters long for better code readability.

## Line Endings

Unix-style line endings are preferred (&quot;\n&quot; instead of &quot;\r\n&quot;).

## Elseif Declarations

PHP's elseif keyword should be used instead of else if.

####Single word elseif keyword used.
  <table>
   <tr>
    <th><font color='green'>Valid</font></th>
    <th><font color='red'>Invalid</font></th>
   </tr>
   <tr>
<td>
```php
if ($foo) {
    $var = 1;
} elseif ($bar) {
    $var = 2;
}
```
</td>
<td>

```php
if ($foo) {
    $var = 1;
} else if ($bar) {
    $var = 2;
}
```
</td>
   </tr>
  </table>
Documentation generated on Fri, 27 Jan 2017 13:18:41 +0100