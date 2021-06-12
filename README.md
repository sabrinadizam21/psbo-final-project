<p align="center">
  <a href="">
    
  </a>

  <h3 align="center">SIK-POLI</h3>

  <p align="center">
    Sistem Informasi Rekam Medis dan Konsultasi pada Poliklinik IPB</br>
    (Paralel 1 Kelompok 9) 
    <br>
    <br>
    <br>
  </p>
</p>

<table align="center">
<thead>
<tr>
<th align="center"><a href="#deskripsi-singkat-aplikasi">Deskripsi</a></th>
<th align="center"><a href="#user-analysis">User Analisis</a></th>
<th align="center"><a href="#spesifikasi-teknis-lingkungan-pengembangan">Spesifikasi</a></th>
<th align="center"><a href="#konsep-oop-yang-digunakan">Konsep OOP</a></th>
<th align="center"><a href="#tipe-desain-pengembangan-yang-digunakan">Tipe Desain</a></th>
<th align="center"><a href="#hasil-dan-pembahasan">Hasil dan Pembahasan</a></th>
<th align="center"><a href="#hasil-implementasi">Hasil Implementasi</a></th>
<th align="center"><a href="#saran-untuk-pengembangan-selanjutnya">Saran</a></th>
<th align="center"><a href="#developer-dan-job-desc">Developer</a></th>
</tr>
</thead>
</table align="center">

## A. Deskripsi Singkat Aplikasi 

SIK-POLI merupakan aplikasi untuk Poliklinik IPB berbasis website yang bertujuan untuk mempermudah mahasiswa IPB dalam menggunakan fasilitas Poliklinik IPB dalam akses online. Fitur pelayanan yang tersedia, seperti:
- Konsultasi online dengan dokter Poliklinik untuk membantu mahasiswa yang mengalami masalah kesehatan dalam jarak jauh, sehingga BPJS yang terdaftar di Poliklinik masih tetap dapat digunakan.
- Tersedia pula rekam medis mahasiswa selama berobat di Poliklinik untuk memantau kesehatan mahasiswa dalam sebulan/setahun terakhir. 
- Mahasiswa pun juga dipermudah dengan adanya jadwal dokter yang tersedia di website SIK-POLI sehingga mahasiswa dapat melakukan kunjungan ke Poliklinik sesuai jadwal dokter yang ada.

## B. User Analysis

### User Story

- Sebagai mahasiswa IPB, saya ingin mendapatkan data rekam medis saya selama berobat di Poliklinik IPB untuk keperluan berobat di rumah sakit lain.
- Sebagai mahasiswa IPB, saya membutuhkan transparansi jadwal praktek dokter dan pelayanannya agar memudahkan saya dalam menentukan jadwal konsultasi.
- Sebagai mahasiswa IPB, saya ingin memanfaatkan BPJS saya yang sudah terdaftar di Poliklinik IPB agar saya tidak perlu konsultasi di rumah sakit lain selama pandemi ini.

## C. Spesifikasi Teknis Lingkungan Pengembangan

### 1. Software

