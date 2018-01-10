# Contao Banking Widgets

> This module is currently only used in a single project and not generally tested. Feedback is welcome.

This module is a collection of widgets for banking purpose. They are designed to use with [Formhybrid]() module.

## Install

With composer:

```composer require heimrichhannot/contao-banking_widgets```

## Widgets

### IBAN

A widget to input iban number. It make use of [cmpayments/iban](https://github.com/cmpayments/iban) to validate IBAN inputs.

#### Usage
```
'iban'                => [
    'label'     => &$GLOBALS['TL_LANG']['tl_submission']['iban'],
    'exclude'   => true,
    'inputType' => 'ibanwidget',
    'eval'      => [
        'encrypt'   => true,
        'mandatory' => true,
        'tl_class'  => 'w50 clr'
    ],
    'sql'       => "varchar(255) NOT NULL default ''"
]
```






