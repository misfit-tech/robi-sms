![Packagist Version](https://img.shields.io/packagist/v/misfit/robisms) ![Packagist Downloads](https://img.shields.io/packagist/dt/misfit/robisms) ![Packagist License](https://img.shields.io/packagist/l/misfit/robisms)

 # [Robi SMS] - Laravel Package for Sending SMS Through Robi
 ### :feet: Installation
 ```sh
  composer require misfit/robi-sms
 ```
 :small_blue_diamond: Or you can install a specific version
 ```sh
  composer require misfit/robi-sms:version
 ```
 You can also remove it by
  ```sh
   composer remove misfit/robi-sms
  ```
 # :outbox_tray: Publish Configuration
 :small_blue_diamond: To publish the config, run from terminal
 ```sh
  php artisan vendor:publish --provider='Misfit\Robisms\RobiSmsServiceProvider'
 ```
 # :lock: Set Robi Credentials
 :small_blue_diamond: Its time to set your Robi Credentials in .env
```sh
    ROBI_USERNAME=
    ROBI_PASSWORD=
    ROBI_SMS_NUMBER=
    ROBI_SMS_TIMEOUT=
 ```
 :small_blue_diamond: To reflect new .env config, you can always run
 ```sh
  php artisan config:clear
 ```
  # :envelope: Sending Message
 :small_blue_diamond: Now you can use the sms service anywhere in your project by calling robi_sms() method.
 ```sh
  robi_sms(['mobile_no'=>'01xxxxxxxxx','msg'=>'Bismillah'])
 ```
