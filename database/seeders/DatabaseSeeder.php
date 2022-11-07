<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Budi',
            'email' => 'budi@email.com',
            'password' => bcrypt('12345678')
        ]);

        User::create([
            'name' => 'Sodik',
            'email' => 'sodik@email.com',
            'password' => bcrypt('12345678')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni accusantium velit soluta, sit deserunt, sint impedit hic saepe in eum, veniam amet id repudiandae beatae unde. Eum error ipsa corrupti repellendus dolorem exercitationem, totam aperiam laborum debitis tenetur distinctio at voluptatum tempora consectetur fugiat excepturi aut cum nesciunt itaque. Consequuntur eaque excepturi aspernatur nihil illo, aut rerum eius dicta rem atque. Modi voluptates, aperiam nam odio autem odit non exercitationem repellat totam ipsa deserunt blanditiis delectus nihil placeat. Soluta, velit voluptatum beatae natus molestias unde magni maiores ullam sed blanditiis nostrum alias quas, perspiciatis ratione ea dicta nihil repellat cumque?',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni accusantium velit soluta, sit deserunt, sint impedit hic saepe in eum, veniam amet id repudiandae beatae unde. Eum error ipsa corrupti repellendus dolorem exercitationem, totam aperiam laborum debitis tenetur distinctio at voluptatum tempora consectetur fugiat excepturi aut cum nesciunt itaque. Consequuntur eaque excepturi aspernatur nihil illo, aut rerum eius dicta rem atque. Modi voluptates, aperiam nam odio autem odit non exercitationem repellat totam ipsa deserunt blanditiis delectus nihil placeat. Soluta, velit voluptatum beatae natus molestias unde magni maiores ullam sed blanditiis nostrum alias quas, perspiciatis ratione ea dicta nihil repellat cumque?',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni accusantium velit soluta, sit deserunt, sint impedit hic saepe in eum, veniam amet id repudiandae beatae unde. Eum error ipsa corrupti repellendus dolorem exercitationem, totam aperiam laborum debitis tenetur distinctio at voluptatum tempora consectetur fugiat excepturi aut cum nesciunt itaque. Consequuntur eaque excepturi aspernatur nihil illo, aut rerum eius dicta rem atque. Modi voluptates, aperiam nam odio autem odit non exercitationem repellat totam ipsa deserunt blanditiis delectus nihil placeat. Soluta, velit voluptatum beatae natus molestias unde magni maiores ullam sed blanditiis nostrum alias quas, perspiciatis ratione ea dicta nihil repellat cumque?',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni accusantium velit soluta, sit deserunt, sint impedit hic saepe in eum, veniam amet id repudiandae beatae unde. Eum error ipsa corrupti repellendus dolorem exercitationem, totam aperiam laborum debitis tenetur distinctio at voluptatum tempora consectetur fugiat excepturi aut cum nesciunt itaque. Consequuntur eaque excepturi aspernatur nihil illo, aut rerum eius dicta rem atque. Modi voluptates, aperiam nam odio autem odit non exercitationem repellat totam ipsa deserunt blanditiis delectus nihil placeat. Soluta, velit voluptatum beatae natus molestias unde magni maiores ullam sed blanditiis nostrum alias quas, perspiciatis ratione ea dicta nihil repellat cumque?',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
