## Laravel File Manager Package
This best package  for manage file and directory can run  app with laravel

## Requirements

You need at least **Laravel 5.5+** to use this package.

## Usage

1. Require the package:
    ```bash
    composer require esmaily/file-manager
    ```

    The package automatically installed fo your.

2. Publish the configuration file:
    ```bash
    php artisan vendor:publish --provider="Esmaily\FileManager\FileManagerServiceProvider" --tag="filemanager-config"
    ```
  
3. Should be include styling,  publish the CSS to your public directory:
    ```bash
    php artisan vendor:publish --provider="Esmaily\FileManager\FileManagerServiceProvider" --tag="filemanager-assets"
    ```
 4. Edit the configuration file `config/filemanager.php` to setup your  manage root directory .
 
 5. (optional) If you want to use the included view files:
     ```bash
     php artisan vendor:publish --provider="Esmaily\FileManager\FileManagerServiceProvider" --tag="filemanager-views"
     ```

## Licence
MIT
