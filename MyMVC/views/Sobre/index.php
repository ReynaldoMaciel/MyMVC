<?php require(getcwd() . '\\views\\_partials\\header.php'); ?>
        <div class="rm-content ">
            <article class="rm-row rm-center">
                <div class="rm-col sm12">
                    <h1 class="font3 font-bold margintop2 marginbottom2">MyMVC</h1>
                    <p class="tagline font-light font1">Framework criado por Reynaldo Marinho para utilização em projetos futuros
                        que necessitam da arquitetura MVC</p>
                    <p class="tagline font-light font1">Diferente de outros frameworks no mercado recheado de funcionalidades, que você 
                        provavelmente nunca vai usar, o MyMVC procura ser simples e leve </p>
                    <p class="tagline font-light font1">Siga o tutorial da página principal para criar seu primeiro controller e 
                        sua primeira view com o MyMVC!</p>
                    <p class="tagline font-light font1">A pasta themes é aonde você irá colocar seus arquivos css js e imagens</p>
                    <p class="tagline font-light font1">Por padrão já está imbutido o framework RelativeCSS que é utilizado 
                        na estilização das views</p>
                    <p class="tagline font-light font1">Esse é o tema padrão do framework, mas você pode estar utilizando
                        Bootstrap, Joomla ou qualquer outra biblioteca CSS, para isso basta importar os respectivos arquivos 
                        para dentro da pasta themes e usar sua arquitetura de Front-End</p>
                </div>
                <article class="">
                    <div class="rm-col sm12 margintop2 marginbottom2 text-left">
                        <?php
                        var_dump($this);
                        ?>
                    </div>
                </article>
            </article>
        </div>
<?php require(getcwd() . '\\views\\_partials\\footer.php'); ?>



