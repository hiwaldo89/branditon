<div class="instagram-feed py-12">
    <div class="container mx-auto text-center mb-12" data-aos="fade-up">
        <h2 class="text-xl tracking-widest">INSTAGRAM</h2>
        <a href="" class="text-xl tracking-widest">@brand.it.on</a>
    </div>
    <div class="instagram-feed__slider mb-12" data-aos="fade-up">
        <?php 
            $user_id = 17841419233438259; 
            $access_token = "IGQVJWWTBHU0hnRzVkVHZAzaEFOS2VnT2hsaDlaczJnN3ZAad1RZAbVprdWZAidU1SU3VhVzJxZAlE4VkJVRktmc2FNZAy1iejBxUFMyV1ZArWU9YV2NMV2IyM0JVeEhJYmFRRU9BTmthQnFlVWZAKVEVHVVVDYwZDZD";

            $curl_connection = curl_init();
            curl_setopt($curl_connection, CURLOPT_URL, 'https://graph.instagram.com/' . $user_id . '/media?fields=media_url,permalink,username&access_token=' . $access_token);
            curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($curl_connection);
            curl_close($curl_connection);
            $instagramFeed = json_decode($result);
        ?>
        <?php foreach($instagramFeed->data as $image) : ?>
            <div class="instagram-feed__slide">
                <a href="<?php echo $image->permalink; ?>" target="_blank">
                    <img data-src="<?php echo $image->media_url; ?>" alt="<?php echo $image->username; ?>" class="lazy">
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>