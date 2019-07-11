


<?php require('./assets/js/scripts.php') ?>

<br/><br/><br/>

<style>

.footer-distributed{
  background-color: #292c2f;
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
  box-sizing: border-box;
  width: 100%;
  text-align: left;
  font:  16px sans-serif;

  padding: 55px 50px;
  margin-top: 80px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
  display: inline-block;
  vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
  width: 40%;
}

/* The company logo */

.footer-distributed h3{
  color:  #ffffff;
  font: normal 36px 'Cookie', cursive;
  margin: 0;
}

.footer-distributed h3 span{
  color:  #5383d3;
  font: normal 36px 'Cookie', cursive;
}

/* Footer links */

.footer-distributed .footer-links{
  color:  #ffffff;
  margin: 20px 10px 12px;
  padding: 0;
}

@media screen and (max-width: 600px) {
  .footer-links {
    width: 100%;
    margin: 0px 0px 0px 0px!important;
  }
}

.footer-distributed .footer-links a{
  display:inline-block;
  line-height: 1.8;
  text-decoration: none;
  color:  inherit;
}

.footer-distributed .footer-company-name{
  color:  #8f9296;
  font-size: 14px;
  font-weight: normal;
  margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
  width: 35%;
}

.footer-distributed .footer-center i{
  background-color:  #33383b;
  color: #ffffff;
  font-size: 25px;
  width: 38px;
  height: 38px;
  border-radius: 50%;
  text-align: center;
  line-height: 42px;
  margin: 10px 15px;
  vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
  font-size: 17px;
  line-height: 38px;
}

.footer-distributed .footer-center p{
  display: inline-block;
  color: #ffffff;
  vertical-align: middle;
  margin:0;
}

.footer-distributed .footer-center p span{
  display:block;
  font-weight: normal;
  font-size:14px;
  line-height:2;
}

.footer-distributed .footer-center p a{
  color:  #5383d3;
  text-decoration: none;;
}


/* Footer Right */

.footer-distributed .footer-right{
  width: 20%;
}

.footer-distributed .footer-company-about{
  line-height: 20px;
  color:  #92999f;
  font-size: 13px;
  font-weight: normal;
  margin: 0;
}

.footer-distributed .footer-company-about span{
  display: block;
  color:  #ffffff;
  font-size: 14px;
  font-weight: bold;
  margin-bottom: 20px;
}

.footer-distributed .footer-icons{
  margin-top: 25px;
}

.footer-distributed .footer-icons a{
  display: inline-block;
  width: 35px;
  height: 35px;
  cursor: pointer;
  background-color:  #33383b;
  border-radius: 2px;

  font-size: 20px;
  color: #ffffff;
  text-align: center;
  line-height: 35px;

  margin-right: 3px;
  margin-bottom: 5px;
}

/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 880px) {

  .footer-distributed{
    font: bold 14px sans-serif;
  }

  .footer-distributed .footer-left,
  .footer-distributed .footer-center,
  .footer-distributed .footer-right{
    display: block;
    width: 100%;
    margin-bottom: 40px;
    text-align: center;
  }

  .footer-distributed .footer-center i{
    margin-left: 0;
  }

}




</style>


<!--     <div class="spanishtext animated fadeIn">
      <small>También podes escribirnos por Whatsapp al <b>+541168630882</b></small><br />
      <small>Encontranos en Facebook: <a href="">Experiencias en Patagonia</a></small><br />
      <small>Email: <b>experienciasenpatagonia@gmail.com</b></small><br/>
      <small>Instagram: <b>@experienciasenpatagonia</b></small><br/><br/>
      <small>Copyright © 2019 | Experiencias en Patagonia</small><br/>
    </div><br/>
    <div class="englishtext animated fadeIn">
      <small>Write us on whatsapp: <b>+541168630882</b></small><br />
      <small>Find us in Facebook: <a href="">Experiencias en Patagonia</a></small><br />
      <small>Email: <b>experienciasenpatagonia@gmail.com</b></small><br/>
      <small>Instagram: <b>@experienciasenpatagonia</b></small><br/><br/>
      <small>Copyright © 2019 | Experiencias en Patagonia</small><br/>
    </div><br/>
  <div class="textArrowFooter ">
    <a class="iconArrowFooter float-right" href="#">
      <i class="fas fa-arrow-up"></i>
    </a>
  </div> -->
<footer class="footer-distributed">

      <div class="footer-left">
<br>
        <h3>Experiencias En <span>Patagonia</span></h3>

        <div class="row">
          <div class="footer-links" >
          · <a href="#">Ea. La Maipú</a><br>
          · <a href="#">Glaciar Sur</a><br>
          · <a href="#">Patagonia Campera</a>
          </div>
          <div class="footer-links" >
          · <a href="#">Puesto Cagliero</a><br>
          · <a href="#">Ea. La Sofía</a><br>
          · <a href="#">Motogonia</a><br><br>
          </div>
        </div>

        <p class="footer-company-name">Copyright © 2019 | Experiencias en Patagonia</p>
      </div>

      <div class="footer-center">

        <div>
          <i class="fab fa-facebook-f"></i>
          <p>Experiencias en Patagonia</p>
        </div>

        <div>
          <i class="fab fa-whatsapp"></i>
          <p>+54 11 68630882</p>
        </div>

        <div>
          <i class="fab fa-instagram"></i>
          <p>Experiencias en Patagonia</p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p>experienciasenpatagonia@gmail.com</p>
        </div>
      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span class="spanishtext" style="font-weight: normal">
            En este sitio vas a poder encontrar todo acerca de las estancias y destinos mas lindos de la patagonia, animate y viví una experiencia única.
          </span>

          <span class="englishtext" style="font-weight: normal">
            In this site you will be able to find everything about the most beautiful stays and destinations in Patagonia, go ahead and livea unique experience. 

          </span>
          
        </p><br><br>
        <div class="textArrowFooter ">
          <a class="iconArrowFooter float-right" href="#">
            <i class="fas fa-arrow-up"></i>
          </a>
        </div>


      </div>

    </footer>

