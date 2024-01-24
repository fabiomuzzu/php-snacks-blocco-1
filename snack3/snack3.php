<?php 
    $articoli = [
        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore corporis hic assumenda ea voluptas repellendus consequatur repellat, alias magni accusamus maxime aut illum tempore. Non odio rem quasi laboriosam beatae.'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Agostino Pedilongu',
                'text' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore corporis hic assumenda ea voluptas repellendus consequatur repellat, alias magni accusamus maxime aut illum tempore. Non odio rem quasi laboriosam beatae.'
            ],
        ],
        '10/01/2020' => [
            [
                'title' => 'Post 3',
                'author' => 'Edoardo Panciadipecora',
                'text' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore corporis hic assumenda ea voluptas repellendus consequatur repellat, alias magni accusamus maxime aut illum tempore. Non odio rem quasi laboriosam beatae.'
            ],
            [
                'title' => 'Post 4',
                'author' => 'Guido Ronaldo',
                'text' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore corporis hic assumenda ea voluptas repellendus consequatur repellat, alias magni accusamus maxime aut illum tempore. Non odio rem quasi laboriosam beatae.'
            ],
        ],
        '10/01/2021' => [
            [
                'title' => 'Post 5',
                'author' => 'Mario Califfone',
                'text' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore corporis hic assumenda ea voluptas repellendus consequatur repellat, alias magni accusamus maxime aut illum tempore. Non odio rem quasi laboriosam beatae.'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Vittorio Brumotti',
                'text' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore corporis hic assumenda ea voluptas repellendus consequatur repellat, alias magni accusamus maxime aut illum tempore. Non odio rem quasi laboriosam beatae.'
            ],
        ],
        '10/01/2022' => [
            [
                'title' => 'Post 7',
                'author' => 'Gerry Scotti',
                'text' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore corporis hic assumenda ea voluptas repellendus consequatur repellat, alias magni accusamus maxime aut illum tempore. Non odio rem quasi laboriosam beatae.'
            ],
            [
                'title' => 'Post 8',
                'author' => 'Pino Scotto',
                'text' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore corporis hic assumenda ea voluptas repellendus consequatur repellat, alias magni accusamus maxime aut illum tempore. Non odio rem quasi laboriosam beatae.'
            ],
        ],
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php foreach($articoli as $key => $elem) { ?>
            <div class="row">
                <?php foreach ($elem as $post) { ?>
                    <div class="col">
                        <?php echo $key ?>
                        <h2><?php echo $post['title'] ?></h2>
                        <p><?php echo $post['text'] ?></p>
                        <div class="text-end"><?php echo $post['author'] ?></div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</body>
</html>