![Frame 1 (2)](https://user-images.githubusercontent.com/60166588/121624589-00ad5300-ca9c-11eb-99a4-ef314184684b.png)

### 2. Hardware
### 3. Tech Stack

## D. Konsep OOP yang digunakan

### 1. Encapsulation
Encapsulation adalah konsep fundamental pada pemrograman berorientasi objek yang menggambarkan suatu ide untuk membungkus property dan metode pada suatu class sehingga tidak sembarangan diakses oleh class lainnya. Untuk menjaga hal tersebut dalam Encapsulation dikenal nama Hak Akses Modifier yang terdiri dari: Public, Private, dan Protected. Disini contohnya kami menggunakan hak akses public pada method `rekammedis` yang artinya seluruh kode program di luar class bisa mengaksesnya termasuk class turunan

```text
...
class RekamMedisController extends Controller
{
    public function rekammedis()
    {
        $data_rekammedis = \App\RekamMedis::all();
        return view('rekam-medis',['data_rekammedis' => $data_rekammedis]);
    }
    ...
}
```
### 2. Inheritance
Inheritance merupakan konsep pemograman dimana sebuah class dapat menurunkan property dan method yang dimilikinya kepada kelas lain. Disini contohnya adalah class `authenticatable` diwariskan ke class `dokter` 
```text
...
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

//class Dokter extends Model
//{}
class Dokter extends Authenticatable
{
    use Notifiable;
    
    protected $guard = 'dokter';
    
    protected $fillable = [
        'name', 'email', 'password',
    ];
    
    protected $hidden = [
        'password', 'remember_token',
    ];
}

```

## E. Tipe Desain Pengembangan yang Digunakan
Dalam projek kami, kami menerapkan design pattern MVC (model, view, controller). MVC adalah suatu pola 
arsitektur yang digunakan dalam rekayasa perangkat lunak, prinsipnya bahwa logic suatu aplikasi harus 
dipisahkan dari presentation codenya. Sehingga design pattern ini membagi suatu aplikasi menjadi tiga 
bagian yang saling berhubungan. 

### 1. Model
Model mewakili stuktur data, yang biasanya berhubungan langsung dengan database. Model biasanya berisikan fungsi-fungsi untuk memanipulasi data seperti create, read, update, delete, dan juga menangani validasi dari bagian controller.
Penerapan pada sistem :
- Model mahasiswa: 
- Model admin:
- Model rekam medis:
- Model jadwal dokter:

### 2. View
View merupakan bagian yang langsung berhubungan dengan pengguna. View sendiri memiliki fungsi untuk merepresentasikan data yang diperoleh dari model dan telah di olah oleh controller kepada user. Untuk tampilan kami menggunakan bahasa pemrograman PHP. Pada framework laravel terdapat fitur Blade. Blade berfungsi untuk menampilkan output pada view. blade juga digunakan untuk membuat layout website.
Penerapan pada sistem untuk mahasiswa:
- Halaman welcome: merupakan halaman pertama yang akan ditampilkan ketika mahasiswa belum melakukan login
- Form login: merupakan form login untuk masuk ke dalam website
- Halaman home: merupakan halaman pertama yang akan ditampilkan ketika mahasiswa sudah melakukan login
- Jadwal dokter: merupakan halaman yang berisi informasi mengenai jadwal dokter
- Rekam medis: berisi profil dan rekam medis dari mahasiswa
- Konsultasi: berupa halaman chat konsultasi dengan dokter

Penerapan pada sistem untuk admin:
- Form login: merupakan form login untuk masuk ke dalam siste
- Dashboard: berisi informasi mengenai traffic dari website
- Jadwal dokter: berisi jadwal dokter dan pilihan untuk mengedit dan menghapus jadwal dokter tertentu
- Rekam medis: berisi daftar rekam medis dan pilihan untuk mengedit dan menghapus rekam medis dari mahasiswa tertentu

### 3. Controller
Controller merupakan bagian yang menjadi jembatan penghubung antara model dan view. Data yang diperoleh dari model harus melalui controller agar dapat dipetakan dan ditampilkan di view. Controller juga berfungsi untuk menerima request dan data dari user kemudian menentukan apa yang akan di proses oleh aplikasi.

Penerapan pada sistem :

- Auth controller digunakan untuk mengatur autentikasi saat login sehingga hanya admin dan mahasiswa yang bisa mengakses SIK-POLI
- Controller untuk setiap model 

## F. Hasil dan Pembahasan

### 1. Use Case Diagram
![Diagram Kelompok 9-Use Case](https://user-images.githubusercontent.com/60166588/121620205-1ae33300-ca94-11eb-8092-3a97bb74a0ad.png)

### 2. Activity Diagram

#### - Melihat Rekam Medis atau Jadwal Dokter
![Diagram Kelompok 9-AD 1 - melihat rekam medis](https://user-images.githubusercontent.com/60166588/121620404-77dee900-ca94-11eb-8d2f-30ff19fabc53.png)

#### - Menambah Jadwal Dokter
![Diagram Kelompok 9-AD 2 - menambah jadwal](https://user-images.githubusercontent.com/60166588/121620518-aeb4ff00-ca94-11eb-836e-d3012f82ad93.png)

#### - Menghapus Jadwal Dokter
![Diagram Kelompok 9-AD 3 - menghapus jadwal](https://user-images.githubusercontent.com/60166588/121620630-de640700-ca94-11eb-8840-c0037ec47985.png)

#### - Mengupdate Jadwal Dokter
![Diagram Kelompok 9-AD 4 - mengubah jadwal](https://user-images.githubusercontent.com/60166588/121620705-fc316c00-ca94-11eb-8a6d-23cdbadae2da.png)

#### - Mengupdate Rekam Medis
![update rekam medis](https://user-images.githubusercontent.com/60166588/121625901-9518b500-ca9e-11eb-90b0-2d1c6cb16183.png)

### 3. Class Diagram
![class diagram](https://user-images.githubusercontent.com/60166588/121625989-c1cccc80-ca9e-11eb-95be-12a12c0d4d8a.png)


### 4. Entity Relationship Diagram
### 5. Arsitektur Sistem
### 6. Fungsi Utama yang Dikembangkan
### 7. Fungsi CRUD

## G. Hasil Implementasi

### 1. Screenshoot Sistem
### 2. Link Aplikasi

## H. Saran untuk Pengembangan Selanjutnya

## I. Developer dan Job Desc

| NIM      | NAMA                           | JOB DESC  |
| ----------| ------------------------------| --------- |
| G64180029 | Sabrina Diza Melinda          |           |
| G64180030 | Zahra Aulia Firdausi          |           |
| G64180053 | Putri Melanita Londong Bua    |           |
| G64180062 | Syukriyatul Hanifa            |           |
| G64180077 | Alwi Miftahul Karomi          |           |



