<?php
/*
Template Name: Page Home
*/
 
get_header(); 

//tabela
$euro_otkup = get_field('euro_otkup');
$euro_prodaja = get_field( 'euro_prodaja');
$euro_srednja_vrednost =get_field( 'euro_srednja_vrednost');

$chf_otkup = get_field( 'chf_otkup');
$chf_prodaja = get_field('chf_prodaja');
$chf_srednja_vrednost = get_field('chf_srednja_vrednost');

$usd_otkup = get_field( 'usd_otkup');
$usd_prodaja = get_field( 'usd_prodaja');
$usd_srednji_kurs = get_field('usd_srednji_kurs');

//usluge
$prvi = get_field( 'prvi');
$drugi = get_field( 'drugi');
$treci = get_field( 'treci');
$cetvrti = get_field( 'cetvrti');
$peti = get_field( 'peti');
$sesti = get_field( 'sesti');

//nas posao
$posao_jedan_naslov =get_field('posao_jedan_naslov');
$posao_jedan_tekst =get_field('posao_jedan_tekst');

$posao_dva_naslov=get_field('posao_dva_naslov');	
	

$posao_dva_tekst	=get_field('posao_dva_tekst');


$posao_tri_naslov=get_field('posao_tri_naslov');	
	

$posao_tri_tekst=get_field('posao_tri_tekst');

$posao_cetiri_naslov	=get_field('posao_cetiri_naslov');

$posao_cetiri_tekst	=get_field('posao_cetiri_tekst');

$posao_pet_naslov=get_field('posao_pet_naslov');

$posao_pet_tekst=get_field('posao_pet_tekst');

$posao_sest_naslov=get_field('posao_sest_naslov');

$posao_sest_tekst=get_field('posao_sest_tekst');

//$kontakt = get_post_meta( get_the_ID(), 'kontakt', true );
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
      <td><?php 
		 // Checks and displays the retrieved value
		if( !empty( $usd_prodaja) ) {
			echo $usd_prodaja;
		}
		?></td>
      <td><?php 
		 // Checks and displays the retrieved value
		if( !empty( $usd_srednji_kurs) ) {
			echo $usd_srednji_kurs;
		}
		?></td>
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
      <p>
		  <?php // Checks and displays the retrieved value
		if( !empty( $prvi) ) {
			echo $prvi;
		} ?>
		</p>
    </div>
    <div class="col-sm-12 col-md-4 hvr-sweep-to-right">
     <i class="fa fa-eur  fa-4x" aria-hidden="true"></i> 
      <p>
		  <?php // Checks and displays the retrieved value
		if( !empty( $drugi) ) {
			echo $drugi;
		} ?>
		</p>
    </div>
    <div class="col-sm-12 col-md-4 hvr-sweep-to-right">
    <i class="fa fa-money fa-4x" aria-hidden="true"></i> 
      <p>
		  <?php // Checks and displays the retrieved value
		if( !empty( $treci) ) {
			echo $treci;
		} ?>
		</p>
    </div>
  </div>
  <br><br>
  <div class="row">
    <div class="col-xs-12 col-md-4 hvr-sweep-to-right">
    <i class="fa fa-lock fa-4x" aria-hidden="true"></i> 
      <p><p>
		  <?php // Checks and displays the retrieved value
		if( !empty( $cetvrti) ) {
			echo $cetvrti;
		} ?>
		</p>
    </div>
    <div class="col-xs-12 col-md-4 hvr-sweep-to-right">
    <i class="fa fa-usd fa-4x" aria-hidden="true"></i>
     <p>
		  <?php // Checks and displays the retrieved value
		if( !empty( $peti) ) {
			echo $peti;
		} ?>
		</p>
    </div>
    <div class="col-xs-12 col-md-4 hvr-sweep-to-right"> 
      <i class="fa fa-thumbs-up fa-4x" aria-hidden="true"></i>
     <p>
		  <?php // Checks and displays the retrieved value
		if( !empty( $sesti) ) {
			echo $sesti;
		} ?>
		</p>
    </div>
  </div>
</div>

<!-- Container (Blog Section) -->
<div id="blog" class="container-fluid text-center bg-grey">
 
 
 <!--
  <h2>Blog</h2><br> 
  <div class="line-holder">
    <div class="the-line">
    </div>
  </div>-->
  <?php 
    /*  $post = new WP_Query(array( 
       'posts_per_page' => 3, 
       )); 
      while ( $post->have_posts() ) : 
      $post->the_post();*/
     ?>
     <!-- <div class="col-sm-4">
      <div class="thumbnail">
      <a class="active-link circle-img-width" href="<?php the_permalink();?>">
      <?php the_post_thumbnail('thumbnail',['class' => 'img-circle' ]);?> 
      </a>
      <br>-->
         <!--  <a class="btn  btn-primary" role="button" href="<?php //the_permalink();?>"><?php //the_title();?></a> 
        </div>
      
    </div>-->
    <?php //endwhile; ?>
 
<!-- Container (Business Section) -->
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
          <h3> <?php
	 // Checks and displays the retrieved value
		if( !empty( $posao_jedan_naslov ) ) {
			echo $posao_jedan_naslov;
		}
	  ?></h3>
        </div>
        <div class="panel-body">
          <p> 
			<?php
	 // Checks and displays the retrieved value
		if( !empty( $posao_jedan_tekst) ) {
			echo $posao_jedan_tekst;
		}
	  ?>
			</p>
        </div>
         
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h3><?php
	 // Checks and displays the retrieved value
		if( !empty( $posao_dva_naslov ) ) {
			echo $posao_dva_naslov;
		}
	  ?></h3>
        </div>
        <div class="panel-body">
          <p>
			<?php
	 // Checks and displays the retrieved value
		if( !empty( $posao_dva_tekst ) ) {
			echo $posao_dva_tekst;
		}
	  ?>
			</p>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h3> 
			<?php
	 // Checks and displays the retrieved value
		if( !empty( $posao_tri_naslov ) ) {
			echo $posao_tri_naslov;
		}
	  ?>
			</h3>
        </div>
        <div class="panel-body">
          <p>
			<?php
	 // Checks and displays the retrieved value
		if( !empty( $posao_tri_tekst ) ) {
			echo $posao_tri_tekst;
		}
	  ?>
			</p>
        </div>
      </div>            
    </div>    
  </div>

  <div class="row">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h3>
			<?php
	 // Checks and displays the retrieved value
		if( !empty( $posao_cetiri_naslov ) ) {
			echo $posao_cetiri_naslov;
		}
	  ?>
			</h3>
        </div>
        <div class="panel-body">
          <p>
			<?php
	 // Checks and displays the retrieved value
		if( !empty( $posao_cetiri_tekst ) ) {
			echo $posao_cetiri_tekst;
		}
	  ?>
			</p>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h3>
			<?php
	 // Checks and displays the retrieved value
		if( !empty( $posao_pet_naslov ) ) {
			echo $posao_pet_naslov;
		}
	  ?>
			</h3>
        </div>
        <div class="panel-body">
          <p>
			<?php
	 // Checks and displays the retrieved value
		if( !empty( $posao_pet_tekst ) ) {
			echo $posao_pet_tekst;
		}
	  ?>
			</p>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h3>
			<?php
	 // Checks and displays the retrieved value
		if( !empty( $posao_sest_naslov ) ) {
			echo $posao_sest_naslov;
		}
	  ?>
			</h3>
        </div>
        <div class="panel-body">
          <p>
			<?php
	 // Checks and displays the retrieved value
		if( !empty( $posao_sest_tekst ) ) {
			echo $posao_sest_tekst;
		}
	  ?>
			</p>
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