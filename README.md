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

<h2><b>Clone the Repo:</b></h2>
<li>git clone https://github.com/akmllDniell/UiTM_Transkrip.git/</li>
<li><b>IF YOU USING GITHUB DESKTOP PLEASE CHANGE THE LOCAL PATH TO: C:\laragon\www\</b></li>

<br>
<h2><b>In Terminal:</b></h2>

<li>cd laragon\www\UiTM_Transkrip</li>
<li>composer install</li>
<li>cp .env.example .env</li>

<br>
<h2><b>Set up .env file</b></h2>
<li>Go to mysql/heidisql and create new database</li>
<li>Name the database uitmsystem</li>
<li>Go to project folder and find .env file</li>
<li>Change the DB_DATABASE=laravel to DB_DATABASE=uitmsystem</li>


<br>
<h2><b>Back to terminal</b></h2>
<li>php artisan key:generate</li>
<li>php artisan storage:link</li>
<li>php artisan migrate:fresh --seed</li>
<li>php artisan serve <b>(if the project can't run using laragon)</b></li>



