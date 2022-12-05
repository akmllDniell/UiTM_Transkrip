<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

<br>
<h1>INSTALLATION</h1>
<br>

Clone the Repo:
<li>git clone https://github.com/akmllDniell/UiTM_Transkrip.git/</li>
<li><b>IF YOU USING GITHUB DESKTOP PLEASE CHANGE THE LOCAL PATH TO: C:\laragon\www\</b></li>

<br>
In Terminal:

<li>cd laragon\www\UiTM_Transkrip</li>
<li>composer install</li>
<li>cp .env.example .env</li>
<li>Set up .env file</li>
<li>php artisan key:generate</li>
<li>php artisan storage:link</li>
<li>php artisan migrate:fresh --seed</li>
<li>php artisan serve <b>(if the project can't run using laragon)</b></li>



