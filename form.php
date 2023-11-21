<?php
$badWord = $_POST['bad-word'];
$text = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero quis est explicabo minima itaque? Doloremque reprehenderit dolores officia reiciendis rem mollitia adipisci, eum hic nulla harum quas quis libero distinctio molestias esse dolorum perferendis, atque consequatur optio sint aliquid voluptatum incidunt illum pariatur. Quasi labore optio maxime. Iste, quo dolore. Harum ratione qui, dolorem asperiores, reprehenderit doloremque autem voluptas, libero provident optio iure repellendus deserunt dicta ea omnis nobis adipisci quam. Architecto harum ad deleniti eum accusantium! Eius doloremque saepe accusantium recusandae sapiente necessitatibus possimus facilis molestias explicabo deserunt repudiandae mollitia doloribus minima delectus tenetur, fugiat soluta est aut. Voluptates magnam omnis praesentium totam, voluptatem repellendus optio molestiae libero? Quas voluptatum, nihil voluptas iste consectetur aliquid amet ex eligendi ullam.';
$replaceWith = '****';
$textCensored = str_replace($badWord, $replaceWith, $text);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Il Tuo Testo Censurato</title>
</head>

<body>

<style>
    .text-uncensored {
        display: none;
    }
</style>

  <div>
    <p class="text-uncensored"><?php echo $text; ?></p>
    <h1>
        Il tuo testo censurato
    </h1>
    <p>
        <?php echo $textCensored; ?>
    </p>
    <h4>Il nuovo paragrafo è lungo: <?php echo strlen($textCensored); ?> caratteri</h4>
  </div>

</body>

</html>