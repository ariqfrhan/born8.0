<?php
function allowAccessNIM($NIM = null)
{
    if ($NIM == null) {
        return false;
    }
    $allow = [
        
    ];
    if (in_array($NIM, $allow)) {
        return true;
    } else {
        return false;
    }
}
function fillOrNot($props, $feedback = "<Kosong>")
{

    if (isset($props)) {
        return $props;
    } else {
        return $feedback;
    }
}
function jenisKelamin($jenisKelamin = null)
{
    $data = [
        "Laki-laki" => "Laki-laki",
        "Perempuan" => "Perempuan",
    ];
    if (isset($jenisKelamin)) {
        return $data[$jenisKelamin];
    } else {
        return $data;
    }
}
function agama($agama = null)
{
    $data = [
        "Islam" => "Islam",
        "Kristen" => "Kristen",
        "Katholik" => "Katholik",
        "Hindu" => "Hindu",
        "Budha" => "Budha",
        "Konghucu" => "Konghucu",
        "Lainnya" => "Lainnya",
    ];
    if (isset($agama)) {
        return $data[$agama];
    } else {
        return $data;
    }
}
function disabilitas($disabilitas = null)
{
    $data = [
        "Tidak Ada" => "Tidak Ada",
        "Tuna Netra" => "Tuna Netra",
        "Tuna Daksa" => "Tuna Daksa",
        "Tuna Rungu" => "Tuna Rungu",
        "Tuna Wicara" => "Tuna Wicara",
        "Lainnya" => "Lainnya",
    ];
    if (isset($disabilitas)) {
        return $data[$disabilitas];
    } else {
        return $data;
    }
}
function ukm_category($ukm = null)
{
    $data = [
        "Olahraga" => "Olahraga",
        "Khusus" => "Khusus",
        "Kesenian" => "Kesenian",
        "Penalaran" => "Penalaran",
        "Kesejahteraan" => "Kesejahteraan",
    ];
    if (isset($ukm)) {
        return $data[$ukm];
    } else {
        return $data;
    }
}
function vaksin($vaksin = null)
{
    $data = [
        "Vaksin 1" => "Vaksin 1",
        "Vaksin 2" => "Vaksin 2",
        "Vaksin 3 Booster" => "Vaksin 3 Booster",
        "Belum Vaksin" => "Belum Vaksin",
    ];
    if (isset($vaksin)) {
        return $data[$vaksin];
    } else {
        return $data;
    }
}
function roleAccess($id = null)
{
    $roleAccess = [
        "1" => "Admin",
        "2" => "SPV",
        "3" => "Kestari",
        "4" => "Acara",
        "5" => "PIT",
        "6" => "Ukm",
        "7" => "Fakultas",
        "8" => "EM",
    ];
    if (isset($id)) {
        return $roleAccess[$id];
    } else {
        return $roleAccess;
    }
}
function menuDashboardAdmin($id = null)
{
    $menu = [
        [
            "title" => "Dashboard",
            "icon" => "mdi mdi-view-dashboard",
            "link" => "dashboard",
        ],
        [
            "title" => "Penugasan",
            "icon" => "mdi mdi-clipboard",
            "link" => "penugasan",
            'role' => [1, 4]
        ],
        [
            "title" => "Mahasiswa",
            "icon" => "mdi mdi-account-network",
            "link" => "mahasiswa",
            'role' => [1, 2, 3]
        ],
        [
            "title" => "Mahasiswa Baru",
            "icon" => "mdi mdi-account-network",
            "link" => "mahasiswabaru",
            'role' => [1, 8]
        ],
        [
            "title" => "Absensi",
            "icon" => "mdi mdi-account-network",
            "link" => "attendance",
            'role' => [1, 8]
        ],
        [
            "title" => "Perizinan",
            "icon" => "mdi mdi-network-question",
            "link" => "perizinan",
            'role' => [1, 3]
        ],
        [
            "title" => "Faq",
            "icon" => "mdi  mdi-paperclip",
            "link" => "faq",
            'role' => [1, 5]
        ],
        [
            "title" => "Category Faq",
            "icon" => "mdi  mdi-paperclip",
            "link" => "faq.category",
            'role' => [1, 5]
        ],
        [
            "title" => "Berita",
            "icon" => "mdi mdi-paper-cut-vertical",
            "link" => "news",
            'role' => [1, 5]
        ],
        [
            "title" => "Gallery",
            "icon" => "mdi mdi-camera",
            "link" => "gallery",
            'role' => [1, 5]
        ],
        [
            "title" => "Vidio",
            "icon" => "mdi mdi-camera",
            "link" => "vidio",
            'role' => [1, 5]
        ],
        [
            "title" => "UKM",
            "icon" => "mdi mdi-equal-box",
            "link" => "ukm",
            'role' => [1, 6]
        ],
        [
            "title" => "Absensi UKM",
            "icon" => "mdi mdi-equal-box",
            "link" => "ukm.absent",
            'role' => [1, 6]
        ],
        [
            "title" => "Fakultas",
            "icon" => "mdi mdi-equal-box",
            "link" => "fakultas",
            'role' => [1, 5]
        ],
        [
            "title" => "User Management",
            "icon" => "mdi mdi-account-multiple-outline",
            "link" => "user",
            'role' => [1]
        ],

    ];

    if (isset($id)) {
        return $menu[$id];
    } else {
        return $menu;
    }
}

