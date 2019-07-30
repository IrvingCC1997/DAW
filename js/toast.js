function displayGrowl() {
    $('.growl-notice').fadeIn().html('<i class="fas fa-check-circle"></i> Producto agregado al carrito');
    setTimeout(function(){ 
      $('.growl-notice').fadeOut();
    }, 4000);
    return false;
  }