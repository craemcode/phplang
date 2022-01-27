<html>
    <head>
       
        <title>Music APP by Zack</title>
        <meta charset="UTF-8">
        <link rel = "stylesheet" href="index.css">
        <link rel = "script" href="index.js">
        <meta name="description" content = "queality website">
        <meta name="viewport" content="width=device-width, initial scale=1.0">


    </head>
    <body>
        <header> My Header</header>
        <section>
            <main>
                <article class=articles>
                    <h2 class="headers" >
                        Welcome to my site. <br>Enter a number
                    </h2>
                    <form>
                        <label>
                            Input word:
                        </label>
                        <input id = "input" 
                                type="text"
                                autofocus = "autofocus"
                                placeholder="Write here"
                                >                        
                    </form>
                    <p>
                        You said <span id="output"></span>
                        <?php 
                            $name = "zachary";
                            $age = 28;
                            $isMale = True;
                            $height = 1.70;
                            $salary = null;
                            
                            echo $name.'<br>';
                            echo $age;
                            echo gettype($height).'<br>';

                            var_dump($name, $age, $height);
                            
                        ?>
                    </p>
                    
                    <blockquote class="quotes">
                        One small step for man, one large step for mankind.
                    </blockquote>
                </article>
            </main>
        </section>
        <footer>
            Designed by <i>Zacharia</i>
        </footer>
        </main>
    
        
    </body>
</html>