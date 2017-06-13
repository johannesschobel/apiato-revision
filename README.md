# apiato-revision
A revision container for apiato.

This container acts as `Wrapper` for the package `johannesschobel\laravel-revisionable`. This package provides revisions 
of your database models out of the box. For more information read the original description provided here:

https://github.com/johannesschobel/laravel-revisionable

## Dependencies
This container depends on the following containers:

## Installation
To install the `Revision` container, please perform the following steps:

1) run `composer update` in order to install the required laravel package.
2) Continue with the readme for the respective package (see https://github.com/johannesschobel/laravel-revisionable)
3) add the `Revisionable` trait the top-level model (located in `App\Ship\Parent\Models\Model.php`)

