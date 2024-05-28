## API
### Apa itu API ?
API adalah kepanjangan dari Application Programming Interface, yaitu suatu jenis antarmuka yang menghubungkan antar aplikasi/software.

### Contoh API
- Windows API (WinAPI)
- Cocoa (MacOS)
- Google API

### Definisi REST API
- REST (Representational State Transfer) adalah arsitektur untuk merancang layanan web.

### Prinsip Dasar REST
- **Stateless**:
  - Setiap permintaan dari klien ke server harus berisi semua informasi yang diperlukan untuk memahami dan memproses permintaan.
- **Client-Server**:
  - Pemisahan antara klien (pengguna antarmuka) dan server (pengolahan data).
- **Cacheable**:
  - Respons dari server dapat di-cache oleh klien untuk mengurangi waktu respon dan beban server.
- **Layered System**:
  - Arsitektur berlapis untuk meningkatkan skalabilitas dan keamanan.

### Komponen Utama REST API
- **Resources**:
  - Segala sesuatu yang dapat diakses di REST API adalah sumber daya (resources), yang diidentifikasi oleh URL.
- **HTTP Methods**:
  - GET: Mengambil data.
  - POST: Mengirim data untuk membuat sumber daya baru.
  - PUT: Mengupdate data pada sumber daya yang ada.
  - DELETE: Menghapus sumber daya.
- **Representasi Sumber Daya**:
  - Sumber daya biasanya direpresentasikan dalam format JSON atau XML.

### HTTP Status Codes
- **2xx: Success**:
  - 200 OK, 201 Created.
- **4xx: Client Errors**:
  - 400 Bad Request, 401 Unauthorized, 404 Not Found.
- **5xx: Server Errors**:
  - 500 Internal Server Error, 503 Service Unavailable.

### Ilustrasi

![REST API](images/rest-api.png)

### Keamanan REST API
- **Authentication & Authorization**:
  - Menggunakan token (JWT, OAuth).
- **HTTPS**:
  - Menggunakan HTTPS untuk mengenkripsi data yang ditransfer.
- **Rate Limiting**:
  - Membatasi jumlah permintaan dari klien dalam waktu tertentu untuk mencegah penyalahgunaan.

### Best Practices
- **Consistency**:
  - Konsistensi dalam penamaan endpoint, penggunaan metode HTTP, dan format respons.
- **Versioning**:
  - Mengelola versi API untuk mengatasi perubahan dan pembaruan.
- **Documentation**:
  - Mendokumentasikan API secara lengkap dan jelas menggunakan alat seperti Swagger atau OpenAPI.

### Implementasi dan Alat Bantu
- **Frameworks dan Libraries**:
  - Django REST Framework (Python), Express (Node.js), Laravel (PHP).
- **Testing**:
  - Alat bantu seperti Postman atau Insomnia untuk menguji endpoint API.
- **Monitoring**:
  - Menggunakan alat monitoring untuk melacak performa dan kesehatan API.
  - Dapat menggunakan software seperti ELK Stack (Elasticsearch, Logstash, Kibana) atau Grafana.

### Studi Kasus
- **Contoh Penggunaan**:
  - API untuk aplikasi e-commerce, media sosial, integrasi pembayaran, dll.
- **Keberhasilan Implementasi**:
  - Perusahaan yang berhasil menggunakan REST API untuk meningkatkan layanan mereka (misalnya, Twitter API, GitHub API).