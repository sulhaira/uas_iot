# APLIKASI SMART HOME (UAS IOT)

*Table of Contents*
- [ANGGOTA_KELOMPOK](#ANGGOTA-KELOMPOK)
- [DESKRIPSI PROJEK](#DESKIPSI-PROJEK)
- [BROKER YANG DIGUNAKAN](#BROKER-YANG-DIGUNAKAN)
- [TOPIC YANG DIGUNAKAN](#TOPIC-YANG-DIGUNAKAN)
- [ALUR PROJEK](#ALUR-PROJEK)


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

# TOPIC YANG DIGUNAKAN WOKWI DAN WEBHOOK
- control/bedroom/suhu, kelembaban, led
- control/bathroom/suhu, kelembaban, led
- control/kitchen/suhu, kelembaban, led
- control/living room/suhu, kelembaban, led

# ALUR PROJEK
sensor DHT pada Wokwi mempublish angka suhu dan kelembaban setiap ruangan ke broker, kodular dan website database akan menerima data untuk ditampilkan. kontroling LED akan mengambil data yang dipublish kodular dikirimkan ke broker lalu LED pada wokwi akan menyala dan mati. data yang ditampilkan di website dan kodular adalah data terakhir yang dikirimkan oleh broker.
