<?php

use Illuminate\Database\Seeder;
use App\Page;

class PageTableSeeder extends Seeder {
    public function run()
    {
        DB::table('pages')->delete();

        Page::create([
            'name' => 'homepage',
            'title' => 'Главная',
            'keywords' => 'Автомобили, машины, каталог, ауди, бмв, порш, хонда, auto, cars, audi, bmw, porsche',
            'description' => 'Автомобильный каталог. Все автомобили в одном месте. Смотреть автомобили. Просмтр машин.',
            'h1' => 'Главная',
            'body' => '<p>Donec rutrum congue leo eget malesuada. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.</p>
                       <p>Nulla quis lorem ut libero malesuada feugiat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Sed porttitor lectus nibh.</p>
                       <p>Sed porttitor lectus nibh. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Donec rutrum congue leo eget malesuada. Nulla quis lorem ut libero malesuada feugiat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada.</p>
                       <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur aliquet quam id dui posuere blandit.</p>
                       <p>Nulla quis lorem ut libero malesuada feugiat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Proin eget tortor risus. Nulla porttitor accumsan tincidunt. Proin eget tortor risus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                       <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Pellentesque in ipsum id orci porta dapibus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Sed porttitor lectus nibh. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Donec rutrum congue leo eget malesuada. Nulla quis lorem ut libero malesuada feugiat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada.</p>',
        ]);

        Page::create([
            'name' => 'catalog',
            'title' => 'Каталог',
            'keywords' => 'Автомобили, машины, каталог, ауди, бмв, порш, хонда, auto, cars, audi, bmw, porsche',
            'description' => 'Автомобильный каталог. Все автомобили в одном месте. Смотреть автомобили. Просмтр машин.',
            'h1' => 'Каталог',
            'body' => '',
        ]);

        Page::create([
            'name' => 'about',
            'title' => 'О Нас',
            'keywords' => 'Автомобили, машины, каталог, ауди, бмв, порш, хонда, auto, cars, audi, bmw, porsche',
            'description' => 'Автомобильный каталог. Все автомобили в одном месте. Смотреть автомобили. Просмтр машин.',
            'h1' => 'О нас',
            'body' => '<p>Lorem ipsum. Sed porttitor lectus nibh. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Donec rutrum congue leo eget malesuada. Nulla quis lorem ut libero malesuada feugiat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada.</p>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet distinctio doloremque explicabo incidunt laudantium magnam minima, natus, pariatur possimus quo ratione sapiente sit tenetur veniam vero voluptate. Nobis, sapiente?</p>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, quia.</p>',
        ]);

    }
}