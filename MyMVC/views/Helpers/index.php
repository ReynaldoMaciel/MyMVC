<?php require(getcwd() . '\\views\\_partials\\header.php'); ?>

<div class="rm-container rm-center">
    <div class="rm-row">
        <section class="rm-content">
            
                <div class="rm-col sm12 marginbottom2 margintop4">
                    <h1 class="font4 font-bold text-center">Utilizando model e helpers</h1>               
                </div>
                <?php
                    $postagens = $this->Page->getModel();
                ?>
                <div class="rm-row">
                    <div class="rm-col sm12">
                        <?php    
                        foreach ($postagens as $post) {
                            /* COMO RESOLVER O PROBLEMA DA RENDERIZAÇÃO DE CONTEÚDO DINÂMICO COM HTML? */
                            echo "<article class='box-shadow rm-padding-32 margintop4 marginbottom4'>";
                            echo "<h1 class='font3 font-bold'>{$post->getTitle()}</h1>";
                            echo "<p class='font2 font-regular'>{$post->getDescription()}</p>";
                            echo "<p class='font1 font-light'>{$post->getContent()}</p>";
                            echo "<p class='font1 font-regular rm-left'>{$post->getAuthor()} - {$post->getDate()}</p>";
                            echo "</article>";
                        }
                        ?>
                    </div>
                </div>
            
        </section>
    </div>
</div>
<?php require(getcwd() . '\\views\\_partials\\footer.php'); ?>



