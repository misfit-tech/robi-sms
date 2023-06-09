<p align="center">
    <img src="banner.png">
</p>

![Packagist Version](https://img.shields.io/packagist/v/misfit/robisms) ![Packagist Downloads](https://img.shields.io/packagist/dt/misfit/robisms) ![Packagist License](https://img.shields.io/packagist/l/misfit/robisms)

 # Robi SMS Sending Laravel Package
 ### :feet: Installation
 ```sh
  composer require misfit/robi-sms
 ```
 ### :outbox_tray: Configuration
 :small_blue_diamond: To publish the config, run from terminal
 ```sh
  php artisan vendor:publish --provider='Misfit\Robisms\RobiSmsServiceProvider'
 ```
 ### :lock: Credentials
 :small_blue_diamond: Its time to set your Robi Credentials in .env
```sh
    ROBI_USERNAME=
    ROBI_PASSWORD=
    ROBI_SMS_NUMBER=
    ROBI_SMS_TIMEOUT=
 ```
### :envelope: Messaging
 :small_blue_diamond: Now you can use the sms service anywhere in your project by calling robi_sms() method.
 ```sh
  robi_sms(['mobile_no'=>'01xxxxxxxxx','msg'=>'Bismillah'])
 ```
