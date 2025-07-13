# 🏥 Aplikasi Alat Tulis Kantor (ATK) untuk PUSKESMAS

> Sebuah sistem informasi sederhana berbasis web untuk mengelola data stok dan permintaan Alat Tulis Kantor (ATK) di lingkungan Puskesmas, dibuat untuk memudahkan proses pencatatan dan pelaporan.

<br>

<p align="center">
  <img width="1917" height="868" alt="atk" src="https://github.com/user-attachments/assets/1f54af95-77b5-4aca-896f-d42055582b28" />
</p>

---

## 💻 Teknologi yang Digunakan
Aplikasi ini dibangun menggunakan tumpukan teknologi yang umum dan mudah dipelajari:
* **Backend:** PHP (Natif)
* **Frontend:** HTML, CSS, JavaScript
* **Database:** MySQL / MariaDB
* **Web Server:** Apache (Direkomendasikan menggunakan XAMPP)

---

## 🚀 Cara Menjalankan Aplikasi

Pastikan Anda sudah menginstal **XAMPP** atau sejenisnya di komputer Anda.

### Metode 1: Manual (Download ZIP)
Cara ini cocok jika Anda tidak ingin menggunakan Git.

1.  **Download & Ekstrak Folder**
    * Download repository ini sebagai file ZIP dengan menekan tombol hijau `Code` > `Download ZIP`, atau klik [di sini](https://github.com/FlamboyantDS/Absensi-Online/archive/refs/heads/main.zip).
    * Ekstrak file ZIP yang sudah diunduh.
    * Ubah nama foldernya (contohnya `puskesmas-atk-main` menjadi `atk-puskesmas` agar lebih pendek).

2.  **Pindahkan ke htdocs**
    * Pindahkan folder `atk-puskesmas` tersebut ke dalam direktori `htdocs` di dalam folder instalasi XAMPP Anda.
    * *(Biasanya di `C:\xampp\htdocs\` untuk Windows)*

3.  **Setup Database**
    * Buka **phpMyAdmin** melalui browser (`http://localhost/phpmyadmin`).
    * Buat database baru dengan nama `db_atk_puskesmas` (atau nama lain sesuai file konfigurasi).
    * Masuk ke database yang baru dibuat, lalu pilih tab **Import**.
    * Klik `Choose File` dan pilih file `.sql` yang ada di dalam folder proyek (`database/db.sql`).
    * Klik **Go** atau **Import** untuk memulai proses impor.

4.  **Jalankan Aplikasi**
    * Buka browser Anda dan akses aplikasi melalui URL:
    * `http://localhost/atk-puskesmas`

### Metode 2: Git Clone (Direkomendasikan)
Cara ini lebih cepat dan profesional jika Anda sudah terbiasa dengan Git.

1.  **Buka Terminal**
    * Buka Terminal, CMD, atau Git Bash.
    * Arahkan ke direktori `htdocs` XAMPP Anda.
    ```bash
    cd C:/xampp/htdocs
    ```

2.  **Clone Repository**
    * Jalankan perintah `git clone` untuk mengunduh repository ke dalam folder `htdocs`.
    ```bash
    git clone [https://github.com/FlamboyantDS/Absensi-Online.git](https://github.com/FlamboyantDS/Absensi-Online.git) atk-puskesmas
    ```

3.  **Setup Database**
    * Lakukan langkah yang sama seperti pada **Metode 1 (Langkah 3)** untuk membuat database dan mengimpor file `.sql`.

4.  **Jalankan Aplikasi**
    * Akses aplikasi melalui URL di browser Anda:
    * `http://localhost/atk-puskesmas`

---

## 📂 Struktur Database
Struktur dan relasi tabel dapat dilihat pada file `database/db.sql`. Anda juga bisa melihat visualisasi ERD (Entity Relationship Diagram) di bawah ini.

<p align="center">
  <img src="URL_SCREENSHOT_ERD_ANDA" alt="ERD Aplikasi ATK" width="70%">
</p>

---

<br>

<div align="center">
  Dibuat dengan ❤️ dan secangkir kopi oleh <br>
  <strong>M Ilham Brosnansyah</strong>
  <br><br>
  <a href="https://github.com/FlamboyantDS">
    <img src="https://img.shields.io/badge/GitHub-181717?style=for-the-badge&logo=github&logoColor=white" alt="GitHub"/>
  </a>
  <a href="https://www.linkedin.com/in/nama-linkedin-anda/">
    <img src="https://img.shields.io/badge/LinkedIn-0A66C2?style=for-the-badge&logo=linkedin&logoColor=white" alt="LinkedIn"/>
  </a>
</div>
