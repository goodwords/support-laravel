# Blade templates inside CodeIgniter


## Install

Install Composer as described at [composer documentation](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)

Create `composer.json` inside your root project directory if you do not have one and specify the dependency for this package

```
{
    "require": {
        "goodwords/support-laravel": "dev-master"
    },
    "repositories": [
        {
            "type": "vcs",
            "url": "git@github.com:goodwords/support-laravel.git"
        }
    ]
}
```

Install the package running `composer install`


## Setup

Require composer inside your `www/index.php` and pass configuration inside the package

```
require dirname(__FILE__).'/../vendor/autoload.php';

\Goodwords\Support\Laravel\Provider::register([
    'view' => [
        'paths' => [ 'path/to/directory/where/blade/templates/are/located' ],
        'compiled' => 'path/to/directory/where/to/cache/compiled/templates',
    ]
]);

```


## Use Blade tamplates

Use global function `view()` to render yor templates

```
return view('templateName');

return view('templateDirectory/templateName');

return view('templateName')->with('variableName', $variableValue);

return view('templateName', ['variableName'=>$variableValue]);
```
