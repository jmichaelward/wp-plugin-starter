# WP Plugin Starter
Development has just begun on this plugin; the goal is to create an
intuitive starting point for beginning plugin development by providing
some out-of-the-box scaffolding, and eliminating the need to perform
manual string replacements on things like plugin names, class namespaces,
author names, URLs, and more.

This example plugin requires the [WP Plugin Starter Init](https://github.com/jmichaelward/wp-plugin-starter-init)
Symfony Console command as a development dependency. Eventually, the idea is that
this dependency will get triggered upon use of the `composer create-project` command,
opening an interactive wizard that will ask you for your replacement terms.

Following confirmation of your entered terms, the replacement process
will begin, and from there, you'll have a functioning plugin at your
own namespace, and you can start building out its functionality.

## Installation
To give it a try, you can run the following command:

`composer create jmichaelward/wp-plugin-starter your-project-name`.

This will create a directory named `your-project-name` from the location
where the command was called, and will automatically download the
required dependencies.

Once the plugin is installed, `cd your-project-name`, then run
`./vendor/bin/wp-plugin-starter-init`. As of right now, you will be
asked simply for a namespace matching the _Vendor\PackageName_ convention.
After submitting this namespace, your main plugin file should get updated
to `your-project-name.php` and the main plugin file and Plugin.php file
will be updated to reflect the _Vendor\PackageName_ value you entered. 
