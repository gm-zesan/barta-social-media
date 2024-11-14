<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Post::truncate();
        // Post::factory()->count(10)->create();
        $posts = array(
            array('id' => '1','user_id' => '1','content' => 'Maxime animi aut rerum. Nisi labore dolor soluta ut tenetur rerum.
          
          Et voluptatem doloribus et dolorem. Voluptas labore consequatur non nihil eveniet id recusandae neque. Ratione debitis eos libero dolor deserunt consequatur.
          
          Adipisci consectetur sed accusamus quos eos. Molestiae eligendi atque rerum. Id accusamus ipsam sit. Itaque ratione et nulla omnis tenetur iure. Culpa facere ut ut.','picture' => 'posts/u0kNwZcEBfckrGtoO9f92yj9tMm7sGaobwKop1it.jpg','deleted_at' => NULL,'created_at' => '2024-10-10 10:19:57','updated_at' => '2024-10-10 12:30:18'),
            array('id' => '2','user_id' => '1','content' => 'Dolores ipsa aperiam nemo voluptatem aut est eum. Fugiat dolor optio odit sint quo. Reiciendis porro et omnis perspiciatis est est molestias ut. Suscipit corrupti quia labore nam culpa.
          
          Qui eos quia ea pariatur sequi amet. Sit doloremque illo quia at inventore. Est est impedit debitis qui non.
          
          Harum soluta deleniti deleniti est dolor. Qui sit id ad eius ut. Quia et qui autem autem earum labore labore.','picture' => NULL,'deleted_at' => NULL,'created_at' => '2024-10-10 10:19:57','updated_at' => '2024-10-10 10:19:57'),
            array('id' => '3','user_id' => '1','content' => 'Officia illo culpa magnam expedita voluptate rem. Et et non ducimus provident ducimus. Facere eos exercitationem vel repellat quidem quasi dolores iure. Voluptatum cumque a voluptas inventore.
          
          Odit et et fugiat quo accusantium commodi. Vel tempore deserunt in non et hic aut. Laudantium molestiae molestias fuga voluptas quis. Aut consectetur odit natus.
          
          Facere nihil eos quia eos culpa impedit animi. Beatae expedita dolor ducimus inventore. Aut vel eos in officia qui.','picture' => NULL,'deleted_at' => NULL,'created_at' => '2024-10-10 10:19:57','updated_at' => '2024-10-10 10:19:57'),
            array('id' => '4','user_id' => '1','content' => 'Praesentium ut quo eveniet velit dolor inventore ea voluptate. Iste a autem facilis et nulla dolorem. Doloribus voluptatem facilis ex facilis ipsa a dolore.
          
          Eos voluptate aut voluptate exercitationem sit aut qui. Dicta nisi nisi ad occaecati aut. Laudantium earum nihil vitae molestiae. Vel odio ratione commodi sint doloremque sed iure.
          
          Praesentium neque est asperiores earum autem. Reiciendis ea est explicabo explicabo eos non et. Consequatur enim sed non possimus accusantium.','picture' => NULL,'deleted_at' => NULL,'created_at' => '2024-10-10 10:19:57','updated_at' => '2024-10-10 10:19:57'),
            array('id' => '5','user_id' => '1','content' => 'Nobis et eum cum nihil. Fugit numquam saepe nisi rerum nam consequatur. Dolor ipsum reiciendis quidem similique et rem. Commodi deserunt est quo ducimus nemo et.
          
          Et impedit et assumenda autem. Enim et eveniet et consequuntur. Saepe et nam modi quos doloribus vitae.
          
          Laboriosam pariatur itaque molestiae sint. Quia optio est beatae ab sint voluptatem dolores. Eum assumenda ab tempora.','picture' => NULL,'deleted_at' => NULL,'created_at' => '2024-10-10 10:19:57','updated_at' => '2024-10-10 10:19:57'),
            array('id' => '6','user_id' => '1','content' => 'Est voluptatem deserunt omnis ad voluptate ipsa. A nostrum molestias a voluptates. Voluptatem odio illum consequatur voluptatem qui quia et.
          
          Architecto eos nostrum reiciendis earum eum. Quo minus soluta dolore alias blanditiis magnam. Aut aperiam qui ut et illum nihil accusamus.
          
          Saepe culpa fuga excepturi reiciendis mollitia iusto voluptate. A aliquam qui autem voluptatem minima. Nemo voluptatem est aut quasi. Et dolorum repellat nesciunt sint voluptas excepturi omnis.','picture' => NULL,'deleted_at' => NULL,'created_at' => '2024-10-10 10:19:57','updated_at' => '2024-10-10 10:19:57'),
            array('id' => '7','user_id' => '1','content' => 'Aperiam omnis consequatur officiis repudiandae quo est. Praesentium animi non esse nulla placeat sunt commodi. Quia ratione aliquam similique et.
          
          Architecto velit hic ipsum perspiciatis. Doloremque voluptatibus eveniet adipisci enim vel laboriosam maxime. Quo harum qui ut. Sed ea et delectus laboriosam. Quis placeat aut nesciunt praesentium aperiam.
          
          Totam enim repellat quod voluptates. Aliquam natus veritatis inventore eum vitae non. Dolorum fuga cum nostrum aut voluptas explicabo cum.','picture' => NULL,'deleted_at' => NULL,'created_at' => '2024-10-10 10:19:57','updated_at' => '2024-10-10 10:19:57'),
            array('id' => '8','user_id' => '1','content' => 'Ut ea et porro consequatur labore autem exercitationem veniam. Fugit provident itaque et nemo quaerat asperiores repudiandae. Numquam occaecati saepe deleniti est officiis. Beatae exercitationem doloremque iure perferendis provident dolorem.
          
          Harum deleniti aut omnis inventore. Officiis aperiam nobis rerum aut. Reiciendis quia fugit culpa enim eveniet quam cum.
          
          Ducimus soluta quos fugiat molestiae. Ducimus quibusdam velit consectetur vel impedit beatae. Non est qui laudantium eaque. Eaque ut ipsa odio velit explicabo voluptatum maxime.','picture' => NULL,'deleted_at' => NULL,'created_at' => '2024-10-10 10:19:57','updated_at' => '2024-10-10 10:19:57'),
            array('id' => '9','user_id' => '1','content' => 'Aut exercitationem eum iure. Esse tempore nam ut sint.
          
          Fugiat quam molestiae repellendus exercitationem architecto quis. Facere optio minus sunt iusto dignissimos suscipit.
          
          Deleniti occaecati impedit voluptatibus suscipit. Et animi tempora et aut labore. Molestiae possimus eius velit reprehenderit nemo. Esse culpa id voluptas omnis.','picture' => NULL,'deleted_at' => NULL,'created_at' => '2024-10-10 10:19:57','updated_at' => '2024-10-10 10:19:57'),
            array('id' => '10','user_id' => '1','content' => 'Vero hic provident tempore qui corporis. Dolores quos saepe a assumenda.
          
          Eos qui unde deserunt. Esse vel eum natus velit aut a.
          
          Et et est fugit blanditiis voluptates. Ipsum facilis quo aut. Nihil ea occaecati optio quaerat sint omnis.','picture' => NULL,'deleted_at' => NULL,'created_at' => '2024-10-10 10:19:57','updated_at' => '2024-10-10 10:19:57'),
            array('id' => '11','user_id' => '1','content' => 'Hay I am here.','picture' => 'posts/iCV6fXJHygZqYzlNgI88jKV6w9Sm1R3sPgJ4mM5q.jpg','deleted_at' => '2024-10-10 10:55:34','created_at' => '2024-10-10 10:25:48','updated_at' => '2024-10-10 10:55:34'),
            array('id' => '12','user_id' => '1','content' => 'hay wpp!! I am here','picture' => 'posts/d9qvl9aBF6khquIZ6FzwgL3FgUKRWbXbXwgeuhOX.jpg','deleted_at' => NULL,'created_at' => '2024-10-10 11:40:39','updated_at' => '2024-10-10 11:40:39')
        );

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
    
}
