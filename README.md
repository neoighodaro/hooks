PHP-Hooks
=========

The PHP Hooks Class is a fork of the WordPress filters hook system rolled in to a class to be ported into any php based system
*  This class is heavily based on the WordPress plugin API and most (if not all) of the code comes from there.

How to Use?
=====

Simple, Include the class file in your application bootstrap (setup/load/configuration or whatever you call it) and start hooking your filter and action hooks using the global `$hooks`. Ex:

```PHP
$hooks = new Neo\Hooks\Hook;

$hooks->add_action('header_action','echo_this_in_header');

function echo_this_in_header(){
   echo 'this came from a hooked function';
}
```

Or you can alternatively call the added functions like you would on wordpress

```PHP
add_action('header_action','echo_this_in_header');

function echo_this_in_header(){
   echo 'this came from a hooked function';
}

do_action('action');
```

You can also install it using composer, by adding `"neo/hooks" : "dev-master"` to your composer.json file. You can refer to WordPress API documentation on how to use the hook functionality.