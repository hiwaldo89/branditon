<div class="instagram-feed py-12">
    <div class="container mx-auto text-center">
        <h2 class="text-xl tracking-widest">INSTAGRAM</h2>
        <a href="" class="text-xl tracking-widest">@brand.it.on</a>
    </div>
    <div class="instagram-feed__slider">
        <?php 
            $user_id = 17841419233438259; 
            $access_token = "IGQVJVQmtiaHBKU0piaWlLcGJBalY2Q0FEcTdPTF9hM09qLUdhcEV3bmVqZAWZAlOS0wMmVHNFJXRGVFM1BpZAU9iWHMyR2x3bUNoS3dLVW80MDYwWnRYU0x2OXQzM3dJTTVONXUzRTdlaFlDWGh3WkdWeEpCUXlWeXY3cVBj";

            $curl_connection = curl_init();
            curl_setopt($curl_connection, CURLOPT_URL, 'https://graph.instagram.com/' . $user_id . '/media?fields=media_url,permalink,username&access_token=' . $access_token);
            curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($curl_connection);
            curl_close($curl_connection);
            $instagramFeed = json_decode($result);
        ?>
        <?php foreach($instagramFeed as $image) : ?>
            <div class="instagram-feed__slide">
                <a href="<?php echo $image['permalink']; ?>" target="_blank">
                    <img src="<?php echo $image['media_url']; ?>" alt="<?php echo $image->username; ?>">
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>