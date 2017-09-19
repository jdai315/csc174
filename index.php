<!doctype html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>

        <link href="css/styles.css" rel="stylesheet">
        <link href="css/navigation.css" rel="stylesheet">
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="static/jquery.js"></script>
    </head>

    <body>

        <div class="container">

            <header>
                <div class="heading">
                    <h1>CSC 174 - Group #2</h1>
                </div><!--closes heading class-->
            </header>

            <nav class="menu">
                <?php include 'inc/navigation.php'; ?>
            </nav>

            <div class="content">

                <div class="well">
                    <h2><a href="jerrydai.php">Jerry Dai</a></h2>
                    <p>
                        Hi my name is Jerry and I am a junior at the U of R. I'm from Queens, NY but my parents moved to Brooklyn from China when they were in their early 20s.
                    </p>
                </div><!--closes well class-->

                <div class="well">
                    <h2><a href="philipkallinos.php">Philip Kallinos</a></h2>
                    <p>
                        I am from Lindenhurst, New York. My parents are both immigrants. My father is from Cyprus and my mother is from Thailand. I also have one older sister.
                    </p>
                </div><!--closes well class-->

                <div class="well">
                    <h2><a href="estellakim.php">Estella Kim</a></h2>
                    <p> 
                        I know HTML, CSS, JavaScript, Java, and Python. I speak English, Korean, and Japanese. I know these Adobe programs: InDesign, Dreamweaver, and Photoshop.
                    </p>
                </div><!--closes well class-->

            </div><!--closes content class-->

            <footer>
                <?php include 'inc/footer.php'; ?>
            </footer>

        </div><!--closes the container class-->

    </body>

</html>
