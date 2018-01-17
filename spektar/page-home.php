<?php
/*
Template Name: Page Home
*/
 
get_header(); 

$euro_otkup = get_post_meta( get_the_ID(), 'euro_otkup', true );
$euro_prodaja = get_post_meta( get_the_ID(), 'euro_prodaja', true );
$euro_srednja_vrednost = get_post_meta( get_the_ID(), 'euro_srednja_vrednost', true );

$chf_otkup = get_post_meta( get_the_ID(), 'chf_otkup', true );
$chf_prodaja = get_post_meta( get_the_ID(), 'chf_prodaja', true );
$chf_srednja_vrednost = get_post_meta( get_the_ID(), 'chf_srednja_vrednost', true );

$usd_otkup = get_post_meta( get_the_ID(), 'usd_otkup', true );
$usd_prodaja = get_post_meta( get_the_ID(), 'usd_prodaja', true );
$usd_srednja_vrednost = get_post_meta( get_the_ID(), 'usd_srednja_vrednost', true ); 
?>

<div class="jumbotron text-center">
  <h1>Menjačnica "Spektar Plus"</h1> 
  <p>Specijalizovana radnja</p> 
  <div class="table-responsive">
  <table class="table table-striped table-bordered table-hover text-center">
  <caption class="text-center" style="background-color=white;">Kursna lista na dan <?php echo  date("d-m-Y")?>.</caption>
  <thead>
    <tr>
      <th  class="text-center">Valute</th>
      <th class="text-center">Otkup</th>
      <th class="text-center">Prodaja</th>
      <th class="text-center">Srednji kurs NBS</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>EUR</td>
      <td><?php 
		 // Checks and displays the retrieved value
		if( !empty( $euro_otkup) ) {
			echo $euro_otkup;
		}
	?>
	</td>
      <td>
	  <?php
	 // Checks and displays the retrieved value
		if( !empty( $euro_prodaja ) ) {
			echo $euro_prodaja;
		}
	  ?>
	  </td>
      <td>
	  <?php
	  // Checks and displays the retrieved value
		if( !empty( $euro_srednja_vrednost ) ) {
			echo $euro_srednja_vrednost;
		}
	   ?>
	  </td>
    </tr>
    <tr>
      <td>CHF</td>
      <td><?php 
		 // Checks and displays the retrieved value
		if( !empty( $chf_otkup) ) {
			echo $chf_otkup;
		}
		?>
		</td>
      <td>
	  <?php 
		 // Checks and displays the retrieved value
		if( !empty( $chf_prodaja) ) {
			echo $chf_prodaja;
		}
		?>
	  </td>
      <td><?php 
	  // Checks and displays the retrieved value
		if( !empty( $chf_srednja_vrednost) ) {
			echo $chf_srednja_vrednost;
		}
	  
	  ?></td>
    </tr>
    <tr>
      <td>USD</td>
      <td><?php 
		 // Checks and displays the retrieved value
		if( !empty( $usd_otkup) ) {
			echo $usd_otkup;
		}
		?>
		</td>
      <td>105,00</td>
      <td>103.28</td>
    </tr>
  </tbody>
</table>
</div>
</div>

<!-- Container (About Section) -->
<div id="about" class="container parallax">
  <div class="row">
  
      <h2 class="text-center">Ko smo mi ?</h2>
	  <div class="line-holder">
    <div class="the-line">
    </div>
  </div>
    <div class="col-sm-8">
      <p class="text-bg">Menjačnica " Spektar Plus" je ovlašćeni

      menjač NBS za obavljanje menjačkih poslova.
      
      08.06.2004 godine je počela sa radom.
      
      Februara 2017 godine, menjačnica dobija dozvolu NBS
      
      za obavljanje poslova platnog prometa.
      
      Oktobra 2017 godine, menjačnica dobija dozvolu za RIA transfer novca</p>
     </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span> 
    </div>
  </div>
</div>
 
