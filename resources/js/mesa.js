$(function() {
    $(".aww-board__board").on('load', function() {
        // Esconde a tela de carregamento ao terminar de carregar o iframe AWW
        $('.screen-loader').addClass("puff-out-center")
        setTimeout(function() {
            $('.screen-loader').addClass("invisible")
        }, 100)
    })
})