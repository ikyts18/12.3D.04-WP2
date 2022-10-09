<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->load->view('partial/head.php');?>
</head>
<body>
    <?php $this->load->view('partial/navbar.php');?>
    <h1>List Article</h1>
    <ul>
        <?php foreach($article as $article):?>
        <li><?= $article['title']?></li>
        <?php endforeach ?>
    </ul>
    <?php $this->load->view('partial/footer.php');?>
</body>
</html>