# Enabling dynamical <title> in <head>

dynamically <title> can be handle according to sub-pages or posts.

In your header.php file, ensure that you have

```
<?php wp_head(); ?>
```

within the `<head>` section. WordPress will output the correct title tag.

The `header.php` file will be look like as below

```ruby
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>  </head>
<body <?php body_class(); ?>>

```

## How WordPress Generates the Title dynamically:

- **Page/Post Titles:** WordPress uses the title of the current page or post as the primary part of the <title> tag.
- **Site Title and Tagline:** WordPress also includes your site's title and tagline (set in `Settings -> General`) in the `<title>` tag.
- **Separators:** WordPress uses a separator (usually "|") to separate the different parts of the title.

## Version 1 (v1)

Ths `functions.php` is given in **v1** folder

if we add below function in `functions.php`.

```ruby
<?php
// Theme Setup - title
function gifton_theme_setup_title() {

     // Add support for title tag
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'gifton_theme_setup_title');
?>
```

## output before above code

![Before our code](/images/before_title_dynamically.jpg)

## output After above code

![Before our code](/images/after_title_dynamically.jpg)
