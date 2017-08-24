PimPay Bundle
=============

This Bundle integrate the [Pimpay API Wrapper](http://platform.api.pimpay.ru/v2_6/docs/methods) into your Symfony Project.

[![Build Status](https://travis-ci.org/vragovR/pimpay-bundle.svg?branch=master)](https://travis-ci.org/vragovR/pimpay-bundle)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/vragovR/pimpay-bundle/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/vragovR/pimpay-bundle/?branch=master)
[![Code Climate](https://codeclimate.com/github/vragovR/pimpay-bundle/badges/gpa.svg)](https://codeclimate.com/github/vragovR/pimpay-bundle)

Installation
------------

### 1: Download

```bash
$ composer require vragovr/pimpay-bunle "dev-master"
```

### 2: Enable

```php
public function registerBundles()
{
    $bundles = [
        // ...
        new PimpayBundle\PimpayBundle(),
    ];
}
```

### 3: Configure

```yaml
pimpay:
  token: "your_token"
  path_key: "your_path_to_private_key"
  passphrase: "your_passphrase"
  hash: "SHA256"
```
