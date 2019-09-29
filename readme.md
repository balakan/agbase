![alt text](public/media/aglogo.png "Logo Title Text 1")
# About AGbase

AGbase je starter kit za aplikacije. Laravel baza, pripremljena Codebase tema, autentifikacija, lokalizacija i debbuger. Za instalaciju je potrebno u konzoli u root folderu izvesti komande:

### Osnovna instalacija...

- composer install
- npm install
- npm run dev

`Treba još srediti login, register... Blade views...`

> Nakon ovih akcija AGbase aplikacija bi trebala biti podešena sa osnovim rutama i temom.

### Instaliracija migracija, baze i autorizacije...

- .env.example kopiraj u .env
- Otvori bazu i u .env fajlu promjeni podatke za bazu.

#### U konzoli u root folderu pokreni komande. (copy/paste):

- php artisan vendor:publish --tag="bouncer.migrations"
- php artisan vendor:publish --provider="Mcamara\LaravelLocalization\LaravelLocalizationServiceProvider"
- php artisan make:auth
- php artisan migrate

`Treba još srediti polja u nekim tablicama.`

> Nakon ovih akcija AGbase aplikacija bi trebala biti spremna za rad. 
> Sa osnovim rutama, temom, dashboardom i autorizacijom...
> I nekim simple Page Builderom i Editorom,

---

## Autentifikacija

[JosephSilber/bouncer](https://github.com/JosephSilber/bouncer)

## Lokalizacija

[mcamara/laravel-localization](https://github.com/mcamara/laravel-localization)

## Dodatna literatura

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.


## License

The AGbase aplication is private software licensed under the [MIT license](https://opensource.org/licenses/MIT).