function typePenugasan($id = null)
{
    $type = [
        [
            "id" => "1",
            "name" => "Pengumpulan Link"
        ],
        [
            'id' => '2',
            'name' => 'Pilihan Ganda',
        ],
        [
            'id' => '3',
            'name' => 'Missing Lyric Darah Juang',
        ],

    ];
    if (isset($id)) {
        return $type[$id];
    } else {
        return $type;
    }
}
function cardPenugasan($id = null)
{
    $card = [
        [
            "id" => "1",
            "name" => "R",
            "card" => "/assets/card/1R.jpg",
            "cardFull" => "/assets/card/1RW.jpeg"
        ],
        [
            "id" => "2",
            "name" => "A",
            "card" => "/assets/card/2A.jpg",
            "cardFull" => "/assets/card/2AW.jpeg"
        ],
        [
            "id" => "3",
            "name" => "B",
            "card" => "/assets/card/3B.jpg",
            "cardFull" => "/assets/card/3BW.jpeg"
        ],
        [
            "id" => "4",
            "name" => "R",
            "card" => "/assets/card/4R.jpg",
            "cardFull" => "/assets/card/4RW.jpeg"

        ],
        [
            "id" => "5",
            "name" => "A",
            "card" => "/assets/card/5A.jpg",
            "cardFull" => "/assets/card/5AW.jpeg"
        ],
        [
            "id" => "6",
            "name" => "W",
            "card" => "/assets/card/6W.jpg",
            "cardFull" => "/assets/card/6WW.jpeg"
        ],
        [
            "id" => "7",
            "name" => "2",
            "card" => "/assets/card/72.jpg",
            "cardFull" => "/assets/card/72W.jpeg"
        ],
        [
            "id" => "8",
            "name" => "0",
            "card" => "/assets/card/80.jpg",
            "cardFull" => "/assets/card/80W.jpeg"
        ],
        [
            "id" => "9",
            "name" => "2",
            "card" => "/assets/card/92.jpg",
            "cardFull" => "/assets/card/92W.jpeg"

        ],
        [
            "id" => "10",
            "name" => "2",
            "card" => "/assets/card/102.jpg",
            "cardFull" => "/assets/card/102W.jpeg"
        ],
        [
            "id" => "11",
            "name" => "Logo Rabraw",
            "card" => "/assets/card/11LOGO.jpg",
            "cardFull" => "/assets/card/11LOGOW.jpeg"
        ],
        [
            "id" => "12",
            "name" => "Tidak Masuk"
        ]
    ];
    if (isset($id)) {
        return $card[$id];
    } else {
        return $card;
    }
}
function pilihanGanda($id = null)
{
    $data = [
        [
            'id' => '1',
            'name' => 'A',
            'key' => "jawaban_a"
        ],
        [
            'id' => '2',
            'name' => 'B',
            'key' => "jawaban_b"
        ],
        [
            'id' => '3',
            'name' => 'C',
            'key' => "jawaban_c"
        ],
        [
            'id' => '4',
            'name' => 'D',
            'key' => "jawaban_d"
        ],
        [
            'id' => '5',
            'name' => 'E',
            'key' => "jawaban_e"
        ],
    ];
    if (isset($id)) {
        return $data[$id];
    } else {
        return $data;
    }
}
function randomColor()
{
    // color from bootstrap
    $color = [
        'primary',
        'secondary',
        'success',
        'danger',
        'warning',
        'info',
        'light',
        'dark',
    ];
    $rand = array_rand($color);
    return $color[$rand];
}
function missingLirikDarahJuang()
{


    $data = [
        [
            'id' => '1',
            'name' => 'Disini negeri kami',
            'key' => "text"
        ],
        [
            'id' => '2',
            'key' => "input",
            'answer' => 'Tempat padi terhampar'
        ],
        [
            'id' => '3',
            'answer' => 'Samudranya',
            'last' => 'kaya raya',
            'key' => "input"
        ],
        [
            'id' => '4',
            'name' => 'Tanah kami subur tuan',
            'key' => "text"
        ],
        [
            'id' => '5',
            'name' => 'Di negeri permai ini',
            'key' => "text"
        ],
        [
            'id' => '6',
            'name' => "Berjuta rakyat ",
            'key' => "input",
            'answer' => 'besimbah luka'
        ],
        [
            'id' => '7',
            'name' => "Anak buruh tak sekolah",
            'key' => "text",
        ],
        [
            'id' => '8',
            'key' => "input",
            'answer' => "Pemuda desa tak kerja",
        ],
        [
            'id' => '9',
            'key' => "input",
            'answer' => "Mereka dirampas haknya",
        ],
        [
            'id' => '10',
            'name' => 'Tergusur dan lapar',
            'key' => "text"
        ],
        [
            'id' => '11',
            'name' => 'Bunda, relakan darah juang kami',
            'key' => "text"
        ],
        [
            'id' => '12',
            'last' => 'rakyat',
            'key' => "input",
            'answer' => "Tuk membebaskan"
        ],
        [
            'id' => '13',
            'key' => "text",
            'name' => "Mereka dirampas haknya",
        ],
        [
            'id' => '14',
            'name' => 'Tergusur dan lapar',
            'key' => "text"
        ],
        [
            'id' => '15',
            'answer' => 'Bunda, relakan darah juang kami',
            'key' => "input"
        ],
        [
            'id' => '16',
            'name' => "Padamu ",
            'answer' => 'kami',
            'last' => 'berbakti',
            'key' => "input"
        ],
        [
            'id' => '17',
            'name' => 'Disini negeri kami',
            'key' => "text"
        ],
        [
            'id' => '18',
            'answer' => 'Tempat padi terhampar',
            'key' => "input"
        ],
        [
            'id' => '19',
            'answer' => 'Samudranya',
            'last' => ' kaya raya',
            'key' => "input"
        ],
        [
            'id' => '20',
            'name' => 'Tanah kami subur tuan',
            'key' => "text"
        ],
        [
            'id' => '21',
            'name' => 'Di negeri permai ini',
            'key' => "text"
        ],
        [
            'id' => '22',
            'answer' => 'Berjuta rakyat besimbah luka',
            'key' => "input"
        ],
        [
            'id' => '23',
            'name' => 'Anak ',
            'last' => 'tak sekolah',
            'answer' => 'buruh',
            'key' => "input"
        ],
        [
            'id' => '24',
            'name' => 'Pemuda desa tak kerja',
            'key' => "text"
        ],
        [
            'id' => '25',
            'name' => 'Mereka dirampas haknya',
            'key' => "text"
        ],
        [
            'id' => '26',
            'answer' => 'Tergusur dan lapar',
            'key' => "input"
        ],
        [
            'id' => '27',
            'last' => ', relakan darah juang kami',
            'answer' => 'Bunda',
            'key' => "input"
        ],
        [
            'id' => '28',
            'name' => 'Tuk membebaskan rakyat',
            'key' => "text"
        ],
        [
            'id' => '29',
            'last' => ' dirampas haknya',
            'answer' => 'Mereka',
            'key' => "input"
        ],
        [
            'id' => '30',
            'name' => 'Tergusur dan lapar',
            'key' => "text"
        ],
        [
            'id' => '31',
            'name' => 'Bunda, relakan darah juang kami',
            'key' => "text"
        ],
        [
            'id' => '32',
            'answer' => 'Padamu kami berbakti',
            'key' => "input"
        ],
        [
            'id' => '33',
            'name' => 'Mereka dirampas haknya',
            'key' => "text"
        ],
        [
            'id' => '34',
            'name' => 'Tergusur',
            'answer' => 'dan lapar',
            'key' => "input"
        ],
        [
            'id' => '35',
            'answer' => 'Bunda, relakan darah juang kami',
            'key' => "input"
        ],
        [
            'id' => '36',
            'name' => 'Tuk membebaskan rakyat',
            'key' => "text"
        ],
        [
            'id' => '37',
            'name' => 'Mereka ',
            'answer' => 'dirampas haknya',
            'key' => "input"
        ],
        [
            'id' => '38',
            'name' => 'Tergusur dan lapar',
            'key' => "text"
        ],
        [
            'id' => '39',
            'name' => 'Bunda, relakan darah juang kami',
            'key' => "text"
        ],
        [
            'id' => '40',
            'answer' => 'Padamu kami berbakti',
            'key' => "input"
        ],
    ];
    return $data;
}
