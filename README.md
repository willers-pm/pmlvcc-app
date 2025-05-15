# pmlvcc-app

## Installation

### Install [Laravel](https://laravel.com)

     $ composer global require laravel/installer

### Install [TALL Stack Preset Package](https://tallstack.dev)

     $ composer require livewire/livewire laravel-frontend-presets/tall</code>

### Install App

     $ laravel new pmlvcc-app
     $ cd pmlvcc-app
     $ npm install
     $ composer require livewire/livewire laravel-frontend-presets/tall
     $ php artisan ui tall --auth	
     $ npm install && npm run dev

### Run Dev Environment

     $ composer run dev


### Create Database

Create a database and update `config/database.php`

### Migration

     $ php artisan migrate
