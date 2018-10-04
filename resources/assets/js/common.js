$('.m-delete').on('click', function () {
    let element = $(this);
    let id = element.data('id');
    let type = element.data('type');
    $.ajax({
        type: 'DELETE',
        url: type + '/' + id,
    }).done(function () {
        element.parent().remove();
    });
});