# myStarbucks
 Tugas Besar TekLog & RPL

## 0. Setup
Repositori ini dibangun dengan Laravel versi 6.02 ke atas. Setelah melakukan clone dari repositori ini, lakukanlah langkah-langkah di bawah ini untuk menjalankan project. 

* masuk ke direktori mystarbucks
```bash
$ cd mystarbucks
```
* jalankan perintah composer install untuk mendownload direktori vendor
```bash
$ composer install
```
* buat file .env lalu isi file tersebut dengan seluruh isi dari file .env.example

* jalankan perintah php artisan key generate
```bash
$ php artisan key:generate
```
* Tambahan: Untuk pengerjaan di laptop/PC, sesuaikan nama database, username dan password nya di file .env dengan database kalian. 

Setelah itu kalian sudah bisa lanjut mengerjakan. jangan lupa untuk menjalankan server laravel
```bash
$ php artisan serve
```
