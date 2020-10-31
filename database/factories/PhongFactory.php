<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Phong;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;


$factory->define(Phong::class, function (Faker $faker) {
	$a=array('BT','GV','Q1','Q2','TB');
	$random_keys=array_rand($a,2);
    return [
        'ID_LoaiPhong' => rand(2,5),
        'ID_KHuVuc' => $a[$random_keys[0]],
        'SucChua' => rand(1,12),
        'SoLuongNguoiO' => 0,
        'Gia' => Arr::random([700000,500000,1200000,3500000,750000,800000,900000,1000000,1250000,2000000,2100000]),
        'ThoiHan' => 30,
        'MoTaNgan' => $faker->text(100),
        'MoTaDai' => $faker->paragraph,
        'HinhAnh'=>'https://placeimg.com/350/350/any?' . rand(1, 1000),
        'WC'=>rand(1,3),
        'AnNinh'=>$faker->text(30),
        'TienNghi'=>$faker->text(30),
        'GhiChu'=>$faker->paragraph,
    ];
});
