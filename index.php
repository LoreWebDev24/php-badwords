<?php
// $text = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero quis est explicabo minima itaque? Doloremque reprehenderit dolores officia reiciendis rem mollitia adipisci, eum hic nulla harum quas quis libero distinctio molestias esse dolorum perferendis, atque consequatur optio sint aliquid voluptatum incidunt illum pariatur. Quasi labore optio maxime. Iste, quo dolore. Harum ratione qui, dolorem asperiores, reprehenderit doloremque autem voluptas, libero provident optio iure repellendus deserunt dicta ea omnis nobis adipisci quam. Architecto harum ad deleniti eum accusantium! Eius doloremque saepe accusantium recusandae sapiente necessitatibus possimus facilis molestias explicabo deserunt repudiandae mollitia doloribus minima delectus tenetur, fugiat soluta est aut. Voluptates magnam omnis praesentium totam, voluptatem repellendus optio molestiae libero? Quas voluptatum, nihil voluptas iste consectetur aliquid amet ex eligendi ullam.'
// ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Php</title>
</head>

<body>

<style>
    form {
        display: flex;
        gap:10px;
    }
</style>

  <form action="form.php" method="POST">
    <textarea placeholder="Insert the Text you want to Censor"name="user-text" id="" cols="200" rows="1"></textarea>
    <input type="text" name="bad-word" placeholder="Word to Censor">
    <input type="submit" value="Submit">
  </form>
    <!-- <h2>TEXT UNCENSORED:</h2>
    <p class="text-uncensored"> caratteri</h4> -->
</body>

</html>