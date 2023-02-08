<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>
<script src="js/api.js"></script>
<script>

    $(document).ready(function () {

        // Load first 10 news
        loadNews();

        // Add more news to page
        $('.btn-load-more').click(function () {

            let pageNumber = parseInt($('#page-number').val());
            // let qtdItemsNews = parseInt($('#qtd-item-news').val());

            let addPage = pageNumber + 1;
            let addItems = 10;

            $('.btn-load-more').html('Carregando...');

            setTimeout(function () {
                loadNews(addPage, addItems);
                $('.btn-load-more').html('Carregar mais');
            }, 1000)
        });

        // Change menu icon
        $('input:checkbox[name=checkbox_toggle]').on('change', function () {

            if ($(this).is(':checked')) {
                $('#label-icon').html('<i class="fa-solid fa-xmark"></i>');
            } else {
                $('#label-icon').html('<i class="fa-solid fa-bars"></i>');
            }
        });
    });
</script>
