$(document).ready(function() {


    $(document).on('click','.menu-btn',function(event){
        $('body').toggleClass('menu-open');
    });

	$('.collage.body h3').each(function() {
        var tis = $(this), state = false, answer = tis.next('div').slideUp();
        tis.click(function() {
            state = !state;
            answer.slideToggle(state);
            tis.toggleClass('active',state);
        });
    });
    
});