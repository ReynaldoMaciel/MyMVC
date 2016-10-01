<?php require(getcwd() . '\\views\\_partials\\header.php'); ?>
<div class="rm-white">
    <div class="rm-content rm-center">
        <div class="rm-row">
            <section class="rm-col sm12 box-shadow margintop4 marginbottom4">
                <h1 class="font4 text-center color1 margintop1 marginbottom4">Primeiros passos MyMVC</h1>
                <div class="">
                    <article class="margintop4 marginbottom4">
                        <div class="rm-padding-24">
                            <h1 class="font2 font-black padding2 rm-text-black">Crie um novo "arquivo.class.php" dentro da pasta "controllers"</h1>
                            <!--img src="/img/tutorial1.png"/-->
                        </div>                       
                    </article>
                </div>   
                <div class="">
                    <article class="margintop4 marginbottom4">
                        <div class="rm-padding-24">
                            <h1 class="font2 font-black padding2 rm-text-black">Herde a classe "Controller" e chame o método construtor</h1>
                            <p class="tagline font1 font-light padding3 rm-text-red">**Você deve passar como parâmetro o Título da Página, Descrição, Template e model**</p>
                            <!--img src="/img/tutorial2.png"/-->
                        </div>                       
                    </article>
                </div>
                <div class="">
                    <article class="margintop4 marginbottom4">
                        <div class="rm-padding-24">
                            <h1 class="font2 font-black padding2 rm-text-black">Crie um método com o nome que quiser e chame o método "renderView"</h1>
                            <p class="tagline font1 font-light padding3 rm-text-red">**O nome do método também definirá a rota!Se o método for "index" será chamado quando acessarmos a Home/index **</p>
                            <!--img src="/img/tutorial3.png"/-->
                            <p class="tagline font1 font-light padding3 rm-text-red">**Por convenção o método index é chamado quando acessamos a url do nome do controller!</p>
                            <p class="tagline font1 font-light padding3 rm-text-red">Por exemplo: localhost/MyMVC/Home **</p>
                        </div>                       
                    </article>
                </div>
                <div class="">
                    <article class="margintop4 marginbottom4">
                        <div class="rm-padding-24">
                            <h1 class="font2 font-black padding2 rm-text-black">Crie uma pasta com o nome do controller dentro da pasta "views", e crie também um "index.php" dentro da pasta </h1>
                            <!--img src="/img/tutorial4.png"/-->
                        </div>                       
                    </article>
                </div>
                <div class="">
                    <article class="margintop4 marginbottom4">
                        <div class="rm-padding-24">
                            <h1 class="font2 font-black padding2 rm-text-black">Na view você já sabe o que fazer! :)</h1>
                            <!--img src="/img/tutorial5.png"/-->
                        </div>                       
                    </article>
                </div>
            </section>
        </div>
        <div class="rm-row ">
            <div class="rm-col sm12">
                <h1>Esse é o objeto que você possui dentro de uma view</h1>
                <pre>
                    <?= var_dump($this); ?>
                </pre>
            </div>
        </div>
    </div>
</div>
<?php require(getcwd() . '\\views\\_partials\\footer.php'); ?>


