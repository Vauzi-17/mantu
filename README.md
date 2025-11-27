# Mantu

## Lingkungan variabel

Setel beberapa lingkungan variabel di bawah ini di lingkungan prod-nya! Untuk contoh beberapa variabel lingkungan ada di `.env.example`

### Aplikasi
Untuk mendapatkan `APP_KEY` jalankan `php artisan key:generate`

```
APP_NAME=Mantu
APP_ENV=production
APP_KEY=...
APP_DEBUG=false
APP_URL=https://mantuxipplg1.smktelkom-pwt.sch.id
```

### MySQL
Pastikan sudah ada database MySQL yang berjalan. Untuk migrasi jalankan perintah `php artisan migrate`. Untuk paksa migrasi maka jalankan perintah `php artisan migrate:fresh`

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mantu
DB_USERNAME=root        !GUNAKAN USERNAME SELAIN INI
DB_PASSWORD=root        !GUNAKAN PASSWORD SELAIN INI
```

### Mailer
Untuk mendapatkan `MAIL_PASSWORD` silahkan tanyakan 541241041@student.smktelkom-pwt.sch.id. 

```
MAIL_MAILER=smtp
MAIL_HOST=smtp.googlemail.com
MAIL_PORT=587
MAIL_USERNAME=mantuxipplg1@gmail.com
MAIL_PASSWORD=test123
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="noreply.mantuxipplg1@gmail.com"
MAIL_FROM_NAME="Mail Officer of XI PPLG 1"
```