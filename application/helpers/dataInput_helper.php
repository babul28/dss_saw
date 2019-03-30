<?php
defined('BASEPATH') or exit('No direct script access allowed');

function dataToFuzzy($data)
{
    $harga_tanah = function ($data) {

        if ($data >= 5000000) {
            return 1;
        } else if ($data >= 4000000) {
            return 0.8;
        } else if ($data >= 3000000) {
            return 0.6;
        } else if ($data >= 2000000) {
            return 0.4;
        } else {
            return 0.2;
        }
    };

    $jarak_gudang = function ($data) {

        if ($data > 5000) {
            return 1;
        } else if ($data > 1000) {
            return 0.8;
        } else if ($data > 500) {
            return 0.6;
        } else if ($data > 100) {
            return 0.4;
        } else {
            return 0.2;
        }
    };

    $investasi = function ($data) {
        if ($data > 75) {
            return 1;
        } else if ($data > 50) {
            return 0.75;
        } else if ($data > 25) {
            return 0.5;
        } else {
            return 0.25;
        }
    };

    $peternak = function ($data) {
        if ($data > 40) {
            return 1;
        } else if ($data > 30) {
            return 0.8;
        } else if ($data > 20) {
            return 0.6;
        } else if ($data > 10) {
            return 0.4;
        } else {
            return 0.2;
        }
    };

    return [
        'lokasi' => $data['lokasi'],
        'harga_tanah' => $harga_tanah($data['Htanah']),
        'jarak_gudang' => $jarak_gudang($data['Jgudang']),
        'persaingan' => $data['Tpersaingan'],
        'investasi' => $investasi($data['investasi']),
        'jumlah_peternak' => $peternak($data['Jpeternak'])
    ];
}

function dataInput($data)
{
    return [
        'lokasi' => $data['lokasi'],
        'harga_tanah' => $data['Htanah'],
        'jarak_gudang' => $data['Jgudang'],
        'persaingan' => $data['Tpersaingan'],
        'investasi' => $data['investasi'],
        'jumlah_peternak' => $data['Jpeternak']
    ];
}

function getDataInput($data)
{
    $persaingan = function ($d) {
        if ($d == 0.2)
            return 'Sangat rendah';
        else if ($d == 0.4)
            return 'Rendah';
        else if ($d == 0.6)
            return 'Sedang';
        else if ($d == 0.8)
            return 'Tinggi';
        else if ($d == 1)
            return 'Sangat Tinggi';
    };

    $index = 0;
    foreach ($data as $key) {
        $data[$index++]->persaingan = $persaingan($key->persaingan);
    }

    return $data;
}
