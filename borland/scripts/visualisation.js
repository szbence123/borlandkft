
window.onscroll = function() {
    $('#navid').removeClass('bg-transparent');
        $('#navid').addClass('bg-dark');
        $('body').css('background-color', 'red');
    if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
        

    }
};