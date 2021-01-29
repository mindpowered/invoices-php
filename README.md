
invoices
========
Create, edit, and track invoices as part of your app

![Build Status](https://mindpowered.dev/assets/images/github-badges/build-passing.svg)

Contents
========

* [Source Code and Documentation](#source-code-and-documentation)
* [Licensing](#licensing)
* [About](#about)
* [Requirements](#requirements)
* [Installation](#installation)
* [Usage](#usage)
* [Support](#support)

# Source Code and Documentation
- Source Code: [https://github.com/mindpowered/invoices-php](https://github.com/mindpowered/invoices-php)
- Documentation: [https://mindpowered.github.io/invoices-php](https://mindpowered.github.io/invoices-php)

# Licensing
To obtain a version of this package under the MIT License, follow the instructions to [get a license][purchase]. The MIT License has no restrictions on commercial use and permits reuse within proprietary software.

# About
An invoice lists the quantities and costs of the products or services provided by a seller to a buyer. The top of the invoice usually includes the:
- contact information of the seller
- contact information of the buyer
- date of the invoice

In the middle of the invoice is a list of products or services. A line item refers to a line from this list. The line item describes the product or service, quantity, rate, price, and taxes.

At the bottom of the invoice is a summary which usually includes:
- subtotal (before tax)
- total (with tax) amount
- payment terms.

This package aims to provide the tools to create and edit invoices. This is useful for sending by the seller or receiving by the buyer.

# Requirements
- php >= 7
- php `mbstring` extension
- php `xml` extension


Third-party dependencies may have additional requirements.

# Installation

You can get invoices using Composer. Composer manages dependencies for packages from Packagist and you can get it here: <https://getcomposer.org/> .

Create a composer.json file in the top-most directory of your project and add `mindpowered/invoices` to the requirements:
```
{
        "require": {
                "mindpowered/invoices" : "*"
        }
}
```
Now you can run the command to update composer: `composer update`. In order for composer to install the package dependencies you will need an archive manager such as zip installed. Composer requires use of the commands `zip` and `unzip`.


# Usage
```php
require __DIR__ . '/vendor/autoload.php';

use \mindpowered\invoices\Invoices;

$inv = new Invoices();
$inv->Create("354", "2153", "2021-02-01", "2021-03-01", "Thanks for the business!");

```


# Support
We are here to support using this package. If it doesn't do what you're looking for, isn't working, or you just need help, please [Contact us][contact].

There is also a public [Issue Tracker][bugs] available for this package.



[bugs]: https://github.com/mindpowered/invoices-php/issues
[contact]: https://mindpowered.dev/support.html?ref=invoices-php/
[docs]: https://mindpowered.github.io/invoices-php/
[licensing]: https://mindpowered.dev/?ref=invoices-php
[purchase]: https://mindpowered.dev/purchase/
