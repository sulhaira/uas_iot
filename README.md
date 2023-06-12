# APLIKASI SMART HOME (UAS IOT)

*Table of Contents*
- [ANGGOTA_KELOMPOK](#ANGGOTA-KELOMPOK)
- [DESKRIPSI PROJEK](#DESKIPSI-PROJEK)
- [BROKER YANG DIGUNAKAN](#BROKER-YANG-DIGUNAKAN)
- [TOPIC YANG DIGUNAKAN](#TOPIC-YANG-DIGUNAKAN-WOKWI-DAN-WEBHOOK)
- [ALUR PROJEK](#ALUR-PROJEK)
- [TAMPILAN PLATFORM](#TAMPILAN-PLATFORM)

# ANGGOTA KELOMPOK
- Fathia Nuq Qamarina   2009106012
- Riska Nurliyanti      2009106017
- Sulhairah             2009106026
- Jihan Nur Hafidzah    2009106038
- Cantika Fitri Ayu. D  2009106045

# DESKRIPSI PROJEK
projek ini merupakan aplikasi smarthome yang berbasis internet of things dengan menggunakan metode mqtt dan platform iot yang digunakan 
adalah kodular. projek ini menampilkan kelembaban, suhu, dan menongontrol mati nyala lampu LED yang terdiri dari 4 ruangan yaitu kitchen,
bathroom, bedroom, dan living room.

# BROKER YANG DIGUNAKAN
- https://tugasiot.cloud.shiftr.io/

![broker](https://github.com/sulhaira/uas_iot/assets/102597374/b65eb5d5-252c-493b-a944-a7be0259fa8e)

# TOPIC YANG DIGUNAKAN WOKWI DAN WEBHOOK
WOKWI
- control/bedroom/suhu, kelembaban, led
- control/bathroom/suhu, kelembaban, led
- control/kitchen/suhu, kelembaban, led
- control/living room/suhu, kelembaban, led

WEBHOOK
- namawebhook = data logging
- (#) = topic

# ALUR PROJEK
sensor DHT pada Wokwi mempublish angka suhu dan kelembaban setiap ruangan ke broker, kodular dan website database akan menerima data untuk ditampilkan. kontroling LED akan mengambil data yang dipublish kodular dikirimkan ke broker lalu LED pada wokwi akan menyala dan mati. data yang ditampilkan di website dan kodular adalah data terakhir yang dikirimkan oleh broker.

# TAMPILAN PLATFORM
WEBSITE

![Screenshot (440)](https://github.com/sulhaira/uas_iot/assets/102597374/0bbc8523-92bb-487d-a9de-cd064aff0776)
![Screenshot (441)](https://github.com/sulhaira/uas_iot/assets/102597374/0410a8cf-8757-48ee-a9eb-6781e29ef55a)
![Screenshot (442)](https://github.com/sulhaira/uas_iot/assets/102597374/f37e6bab-f736-4fb1-80bf-2cbf04a9ccf6)

KODULAR

![WhatsApp Image 2023-06-12 at 19 44 36](https://github.com/sulhaira/uas_iot/assets/102597374/56e6fc55-d8f1-47d8-8eb8-5759ffd9edfe)
