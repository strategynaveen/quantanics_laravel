

// document ready function
$(document).ready(function(){

    for (let index = 1; index <=100; index++) {
        setTimeout(() => {
            if (index<10) {
                $('.counter_ourclient').text('+'+index);
            }else{
                $('.counter_ourclient').text('+'+index);
            }
        }, 10);

    }
});

