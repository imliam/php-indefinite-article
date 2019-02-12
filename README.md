# PHP Indefinite Articles

[![Latest Version on Packagist](https://img.shields.io/packagist/v/imliam/php-indefinite-article.svg)](https://packagist.org/packages/imliam/php-indefinite-article)
[![Build Status](https://img.shields.io/travis/imliam/php-indefinite-article.svg)](https://travis-ci.org/imliam/php-indefinite-article)
![Code Quality](https://img.shields.io/scrutinizer/g/imliam/php-indefinite-article.svg)
![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/imliam/php-indefinite-article.svg)
[![Total Downloads](https://img.shields.io/packagist/dt/imliam/php-indefinite-article.svg)](https://packagist.org/packages/imliam/php-indefinite-article)
[![License](https://img.shields.io/github/license/imliam/php-indefinite-article.svg)](LICENSE.md)

Determine the indefinite article of an English term.

An indefinite article is the word that comes before nouns or noun equivalents in English, such as "_a_" or "_an_". If the word starts with a consonant sound, the article used should be "_a_" — for example "banana" becomes "_a_ banana". If the word starts with a vowel sound, the article used should be "_an_" — for example "apple" becomes "_an_ apple".

This is not as simple as checking whether the first character of the word is a vowel or consonant as that does not determine the sound pronounced when speaking the word.

This is a port of [Eamon Nerbonne's original solution](https://github.com/EamonNerbonne/a-vs-an) for the problem.

<!-- TOC -->

- [PHP Indefinite Articles](#php-indefinite-articles)
    - [💾 Installation](#💾-installation)
    - [📝 Usage](#📝-usage)
    - [✅ Testing](#✅-testing)
    - [🔖 Changelog](#🔖-changelog)
    - [⬆️ Upgrading](#⬆️-upgrading)
    - [🎉 Contributing](#🎉-contributing)
        - [🔒 Security](#🔒-security)
    - [👷 Credits](#👷-credits)
    - [♻️ License](#♻️-license)

<!-- /TOC -->

## 💾 Installation

You can install the package with [Composer](https://getcomposer.org/) using the following command:

```bash
composer require imliam/php-indefinite-article:^1.0.0
```

## 📝 Usage

``` php
$word = new ImLiam\IndefiniteArticle\IndefiniteArticle('apple');

echo $word->parse();
// "an apple"

echo $word->article();
// "an"
```

## ✅ Testing

``` bash
composer test
```

## 🔖 Changelog

Please see [the changelog file](CHANGELOG.md) for more information on what has changed recently.

## ⬆️ Upgrading

Please see the [upgrading file](UPGRADING.md) for details on upgrading from previous versions.

## 🎉 Contributing

Please see the [contributing file](CONTRIBUTING.md) and [code of conduct](CODE_OF_CONDUCT.md) for details on contributing to the project.

### 🔒 Security

If you discover any security related issues, please email liam@liamhammett.com instead of using the issue tracker.

## 👷 Credits

- [Liam Hammett](https://github.com/imliam)
- [Eamon Nerbonne](https://github.com/EamonNerbonne/a-vs-an) for the original solution
- [All Contributors](../../contributors)

## ♻️ License

The MIT License (MIT). Please see the [license file](LICENSE.md) for more information.