<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>Usluge</h2> 
  <div class="line-holder">
    <div class="the-line">
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-sm-12 col-md-4 hvr-sweep-to-right">
    <i class="fa fa-user-md fa-4x" aria-hidden="true"></i> 
      <p>Prodaja putnog zdravstvenog osiguranja</p>
    </div>
    <div class="col-sm-12 col-md-4 hvr-sweep-to-right">
     <i class="fa fa-eur  fa-4x" aria-hidden="true"></i> 
      <p>RIA transfer novca slanje i prijem novca</p>
    </div>
    <div class="col-sm-12 col-md-4 hvr-sweep-to-right">
    <i class="fa fa-money fa-4x" aria-hidden="true"></i> 
      <p>Menjačko poslovanje</p>
    </div>
  </div>
  <br><br>
  <div class="row">
    <div class="col-xs-12 col-md-4 hvr-sweep-to-right">
    <i class="fa fa-lock fa-4x" aria-hidden="true"></i> 
      <p>Kontrola novčanica</p>
    </div>
    <div class="col-xs-12 col-md-4 hvr-sweep-to-right">
    <i class="fa fa-usd fa-4x" aria-hidden="true"></i>
      <p>Platni promet</p>
    </div>
    <div class="col-xs-12 col-md-4 hvr-sweep-to-right"> 
      <i class="fa fa-thumbs-up fa-4x" aria-hidden="true"></i>
      <p>Plaćajte uz minimalnu proviziju</p>
    </div>
  </div>
</div>

<!-- Container (Blog Section) -->
<div id="blog" class="container-fluid text-center bg-grey">
 
 
 
  <h2>Blog</h2><br> 
  <div class="line-holder">
    <div class="the-line">
    </div>
  </div>
  <?php 
      $the_band = new WP_Query(array( 
       'posts_per_page' => 3, 
       )); 
      while ( $the_band->have_posts() ) : 
      $the_band->the_post();
     ?>
     <div class="col-sm-4">
      <div class="thumbnail">
      <a class="active-link circle-img-width" href="<?php the_permalink();?>">
      <?php the_post_thumbnail('thumbnail',['class' => 'img-circle' ]);?> 
      </a>
      <br>
          <a class="btn  btn-primary" role="button" href="<?php the_permalink();?>"><?php the_title();?></a> 
        </div>
      
    </div>
    <?php endwhile; ?>
 
<!-- Container (Businessg Section) -->
<div id="posao" class="container-fluid parallax2">
  <div class="text-center">
    <h2>Naš posao</h2> 
    <div class="line-holder">
    <div class="the-line">
    </div>
  </div>
  </div>
  <div class="row">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Menjačko poslovanje</h1>
        </div>
        <div class="panel-body">
          <p> Novac menjajte na sigurnom mestu - brzo, jednostavno i diskretno</p>
        </div>
         
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Platni <br>promet </h1>
        </div>
        <div class="panel-body">
          <p>Plaćanje svih obaveza (računi, struja, plin, grejanje, telefoni (fiksni i mobilni).</p>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Putničko osiguranje</h1>
        </div>
        <div class="panel-body">
          <p>U slučaju iznenadne bolesti ili povrede, putničko zdravstveno osiguranje garantuje vam pokriće</p>
        </div>
      </div>            
    </div>    
  </div>

  <div class="row">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>RIA transfer novca</h1>
        </div>
        <div class="panel-body">
          <p>Više od 30 godina Ria Money Transfer sa velikim uspehom pruža brz, siguran i povoljan način za prijem i slanje novca korisnicima širom sveta.</p>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Fotokopiranje crno-belo ili u boji</h1>
        </div>
        <div class="panel-body">
          <p>Posedujemo aparate za fotokopiranje Canon, Ricoh i Hp najnovije generacije i možemo slobodno reći da su u nekim slučajevima naše kopije bolje od originala</p>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Kontrola novčanica</h1>
        </div>
        <div class="panel-body">
          <p>Detektor ima nekoliko nacina detekcije: infra crvenu kontrolu; magnetnu kontrolu; kontrola transparetnosti papira; kontrola širine novcanice;</p>
        </div>
      </div>      
    </div>    
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey wow bounceInRight">
  <h2 class="text-center">Kontakt</h2>
  <div class="line-holder">
    <div class="the-line">
    </div>
  </div> 
<?php echo do_shortcode('[contact-form-7 id="73" title="Primary contact form"]'); ?>
</div>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script> -->
<!-- Add Google Maps -->
<div id="googleMap" style="height:400px;width:100%;"></div> 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDHi9TK59E_qaH8huUApx5H9-3WhENPEFA&callback=myMap"></script>
 
<?php 
get_footer();
?>