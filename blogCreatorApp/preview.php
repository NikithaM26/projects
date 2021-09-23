<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/preview.css">
  <title>Blog Creator App</title>
  <link rel="icon" href="./images/Blogpost.jpg" type="image/icon">
</head>
<body>
  <header>
    <h1>Create your blog...</h1>
    <h3><a href="./index.html">Home</a></h3>
  </header>
  <section class="container">
    <section class="image">
      <img src = <?php echo $_POST['pic-url']; ?> alt="image">
      <img src = <?php echo $_POST['second-pic']; ?> alt = "seconf-image">
    </section>
    <section class="container-content">
      <h1 id="title"><?php echo $_POST['article-title']; ?></h1>
      <section class="editorial">
        <p id="contibutor"><strong>Article By : <?php echo $_POST['name']; ?></strong></p>
      </section>
      <p><?php echo $_POST['article'] ?></p>

    </section>
  </section>
</body>
</html>
