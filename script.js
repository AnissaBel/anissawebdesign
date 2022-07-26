

window.onload=function() {

    const menu_btn = document.querySelector('.hamburger');
    const mobile_menu = document.querySelector('.mobile-nav');
    const menu_links = document.querySelector('.menu-links');
    


    menu_btn.addEventListener('click',function() {
        menu_btn.classList.toggle('is-active');
        mobile_menu.classList.toggle('is-active');
        menu_links.classList.toggle('is-active');
        
    });

}

$(document).on('click','.mobile-nav' ,function(e) {
    if($(e.target).is('a') ) {
        $(this).toggle('is-active');
    }
});
