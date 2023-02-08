<!DOCTYPE html>
<html lang="pt">

<head>
    <?php include 'metas.php'; ?>
    <title>Responsive Theme</title>
</head>

<body>

    <div class="container">

        <div class="header">

            <div class="title">
                veja
            </div>

            <ul class="links">

                <input type="checkbox" id="checkbox_toggle">
                <label for="checkbox_toggle" class="hamburger">
                    <i class="fa-solid fa-bars"></i>
                </label>

                <div class="menu">
                    <li>Diálogos vazados</li>
                    <li>Previdência</li>
                    <li>Radar</li>
                    <li>Páginas Amarelas</li>
                    <li>Revista</li>
                    <li>Newsletters</li>
                    <li>Podcasts</li>
                </div>
            </ul>
        </div>

        <div class="col-md-12 mt-35 flex content">

            <div class="col-md-8">

                <h1>Últimas notícias</h1>

                <input type="hidden" id="page-number" value="">
                <input type="hidden" id="qtd-item-news" value="">

                <div class="news">
                    <!--<div class="row mt-30 flex item-news">

                        <div class="img-bg"></div>

                        <div class="info-news ml-20">
                            <div class="category">Mundo</div>
                            <div class="news-title mt-5">
                                Arábia Saudita: armas usadas em ataques a refinarias eram do Irã
                            </div>
                            <div class="time mt-10">
                                <i class="fa-regular fa-clock"></i>
                                16 set 2019, 17h36
                            </div>
                        </div>
                    </div>-->
                </div>

                <button class="btn-load-more mt-35 mb-25" type="button">Carregar mais</button>
            </div>

            <div class="col-md-4 blocks">

                <div class="row">
                    <div class="item-blocks"></div>
                </div>

                <div class="row mt-20">
                    <div class="item-blocks"></div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'scripts.php'; ?>
</body>

</html>
