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

                <input type="checkbox" id="checkbox_toggle" name="checkbox_toggle">
                <label for="checkbox_toggle" class="hamburger" id="label-icon">
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

                <!--Control tags-->
                <input type="hidden" id="page-number" value="">
                <input type="hidden" id="qtd-item-news" value="">

                <!--Place where news are load-->
                <div class="news"></div>

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

        <div class="col-md-12 flex mt-5 mb-10 footer">
            <div class="col-md-8 copyright">
                <i class="fa-regular fa-copyright"></i> Abril Mídia S.A. Todos os direitos reservados.
            </div>

            <div class="col-md-4 by-wordpress">
                Powered by <span style="color: #FFFFFF; cursor: pointer;"><a href="https://wordpress.com/pt-br/" target="_blank">WordPress.com VIP</a></span>
            </div>
        </div>
    </div>

    <?php include 'scripts.php'; ?>
</body>

</html>
