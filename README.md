[![Packagist](https://img.shields.io/packagist/v/atbox/invi.svg?style=flat-square)](https://packagist.org/packages/atbox/invi)
[![Packagist](https://img.shields.io/packagist/dt/atbox/invi.svg?style=flat-square)](https://packagist.org/packages/atbox/invi)

# Invi Package for Laravel 5 #

This package helps you to create a simple invitation system for your signup or other services.
[https://packagist.org/packages/atbox/invi]

## Features

- Generate an invitation code for a given email
- Set an expiration date on invites
- Activate or deactivate invites
- Use, unuse or delete invites

## Installation

Laravel 5.4:
```
composer require atbox/invi ^2.0
```

Laravel 5.0 up to 5.3:
```
composer require atbox/invi ^1.0
```

Execute:
```
composer update
```

Add this to config/app.php end of providers array:
```php
Atbox\Invi\InviServiceProvider::class,
```

Add this to config/app.php end of aliases array:
```php
'Invi' => Atbox\Invi\Facades\Invi::class,
```

Publish the migration file:
```php
php artisan vendor:publish
```

Run the migration command:
```php
php artisan migrate
```

## Example

```php
Invi::generate("example@domain.com", "2 day", true); // Generate Invitation

if(Invi::check("f22c597305eb1800", "example@domain.com"))
    Invi::used("f22c597305eb1800", "example@domain.com");
else
    echo Invi::status("f22c597305eb1800", "example@domain.com");
```

## Functions

### generate

Generate an invitation code
- Arguments:
	- email
	- expiration date, accepts timespans like: 2 years | 2 months | 13 days | 1 hour | 23 min | 40 sec 
	- active
- Returns:
	- a JSON array of all invitation information

```php
Invi::generate("example@domain.com", "2 day", true); // Generate Invitation
```
- Output:

```php
{"code":"f22c5973ebbcca99","email":"example@domain.com","expiration":"2013-05-10 15:58:41 ","active":true,"used":"0"}
```

### check

Validate invitation code
- Arguments:
	- invitation code
	- email
- Returns:
	- boolean


```php
Invi::check("f22c597305eb1800", "example@domain.com");
```

### status

Return invitation code status
- Arguments:
	- invitation code
	- email
- Returns:
	- status: Active, Deactive, Used, Valid, Not Exist

```php
echo Invi::status("f22c597305eb1800", "example@domain.com");
```

### active

Activate an invitation
- Arguments:
	- invitation code
	- email

```php
Invi::active("f22c597305eb1800", "example@domain.com");
```

### deactive

Deactivate an invitation
- Arguments:
	- invitation code
	- email

```php
Invi::deactive("f22c597305eb1800", "example@domain.com");
```

### used

Make an invitation used
- Arguments:
	- invitation code
	- email

```php
Invi::used("f22c597305eb1800", "example@domain.com");
```

### unused

Make an invitation unused
- Arguments:
	- invitation code
	- email

```php
Invi::unused("f22c597305eb1800", "example@domain.com");
```

### delete

Delete an invitation
- Arguments:
	- invitation code
	- email

```php
Invi::delete("f22c597305eb1800", "example@domain.com");
```


## License

The MIT License (MIT)

Copyright (c) 2016 Atbox

http://atbox.io
https://github.com/atbox/invi-l5

Permission is hereby granted, free of charge, to any person obtaining a copy of
this software and associated documentation files (the "Software"), to deal in
the Software without restriction, including without limitation the rights to use,
copy, modify, merge, publish, distribute, sublicense, and/or sell copies of
the Software, and to permit persons to whom the Software is furnished to do so,
subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS
OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN
AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH
THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

http://opensource.org/licenses/MIT
