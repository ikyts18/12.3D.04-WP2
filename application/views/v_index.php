<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $judul ?></title>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
</head>
<body>
    <div id="wrapper">
        <header>
            <hgroup>
                <h1>Berita Ngoding</h1>
                <h3>Template Sederhana</h3>
            </hgroup>
            <nav>
                <ul>
                    <li><a href="<?php echo base_url().'index.php/web' ?>">Home</a></li>
                    <li><a href="<?php echo base_url().'index.php/web/about' ?>">About</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </header>
        <section>
            <h1><?php echo $judul?></h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente earum,
                harum beatae voluptates blanditiis voluptatem vero incidunt ut ad laborum dolores
                odit vel iusto? Perferendis voluptatibus, sint ipsam dicta perspiciatis ullam tenetur
                similique neque sit et minima atque totam debitis fugiat, modi corrupti porro ut! Dolorum
                ad asperiores natus molestias.
            </p>
        </section>
        <footer>
            &copy; <?= Date('y')?>Beritangoding.com
        </footer>
    </div>
</body>
</html>