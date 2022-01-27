<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::select(\DB::raw('
            INSERT INTO `blogs` (`id`, `title`, `img`, `html`, `created_at`, `updated_at`) VALUES
            (1, "SINGLE BLOG POST 1", "/images/blogpost1.jpg", "<div>\r\n<div class=\\"image\\">\r\n                                        <div class=\\"image - post\\">\r\n                                            <img src=\\" / images / single - post . jpg\\" alt=\\"\\">\r\n                                        </div>\r\n                                    </div>\r\n                                    <div class=\\"product - content\\">\r\n                                        <div class=\\"product - title\\">\r\n                                            <h3>ANOTHER MORNING BREAKFAST</h3>\r\n                                        </div>\r\n                                        <p>Single blog post page is here for you. You can use this grill <a href=\\"#\\">template</a> for any purpose. You do not need to give a credit to templatemo website for any reason. Praesent nec euismod ipsum, eget sodales enim. Duis in rhoncus lorem. Duis fermentum sem et libero viverra, in cursus velit dapibus. Donec dui ante, dapibus ut odio eget, vulputate blandit ante. Integer ullamcorper, augue id malesuada convallis, mauris risus cursus elit, eget scelerisque ipsum massa ac nisi. Donec venenatis vel arcu at pharetra. <a href=\\"#\\">Aenean</a> a mauris augue. In egestas nisi turpis, et venenatis sapien ultrices eget. Nunc mattis nunc quis erat pretium tristique.<br><br>\r\n                                            Mauris suscipit metus ullamcorper enim fringilla sagittis. Duis dui leo, mattis ac rhoncus eget, interdum a ipsum. Duis rutrum, justo et egestas feugiat, dui velit egestas velit, feugiat efficitur ante mauris eu ipsum. Aliquam quis sem vitae mi fringilla ornare eu quis orci. Fusce tellus sem, gravida a nunc eget, vehicula <a href=\\"#\\">commodo</a> sapien.</p>\r\n                                    </div>\r\n                                    \r\n                                    \r\n\r\n                                </div>", NULL, NULL),
            (2, "SINGLE BLOG POST 2", "/images/blogpost2.jpg", "<div>\r\n<div class=\\"image\\">\r\n                                        <div class=\\"image-post\\">\r\n                                            <img src=\\"/images/single-post.jpg\\" alt=\\"\\">\r\n                                        </div>\r\n                                    </div>\r\n                                    <div class=\\"product-content\\">\r\n                                        <div class=\\"product-title\\">\r\n                                            <h3>ANOTHER MORNING BREAKFAST</h3>\r\n                                        </div>\r\n                                        <p>Single blog post page is here for you. You can use this grill <a href=\\"#\\">template</a> for any purpose. You do not need to give a credit to templatemo website for any reason. Praesent nec euismod ipsum, eget sodales enim. Duis in rhoncus lorem. Duis fermentum sem et libero viverra, in cursus velit dapibus. Donec dui ante, dapibus ut odio eget, vulputate blandit ante. Integer ullamcorper, augue id malesuada convallis, mauris risus cursus elit, eget scelerisque ipsum massa ac nisi. Donec venenatis vel arcu at pharetra. <a href=\\"#\\">Aenean</a> a mauris augue. In egestas nisi turpis, et venenatis sapien ultrices eget. Nunc mattis nunc quis erat pretium tristique.<br><br>\r\n                                            Mauris suscipit metus ullamcorper enim fringilla sagittis. Duis dui leo, mattis ac rhoncus eget, interdum a ipsum. Duis rutrum, justo et egestas feugiat, dui velit egestas velit, feugiat efficitur ante mauris eu ipsum. Aliquam quis sem vitae mi fringilla ornare eu quis orci. Fusce tellus sem, gravida a nunc eget, vehicula <a href=\\"#\\">commodo</a> sapien.</p>\r\n                                    </div>\r\n                                    \r\n                                    \r\n\r\n                                </div>", NULL, NULL),
            (3, "SINGLE BLOG POST 3", "/images/blogpost3.jpg", "<div>\r\n<div class=\\"image\\">\r\n                                        <div class=\\"image-post\\">\r\n                                            <img src=\\"/images/single-post.jpg\\" alt=\\"\\">\r\n                                        </div>\r\n                                    </div>\r\n                                    <div class=\\"product-content\\">\r\n                                        <div class=\\"product-title\\">\r\n                                            <h3>ANOTHER MORNING BREAKFAST</h3>\r\n                                        </div>\r\n                                        <p>Single blog post page is here for you. You can use this grill <a href=\\"#\\">template</a> for any purpose. You do not need to give a credit to templatemo website for any reason. Praesent nec euismod ipsum, eget sodales enim. Duis in rhoncus lorem. Duis fermentum sem et libero viverra, in cursus velit dapibus. Donec dui ante, dapibus ut odio eget, vulputate blandit ante. Integer ullamcorper, augue id malesuada convallis, mauris risus cursus elit, eget scelerisque ipsum massa ac nisi. Donec venenatis vel arcu at pharetra. <a href=\\"#\\">Aenean</a> a mauris augue. In egestas nisi turpis, et venenatis sapien ultrices eget. Nunc mattis nunc quis erat pretium tristique.<br><br>\r\n                                            Mauris suscipit metus ullamcorper enim fringilla sagittis. Duis dui leo, mattis ac rhoncus eget, interdum a ipsum. Duis rutrum, justo et egestas feugiat, dui velit egestas velit, feugiat efficitur ante mauris eu ipsum. Aliquam quis sem vitae mi fringilla ornare eu quis orci. Fusce tellus sem, gravida a nunc eget, vehicula <a href=\\"#\\">commodo</a> sapien.</p>\r\n                                    </div>\r\n                                    \r\n                                    \r\n\r\n                                </div>", NULL, NULL),
            (4, "SINGLE BLOG POST 4", "/images/blogpost4.jpg", "<div>\r\n<div class=\\"image\\">\r\n                                        <div class=\\"image-post\\">\r\n                                            <img src=\\"/images/single-post.jpg\\" alt=\\"\\">\r\n                                        </div>\r\n                                    </div>\r\n                                    <div class=\\"product-content\\">\r\n                                        <div class=\\"product-title\\">\r\n                                            <h3>ANOTHER MORNING BREAKFAST</h3>\r\n                                        </div>\r\n                                        <p>Single blog post page is here for you. You can use this grill <a href=\\"#\\">template</a> for any purpose. You do not need to give a credit to templatemo website for any reason. Praesent nec euismod ipsum, eget sodales enim. Duis in rhoncus lorem. Duis fermentum sem et libero viverra, in cursus velit dapibus. Donec dui ante, dapibus ut odio eget, vulputate blandit ante. Integer ullamcorper, augue id malesuada convallis, mauris risus cursus elit, eget scelerisque ipsum massa ac nisi. Donec venenatis vel arcu at pharetra. <a href=\\"#\\">Aenean</a> a mauris augue. In egestas nisi turpis, et venenatis sapien ultrices eget. Nunc mattis nunc quis erat pretium tristique.<br><br>\r\n                                            Mauris suscipit metus ullamcorper enim fringilla sagittis. Duis dui leo, mattis ac rhoncus eget, interdum a ipsum. Duis rutrum, justo et egestas feugiat, dui velit egestas velit, feugiat efficitur ante mauris eu ipsum. Aliquam quis sem vitae mi fringilla ornare eu quis orci. Fusce tellus sem, gravida a nunc eget, vehicula <a href=\\"#\\">commodo</a> sapien.</p>\r\n                                    </div>\r\n                                    \r\n                                    \r\n\r\n                                </div>", NULL, NULL),
            (5, "SINGLE BLOG POST 5", "/images/blogpost5.jpg", "<div>\r\n<div class=\\"image\\">\r\n                                        <div class=\\"image-post\\">\r\n                                            <img src=\\"/images/single-post.jpg\\" alt=\\"\\">\r\n                                        </div>\r\n                                    </div>\r\n                                    <div class=\\"product-content\\">\r\n                                        <div class=\\"product-title\\">\r\n                                            <h3>ANOTHER MORNING BREAKFAST</h3>\r\n                                        </div>\r\n                                        <p>Single blog post page is here for you. You can use this grill <a href=\\"#\\">template</a> for any purpose. You do not need to give a credit to templatemo website for any reason. Praesent nec euismod ipsum, eget sodales enim. Duis in rhoncus lorem. Duis fermentum sem et libero viverra, in cursus velit dapibus. Donec dui ante, dapibus ut odio eget, vulputate blandit ante. Integer ullamcorper, augue id malesuada convallis, mauris risus cursus elit, eget scelerisque ipsum massa ac nisi. Donec venenatis vel arcu at pharetra. <a href=\\"#\\">Aenean</a> a mauris augue. In egestas nisi turpis, et venenatis sapien ultrices eget. Nunc mattis nunc quis erat pretium tristique.<br><br>\r\n                                            Mauris suscipit metus ullamcorper enim fringilla sagittis. Duis dui leo, mattis ac rhoncus eget, interdum a ipsum. Duis rutrum, justo et egestas feugiat, dui velit egestas velit, feugiat efficitur ante mauris eu ipsum. Aliquam quis sem vitae mi fringilla ornare eu quis orci. Fusce tellus sem, gravida a nunc eget, vehicula <a href=\\"#\\">commodo</a> sapien.</p>\r\n                                    </div>\r\n                                    \r\n                                    \r\n\r\n                                </div>", NULL, NULL),
            (6, "SINGLE BLOG POST 6", "/images/blogpost6.jpg", "<div>\r\n<div class=\\"image\\">\r\n                                        <div class=\\"image-post\\">\r\n                                            <img src=\\"/images/single-post.jpg\\" alt=\\"\\">\r\n                                        </div>\r\n                                    </div>\r\n                                    <div class=\\"product-content\\">\r\n                                        <div class=\\"product-title\\">\r\n                                            <h3>ANOTHER MORNING BREAKFAST</h3>\r\n                                        </div>\r\n                                        <p>Single blog post page is here for you. You can use this grill <a href=\\"#\\">template</a> for any purpose. You do not need to give a credit to templatemo website for any reason. Praesent nec euismod ipsum, eget sodales enim. Duis in rhoncus lorem. Duis fermentum sem et libero viverra, in cursus velit dapibus. Donec dui ante, dapibus ut odio eget, vulputate blandit ante. Integer ullamcorper, augue id malesuada convallis, mauris risus cursus elit, eget scelerisque ipsum massa ac nisi. Donec venenatis vel arcu at pharetra. <a href=\\"#\\">Aenean</a> a mauris augue. In egestas nisi turpis, et venenatis sapien ultrices eget. Nunc mattis nunc quis erat pretium tristique.<br><br>\r\n                                            Mauris suscipit metus ullamcorper enim fringilla sagittis. Duis dui leo, mattis ac rhoncus eget, interdum a ipsum. Duis rutrum, justo et egestas feugiat, dui velit egestas velit, feugiat efficitur ante mauris eu ipsum. Aliquam quis sem vitae mi fringilla ornare eu quis orci. Fusce tellus sem, gravida a nunc eget, vehicula <a href=\\"#\\">commodo</a> sapien.</p>\r\n                                    </div>\r\n                                    \r\n                                    \r\n\r\n                                </div>", NULL, NULL);
        '));
    }
}