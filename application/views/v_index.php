<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $judul ?> | Web Programming</title>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css" type="text/css">
</head>


<body>
    <div id="wrapper">
        <header> 
            <hgroup>
                <h1>Web Acha </h1>
                <h3>Info Seputar Kampus BSI</h3>
            </hgroup>
            <nav>
                <ul>
                    <li><a href="<?php echo base_url() . 'index.php/web'?>">Home</a></li>
                    <li><a href="<?php echo base_url() . 'index.php/blog'?>">Blog</a></li>
                    <li><a href="<?php echo base_url() . 'index.php/about'?>">About</a></li>

                </ul>
            </nav>
            <div class="clear"></div>
        </header>

        <section>
            <h1> <?php echo $judul ?></h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dolorum quod officia velit quisquam quasi voluptatem minima, quibusdam itaque dignissimos quae reiciendis quia tempore earum amet labore asperiores provident dolor dolore illum! Animi, reprehenderit. Placeat a est beatae, nesciunt provident quaerat accusantium nobis commodi tenetur eius accusamus ullam voluptate eos!
            </p>
        </section>
        <footer>
            <a href="acha.ac.id">Website Resmi Acha</a>
        </footer>
    </div>
</body>

</html>