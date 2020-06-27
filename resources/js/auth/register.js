$(function() {
    // Switch selected icon
    $('.icons-list__icon').on('click', function() {
        // Reset all icons color
        $('.icons-list__icon').each(function() {
            $(this).addClass('border-light-secondary')
            $(this).removeClass('border-primary')
        })

        // Add select color for icon
        $(this).addClass('border-primary')
        $(this).removeClass('border-light-secondary')

        console.log($(this))

        // Set icon id on input value
        $('#icon-id').val($(this).data('icon-id'))
    })
})