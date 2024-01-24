<?php 
    $articoli = [
        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Agostino Pedilongu',
                'text' => 'Testo post 2'
            ],
        ],
        '10/01/2020' => [
            [
                'title' => 'Post 3',
                'author' => 'Edoardo Panciadipecora',
                'text' => 'Testo post 3'
            ],
            [
                'title' => 'Post 4',
                'author' => 'Guido Ronaldo',
                'text' => 'Testo post 4'
            ],
        ],
        '10/01/2021' => [
            [
                'title' => 'Post 5',
                'author' => 'Mario Califfone',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Vittorio Brumotti',
                'text' => 'Testo post 6'
            ],
        ],
        '10/01/2022' => [
            [
                'title' => 'Post 7',
                'author' => 'Gerry Scotti',
                'text' => 'Testo post 7'
            ],
            [
                'title' => 'Post 8',
                'author' => 'Pino Scotto',
                'text' => 'Testo post 8'
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
                <div class="col-12">
                    <?php echo $key ?>
                </div>
                <?php foreach ($elem as $post) {
                    echo $post['title'];
                    echo $post['author'];
                    echo $post['text'];
                }?>
            </div>
        <?php } ?>
    </div>
</body>
</html>