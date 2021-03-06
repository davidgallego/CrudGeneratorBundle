# CrudGeneratorBundle

This bundle generates code cute you extending SensioGeneratorBundle using KnpPaginatorBundle and Boostrap Templates an fosRestBundle.

## Installation

### Using composer

Add following lines to your `composer.json` file:

### Symfony 2.3.9 + Include Boostrap 3

```json
"require": {
    ...
    "davgava/crud-generator": "v2.3.9"
}
```
### Symfony > 2.3.6 + Include Boostrap 2

```json
"require": {
	...
	"davgava/crud-generator": "dev-2.3-bootstrap2"
}
```
### Symfony 2.3.3

```json
"require": {
	...
	"davgava/crud-generator": "v2.3.3"
}
```
### Symfony 2.3.1 - 2.3.2

```json
"require": {
	...
	"davgava/crud-generator": "v2.3.2"
}
```

Execute:

```cli
php composer.phar update "davgava/crud-generator"
```

Add it to the `AppKernel.php` class:

```php
	// ...
	new Davgava\Bundle\CrudGeneratorBundle\DavgavaCrudGeneratorBundle(),
	new Knp\Bundle\PaginatorBundle\KnpPaginatorBundle(),
	new Lexik\Bundle\FormFilterBundle\LexikFormFilterBundle(),
```

### Configuration paginator example

You can configure `config.yml` default query parameter names and templates

```yaml
    knp_paginator:
        page_range: 5                      # default page range used in pagination control
        default_options:
            page_name: page                # page query parameter name
            sort_field_name: sort          # sort field query parameter name
            sort_direction_name: direction # sort direction query parameter name
            distinct: true                 # ensure distinct results, useful when ORM queries are using GROUP BY statements
        template:
            pagination: KnpPaginatorBundle:Pagination:twitter_bootstrap_v3_pagination.html.twig # bootstrap 3 sliding pagination controls template
            sortable: KnpPaginatorBundle:Pagination:sortable_link.html.twig # sort link template
```

### Configuration filter example

You can configure `config.yml` find Twig Configuration

```yaml
    twig:
        ...
        form:
            resources:
                - LexikFormFilterBundle:Form:form_div_layout.html.twig
```

### Configure translations (include en, es, ca)

You can configure `config.yml`

```yaml
    framework:
        ...
        translator:      { fallback: %locale% } # uncomment line
```

### Install assets

```cli
app/console assets:install
```

## Dependencies

This bundle extends [SensioGeneratorBundle](https://github.com/sensio/SensioGeneratorBundle) and add a paginator using [KnpPaginatorBundle](https://github.com/KnpLabs/KnpPaginatorBundle) and filter using [LexikFormFilterBundle](https://github.com/lexik/LexikFormFilterBundle) .
[fosRESTBundle] (https://github.com/FriendsOfSymfony/FOSRestBundle)

## Usage

Use following command from console:

```cli
app/console davgava:generate:crud
```

## Authors

Gonzalo Alonso - gonkpo@gmail.com
David Gallego - gallego.david@gmail.com

## Bootstrap 3

Tito Canteros - titocanteros@gmail.com

.
