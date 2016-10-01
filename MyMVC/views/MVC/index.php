<?php require(getcwd() . '\\views\\_partials\\header.php'); ?>
    <div class="rm-content"  >
        <article class="rm-row rm-center">
            <div class="rm-col sm12">
                <h1 class="font3 font-bold margintop2 marginbottom2">O que é MVC</h1>
                <p class="tagline font-light font1 marginbottom2">Segundo a wikipédia...  
                MVC é nada mais que um padrão de arquitetura de software, separando sua aplicação em 3 camadas.
                A camada de interação do usuário(view), a camada de manipulação dos dados(model)
                e a camada de controle(controller).</p>
                <img src="https://s.profissionaisti.com.br/wp-content/uploads/2014/10/mvc-desenvolvimento-software.png"/>
            </div>
        </article>
        <article class="rm-row ">
            <div class="rm-col sm12">
                <h1 class="font1 font-bold">Objeto $this da view</h1>
                <pre>
                    <?= var_dump($this); ?>
                </pre>
            </div>
        </article>
    </div>
<?php require(getcwd() . '\\views\\_partials\\footer.php'); ?>