var menus = [];
var $grid;
$.getJSON( "menu.json", function( data ) {
  menus = data;
  var items = '';
  menus.forEach(function(menu, index){
  		items += '<img src="img/'+menu.img+'.png" class="img-fluid">';
  });
 $('#menu-img').html(items);

  // init Isotope
    $grid = $('.grid').isotope({
      itemSelector: '.element-item',
      layoutMode: 'fitRows'
      });

});

function applyFilter(filter){
  $('.grid').show();
        $grid.isotope({ filter: '[data-material="' + filter + '"]' });
    }

