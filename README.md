# Invi Package for Laravel 5 #

This package help you to make a simple invitation system for your signup or other services.
[https://packagist.org/packages/atbox/invi]

## Features ##
- Generate invitation code with email.
- Set expiration date
- Active or deactive invite
- Use it,unsed it or delete it

## Installation ##
add this to composer.json require:
```php
"atbox/invi": "dev-master"
```

add this to app/config/app.php end of providers array:
```php
Atbox\Invi\InviServiceProvider::class,
```

add this to config/app.php end of aliases array:
```php
'Invi'      => Atbox\Invi\Facades\Invi::class,
```

execute:
```php
composer update
```

if Invi class not found run this command for autoload:
```php
composer dump-autoload
```

Publish migration file:
```php
php artisan vendor:publish
```

Run migration command:
```php
php artisan migrate
```

now just use Invi:

```php
use Invi;
```

## Examples ##


```php
Invi::generate("example@domain.com","2 day",True); // Generate Invitation

if(Invi::check("f22c597305eb1800","example@domain.com"))
	Invi::used("f22c597305eb1800","example@domain.com");
else
	echo Invi::status("f22c597305eb1800","example@domain.com");
```


## Functions ##

generate
==
generate an invitation code
- Arguments:
	- email
	- expiration date : 2 year 2 month 13 day 1 hour 23 min 40 sec
	- active
- Return:
	- A jSon array of all invitation information

```php
Invi::generate("example@domain.com","2 day",True); // Generate Invitation
```
- Output:

```php
{"code":"f22c5973ebbcca99","email":"example@domain.com","expiration":"2013-05-10 15:58:41 ","active":true,"used":"0"}
```

check
===
validate invitation code
- Argouments:
	- invitation code
	- email
- Return:
	- Boolean


```php
Invi::check("f22c597305eb1800","example@domain.com");
```

status
===
return invitation code status
- Argouments:
	- invitation code
	- email
- Return:
	- Status :  Active,Deactive,Used,Valid,Not Exist

```php
echo Invi::status("f22c597305eb1800","example@domain.com");
```

active
===
activate an invitation
- Argouments:
	- invitation code
	- email

```php
Invi::active("f22c597305eb1800","example@domain.com");
```

deactive
===
deactivate an invitation
- Argouments:
	- invitation code
	- email

```php
Invi::deactive("f22c597305eb1800","example@domain.com");
```

used
==
make an invitation used
- Argouments:
	- invitation code
	- email

```php
Invi::used("f22c597305eb1800","example@domain.com");
```

unused
==
make an invitation unused
- Argouments:
	- invitation code
	- email

```php
Invi::unused("f22c597305eb1800","example@domain.com");
```

delete
==
delete an invitation
- Argouments:
	- invitation code
	- email

```php
Invi::delete("f22c597305eb1800","example@domain.com");
```


## License ##

The MIT License (MIT)

Copyright (c) 2014 Sajjad Rad

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
