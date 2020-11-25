//turn text into url friendly
String.prototype.toPermalink = function(){
  return this.toString().trim().toLowerCase().replace(/\s/g, '-')
};

//puts item into cart and reloads the page (so the user can see the cart updates)
$('.add-to-cart-btn').on('click', function(){

  $.ajax({

    url: BASE_URL + 'shop/add-to-cart',
    type: 'GET',
    dataType: 'html',
    data: {productID: $(this).data('id')},
    success: function(res){
      window.location.reload();
    }
  })
});

//removes item from cart and reloads the page (so the user can see the cart updates)
$('.remove-from-cart-btn').on('click', function(){

  $.ajax({

    url: BASE_URL + 'shop/remove-from-cart',
    type: 'GET',
    dataType: 'html',
    data: {productID: $(this).data('id')},
    success: function(res){
      window.location.reload();
    }
  })
});

// messages the user of successful added/removed item from cart
$('#sm-box').delay(3000).slideUp();

//highlights the help-txt underneath input in menu/create page
$('.field-input-cms').on('focusin focusout', function(){
  
  $(this).next().toggleClass('text-muted').toggleClass('font-weight-bold');

});

//copy title into friendly url in "add page to menu"
$('.original-text').on('focusout', function(){
  $('.target-text').val($(this).val().toPermalink());
});


//item search autocomplete
const search_term = $('#search-bar');

// triggered when item from the list is selected
document.querySelector('#submit-btn').addEventListener('click', target => location.href = BASE_URL + 'shop/' + search_term.val());

search_term.on('keyup', function(){
  var userSearch = search_term.val().trim();
  
  if (userSearch.length > 0 ) {
    
    
    $.ajax({
      url: BASE_URL + 'search',
      type: "GET",
      dataType: 'json',
      data: {search: userSearch},

      success: function(response) {

        const dataListEl = document.querySelector('#data-list');
        dataListEl.innerHTML ='';
        response.search.forEach(product => {
          const optionEl = document.createElement('option', product.ptitle);
          optionEl.setAttribute('value', product.title + '/' + product.purl);
          dataListEl.appendChild(optionEl);
        });
      }
    });
    
  }
  
});