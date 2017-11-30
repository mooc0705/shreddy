<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=GB2312">  
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>Shreddy</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
<link href="css/bootstrap-grid.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/main.css" rel="stylesheet" type="text/css"/>
<link href="css/main-nav.css" rel="stylesheet" type="text/css"/>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>


</head>
   <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style>

<body>
    

        <div class="container-fluid">
            <div class="row" style="border-bottom: 1px solid #000;margin-bottom: 15px;">

               <?php include 'navbar.php'
               ?>

            </div>
          </div>


<div class="grid-new">
  <div class="grid-item breakfast" onclick="applyFilter('salad')">沙拉</div>
  <div class="grid-item breakfast" onclick="applyFilter('sanwich')">三明治</div>
  <div class="grid-item breakfast" onclick="applyFilter('pancake')">中式煎饼</div>
  <div class="grid-item breakfast">西式早点</div>
  <div class="grid-item lunch">鸡胸肉</div>
  <div class="grid-item lunch">鸡腿肉</div>
  <div class="grid-item lunch">牛绞肉</div>
  <div class="grid-item lunch">牛肉</div>
  <div class="grid-item lunch">水产</div>
  <div class="grid-item lunch">其他</div>
  <div class="grid-item add">零食</div>
</div>
<div class="container">
      <br>
          <div class='embed-container'><iframe src='https://www.youtube.com/embed/CJUSBwSBSyg' frameborder='0' allowfullscreen></iframe></div>


          <div class="col-md-12">
          <div class="row">
              <div class="col centeral" id="material-1">
              <a data-filter="*">
            <img src="img/protein.png" style="position: relative;margin-left: auto;margin-right: auto;" class="img-responsive" width="100"><br><span class="material-title">全部</span></a>
            </div>
            <div class="col centeral" id="material-1">
              <a data-filter=".breakfast">
            <img src="img/protein.png" style="position: relative;margin-left: auto;margin-right: auto;" class="img-responsive" width="100"><br><span class="material-title">早餐</span></a>
            </div>
            <div class="col centeral" id="material-2">
              <a data-filter=".lunch"><img src="img/carb.png"  style="position: relative;margin-left: auto;margin-right: auto;" class="img-responsive" width="100"><br><span class="material-title">正餐</span> </a>
            </div>
            <div class="col centeral" id="material-3">
              <a data-filter=".add"><img src="img/meat.png"  style="position: relative;margin-left: auto;margin-right: auto;" class="img-responsive" width="100"><br><span class="material-title">加餐</span></a>
            </div>
        </div>
       </div>
<hr>
       <section>
        <div class="col-12">
          <div class="row grid"  id="menu-img">
            
          </div>
        </div>

       </section>
        </div>

        <?php include 'footer.php'
        ?>

    
    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/menu.js"></script>
<script type="text/javascript">

 $(document).ready(function(){
   if(window.location.href.indexOf("menu.php") > -1) {
      $('#menu .nav-link').addClass('active');
   }
$('.grid').hide();

    var material = {'#material-1':'#protein','#material-2':'#carbohydrat','#material-3':'#fat','#material-4':'#veg','#material-5':'#source'};

    jQuery.each(material, function(i,val){
        $(i).click(function(){
        $('.material-title').removeClass('active');
        $(i + ' .material-title').addClass('active');
        console.log(val);
        $(val).siblings().fadeOut(0);
        $(val).fadeIn(800);
        
  
      });

    });

    // external js: isotope.pkgd.js

var $grid = $('.grid-new').isotope({
  itemSelector: '.grid-item',
  stagger: 30
});

$('.filter-button-group').on( 'click', '.button', function() {
  var filterValue = $(this).attr('data-filter');
  $grid.isotope({ filter: filterValue });
});




});

  </script>
</body>

</html>