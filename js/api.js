function loadNews (pageNumber, qtd) {

    const limit = qtd ? +qtd : 10;
    const page = pageNumber ? +pageNumber : 1;

    // console.log(pageNumber)

    $.get('https://veja.abril.com.br/wp-json/wp/v2/posts?page=' + page + '&per_page=' + limit, function (response) {

        $.each(response, function (index, json) {

            let img = json['featured_media_url'];
            let category = json['categories_data'][0]['name'];
            let title = json['title']['rendered'];
            let link = json['link'];

            let date = new Date(json['date']);
            let time = date.toLocaleDateString() + ', ' + date.toLocaleTimeString();

            $('.news')
                .append(
                    '<div class="row mt-30 flex item-news">' +
                    '   <div class="img-bg"><img class="img-news" src="' + img + '" alt="Imagem notícia"></div>' +
                    '   <div class="info-news ml-20">' +
                    '       <div class="category">' + category + '</div>' +
                    '       <div class="news-title mt-5"><a href="' + link + '" target="_blank">' + title + '</a></div>' +
                    '       <div class="time mt-10">' +
                    '           <i class="fa-regular fa-clock"></i><span style="margin-left: 10px;">' + time + '</span></div>' +
                    '       </div>' +
                    '</div>'
                );
        });

        // Control variables
        let qtdItemsNews = $('.item-news').length;
        $('#qtd-item-news').val(qtdItemsNews);
        $('#page-number').val(page);
    });
}
