$(function() {
    $(".aww-board__board").on('load', function() {
        // Esconde a tela de carregamento ao terminar de carregar o iframe AWW
        $('.screen-loader').addClass("puff-out-center")
        setTimeout(function() {
            $('.screen-loader').addClass("invisible")
        }, 100)

        // Exibe e, logo em seguida, desativa o popover do usuario conectado
        setTimeout(function() {
            $('.user-icon__image i').popover('show')
        }, 700)
        setTimeout(function() {
            $('.user-icon__image i').popover('hide')
        }, 7000)
    })
})