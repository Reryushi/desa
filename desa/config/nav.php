<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course
    | the usual Laravel view path has already been registered for you.
    |
    */

    'admin' => [

       
        'booking' => [
            'name' =>  'Umum',
            'actions' => [
                'peraturandesa' => 'admin/peraturandesa',
                'keputusankadesa' =>  'admin/keputusankadesa',
                'inventariskekayaan' =>  'admin/inventariskekayaan',
                'aparatdesa' => 'admin/aparatdesa',
                'tanahkasdesa' =>  'admin/tanahkasdesa',
                'tanahdesa' =>  'admin/tanahdesa',
                'agenda' => 'admin/agenda',
                'ekspedisi' =>  'admin/ekspedisi',
                'lembarberita' =>  'admin/lembarberita'
            ],
            'icon' => 'ti-control-forward'
        ],
        'penduduk' => [
            'name' =>  'Penduduk',
            'actions' => [
                'buku_induk' => 'admin/buku_induk',
                'buku_mutasi' =>  'admin/buku_mutasi',
                'buku_rekapitulasi' =>  'admin/buku_rekapitulasi',
                'buku_sementara' => 'admin/buku_sementara',
                'buku_ktp' =>  'admin/buku_ktp'
               
            ],
            'icon' => 'ti-control-forward'
        ],
        'keuangan' => [
            'name' =>  'Keuangan',
            'actions' => [
                'buku_apbd' => 'admin/buku_apbd',
                'buku_rencanaA' =>  'admin/buku_rencanaA',
                'buku_kasP' =>  'admin/buku_kasP',
                'buku_kas_umum' => 'admin/buku_kas_umum',
                'buku_kas_prpl' =>  'admin/buku_kas_prpl',
                'buku_bank' =>  'admin/buku_bank'
               
            ],
            'icon' => 'ti-control-forward'
        ],
        'pembangunan' => [
            'name' =>  'Pembangunan',
            'actions' => [
                'rencanakerja' => 'admin/rencanakerja',
                'kegiatanpembangunan' =>  'admin/kegiatanpembangunan',
                'inventarishasil' =>  'admin/inventarishasil',
                'kaderpemberdayaan' => 'admin/kaderpemberdayaan'
               
            ],
            'icon' => 'ti-control-forward'
        ],

        'layanan' => [
            'name' =>  'Layanan',
            'actions' => [
                'surat_ket_catatan_kepolisian' => 'admin/surat_ket_catatan_kepolisian',
                'surat_ket_penduduk' =>  'admin/surat_ket_penduduk',
                'surat_ket_pengantar' =>  'admin/surat_ket_pengantar'
                
               
            ],
            'icon' => 'ti-control-forward'
        ],

        // 'system_calendar' => [
        //     'name' => 'Kalender',
        //     'actions' => [
        //         'view' => 'admin/system-calendar',
        //     ],
        //     'icon' => 'ti-notepad'
        // ],
        // 'search_room' => [
        //     'name' => 'Cari Kamar',
        //     'actions' => [
        //         'view' => 'admin/search-room',
        //     ],
        //     'icon' => 'ti-search'
        // ],
        
        
        'tes' => [
            'name' => '',
            'actions' => [
                'view' => '#',
            ],
            'icon' => '#'
        ],

        'user' => [
            'name' => 'Penduduk',
            'actions' => [
                'view' => 'admin/user',
            ],
            'icon' => 'ti-user'
        ],
        // 'Review' => [
        //     'name' => 'Review',
        //     'actions' => [
        //         'view' => 'admin/review',
        //     ],
        //     'icon' => 'ti-star'
        // ],
        'room_type' => [
            'name' => 'Kegiatan',
            'actions' => [
                'view' => 'admin/room_type',
            ],
            'icon' => 'ti-home'
        ],
        'slider' => [
            'name' => 'Slider',
            'actions' => [
                'view' => 'admin/slider',
            ],
            'icon' => 'ti-layout-grid2'
        ],  
        'Event' => [
            'name' => 'Berita',
            'actions' => [
                'view' => 'admin/event',
            ],
            'icon' => 'ti-ticket'
        ],
        'food' => [
            'name' => 'Hasil UMKM',
            'actions' => [
                'view' => 'admin/food',
            ],
            'icon' => 'ti-pencil-alt'
        ],
        // 'facility' => [
        //     'name' => 'Fasilitas',
        //     'actions' => [
        //         'view' => 'admin/facility',
        //     ],
        //     'icon' => 'ti-crown'
        // ],
       
        // 'Page' => [
        //     'name' => 'Page',
        //     'actions' => [
        //         'view' => 'admin/page',
        //     ],
        //     'icon' => 'ti-star'
        // ],
    ],

];
