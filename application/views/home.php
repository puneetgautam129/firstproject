<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <title>my website</title>

      <style>
         
         <?php include 'common/css/home.css'; ?>
        
     
      </style>
      <!--links-->
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
      <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap&family=Pacifico&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
      <link href="https://fonts.googleapis.com/css2?family=Cormorant+SC&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Bilbo+Swash+Caps&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
      <!--links end-->

      <!--script-->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
      <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
      <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js" integrity="sha512-ZKNVEa7gi0Dz4Rq9jXcySgcPiK+5f01CqW+ZoKLLKr9VMXuCsw3RjWiv8ZpIOa0hxO79np7Ec8DDWALM0bDOaQ==" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js" integrity="sha512-ZKNVEa7gi0Dz4Rq9jXcySgcPiK+5f01CqW+ZoKLLKr9VMXuCsw3RjWiv8ZpIOa0hxO79np7Ec8DDWALM0bDOaQ==" crossorigin="anonymous"></script>

      <!--script end-->
      
</head>
<body>




<div class="web">
  <div class="container-fluid">
  
  <div class="row" style="background-color: black;height: 80px;box-shadow:0px 10px 8px #888888;">
    <div class="col-md-6">
    <h1 style="font-family: 'Sriracha', cursive;margin-top: 20px;">introspect</h1></div>
  
  <div class="col-md-6" style="margin-top: 35px;">
  <a class="nava"  href="<?php echo base_url('index.php/welcome/index')?>" ><b>HOME</b></a>
  <a class="nava" href="<?php echo base_url('index.php/welcome/generic') ?>"><b>GENERIC</b></a>
  <a class="nava" href="<?php echo base_url('index.php/welcome/contact') ?>"s><b>CONTACT US</b></a></div>

 </div> 
</div></div>

<div class="mobile" style="box-shadow:0px 10px 8px red ; position: sticky; top: 0;z-index: 10;">
  <div class="container-fluid">
    <div class="row" style="background-color: white;">
      <div class="col-2" style="text-align: left;margin-left: 0px;font-size: x-large;background-color: white;border: none;">
      <i class="fa fa-bars" id="open" onclick="openNav()" style="color: red;margin-top: 20px;" ></i>
      <i class="fa fa-window-close" id="close" onclick="closeNav()" style="color: black;margin-top: 35px;display: none;"></i>
      </div>
         <div class="col-10" style="font-family: 'Sriracha', cursive;margin-top: 8px;color: red;font-size: 30px;">introspect</div>

      <div id="myNav" class="overlay">
        <div class="overlay-content">
              <a  href="<?php echo base_url('index.php/welcome/index')?>" ><b>HOME</b></a>
        <a  href="<?php echo base_url('index.php/welcome/generic') ?>"><b>GENERIC</b></a>
        <a href="<?php echo base_url('index.php/welcome/contact') ?>"><b>CONTACT US</b></a>
          <a  href="#" onclick="closeNav()" ><b>HOME</b></a>
          <a  href="#" onclick="closeNav()"><b>GENERIC</b></a>
          <a href="#" onclick="closeNav()"><b>CONTACT US</b></a>
        </div>
        </div>


     </div><!--row-->
    
   </div><!--container-->

  </div><!--mpbile-->

  <script type="text/javascript">
    function openNav() {
      document.getElementById("myNav").style.width = "50%";
        document.getElementById("open").style.display = "none";
         document.getElementById("close").style.display = "block";
    }
    
       function closeNav() {
      document.getElementById("myNav").style.width = "0%";
       
        document.getElementById("open").style.display = "block";
         document.getElementById("close").style.display = "none";
    }
  </script>


<!--<div class="container-fluid">

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://wallpapercave.com/wp/wp2646303.jpg" class="d-block w-100" height="500px;">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="cont">INTROSPECT: A FREE + FULLY RESPONSIVE</h5>
        <button class="btn5">GET STARTED</button>
      </div>
    </div>
   
</div>-->


<!--<div class="img1"></div>
<div class="section"  >

 
  <h2 >INTROSPECT: A FREE + FULLY RESPONSIVE</h2><br>
  <p><button class="btn btn-info" style="background-color: transparent;border-color: white;" >GET STARTED</button></p>

</div>-->
  
  
<div class="coverimage"></div>
<div class="content">
  <h2>Get Started With Us!</h2>
  <button class="btn btn-info" style="border:1px solid cyan">Click Here!</button>
</div>

<div class="row" style="margin-left: 0px;margin-right: 0px;" >
  <div class="col-md-10 offset-2 ">
  <h3 class="h3one">MAGNA ETIAM LOREM</h3>
  <p class="pone">Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. Integer adipiscin sem. Nullam quis massa sit amet nibh viverra malesuada. Nunc sem lacus, accumsan quis, faucibus non, congue vel, arcu, erisque hendrerit tellus. Integer sagittis. Vivamus a mauris eget arcu gravida tristique. Nunc iaculis mi in ante.</p>
  <button class="btn3"><b>LEARN MORE</b></button>
</div>
</div><!--rowend-->




<div class="row" style="margin-top: 100px;padding: 20px;margin-left: 0px;margin-right: 0px;">
  
  <div class="col-md-6" style="background-color: #F0F0F0; ">
    <div class="card" style="padding: 20px;background-color: transparent;border:none">
    <h4 style="color: red;text-align: center;padding-top: 20px;margin-top: 50px;">PELLENTESQUE ADIPIS</h4>
    <img class="cardimg"  src="https://templated.co/items/demos/introspect/images/pic01.jpg">
    <p class="ptwo">Cumsan mollis eros. Pellentesque a diam sit amet mi magna ullamcorper vehicula. Integer adipiscin sem. Nullam quis massa sit amet lorem ipsum feugiat tempus</p>
    </div>
     </div><!--col1end-->
  
    
    <div class="col-md-6 " style="background-color: #F8F8F8;">
    <div class="card" style="padding: 20px;background-color: transparent;border:none">
    <h4 style="color: red;text-align: center;padding-top: 20px;margin-top: 50px;">MORBI INTERDUM MOL</h4>
    <img class="cardimg"  src="https://templated.co/items/demos/introspect/images/pic02.jpg">
    
  <p class="ptwo">Cumsan mollis eros. Pellentesque a diam sit amet mi magna ullamcorper vehicula. Integer adipiscin sem. Nullam quis massa sit amet lorem ipsum feugiat tempus.</p>
  </div>
    </div><!--col2end-->

  
</div><!--rowend-->





<div class="row" style="padding:20px;margin-right: 0px;margin-left: 0px;" >

  <div class="col-md-4" style="">
  
   <p style="text-align: center;"><i class="fa fa-laptop" style="font-size: 2rem;" ></i></p>
    <h4 style="color: red; margin-top: 30px;text-align: center;">TEMPUS FEUGIAT</h4>

    <p style="margin-top: 20px;text-align: center;">Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna lorem ullamcorper laoreet, lectus arcu.</p>
<p style="text-align: center;"><button class="btn3"><b>LEARN MORE</b></button></p>
   
</div>   

  
  <div class="col-md-4" >
   
  <p style="text-align: center;"><i class="fa fa-diamond" style="font-size: 2rem"></i></p>
    <h4 style="color: red; margin-top: 30px;text-align: center;">ALIQUAM NULLA</h4>
    
    <p style="margin-top: 20px;text-align: center;">Ut convallis, sem sit amet interdum consectetuer, odio augue aliquam leo, nec dapibus tortor nibh sed</p>
<p style="text-align: center;"><button class="btn3"><b>LEARN MORE</b></button></p>    
    </div>
  


  <div class="col-md-4">
<p style="text-align: center;"><i class="fa fa-laptop" style="font-size: 2rem"></i>  </p> 
 <h4 style="color: red; margin-top: 30px;text-align: center;">SED MAGNA</h4>
    
    <p style="margin-top: 20px;text-align: center;">Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula.</p>
<p style="text-align: center;"><button class="btn3"><b>LEARN MORE</b></button> </p>   
    </div>
  

</div><!--rowend-->
</div><!--whole container-->



<div class="row" style="background-color:  #ff7f7f;margin-left: 0px;margin-right: 0px;">

  <div class="col-md-5 offset-md-1">

    <h2 style="color: white;">LETS START AND EXPLORE</h2>
    <h3 style="font-family: 'Sriracha', cursive;color: white;">intospect</h3>
    <button class="btn btn-info" style="color: white;margin-top: 40px;background-color: transparent;border-color: white;" onclick="one()">SIGN IN</button>
    <button class="btn btn-info" style="color: white;margin-top: 40px;background-color: transparent;border-color: white;"   onclick="two()">Create new form</button>
    

    </div><!--col-5 offset-1-->

  <div class="col-md-4 offset-md-1">
    <div id="form"  style="display: none;">
      <h2 style="color: white;">CREATE YOUR OWN ACCOUNT</h2>
      <div class="form-group">
        <label for="fname">Contact Person Name</label><br>
        <input type="date" placeholder="Enter your name" class="form-control"><br>
        <label for="lname" >Contact Person mobile</label><br>
        <input type="text"   placeholder="Enter your mobile no." name="surname" class="form-control"><br>
        
        <button class="btn btn-info" >submit</button>
      </div>
    </div>

    <div id="login">
      <h2 style="color: white;">SIGN IN</h2>
      <div class="form-group">
        <form id="submit">
        <label for="fname">Mobile</label><br>
        <input type="text"  placeholder="Enter mobile no." name="mobile" class="form-control"><br>
        <label for="lname">password</label><br>
        <input  type="password"  placeholder="Enter your password" name="password" class="form-control"><br>
        <button type="submit" class="btn btn-info" >signup <i id = 'ladda3' class="fa fa-spinner fa-spin" style="display: none;"></i></button>
      </form>
      </div>
    </div>
    


  </div><!--col6-->
  
</div><!--rowebd-->
  
 



</body>
 <script type="text/javascript" >
function one() {
 
  document.getElementById("form").style.display ="none";
  document.getElementById("login").style.display ="block";

}

function two() {
 
  document.getElementById("login").style.display ="none";
  document.getElementById("form").style.display ="block";
}


  $(document).ready(function(){
    $('#submit').on('submit',function(e){
         e.preventDefault();
         //alert('check1');
         // if ($("#input_file").val()== ' ') {
         //  alert('please select the valid image');
         // }
         // else{
       $("#ladda3").show();
         

        
          $.ajax({
                url:"<?php echo base_url('index.php/Welcome/addindb');?>",
                method:'POST',
                data:new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                success:function(data){
                  
                  // alert(data);
                  
                 
                  
                  $("#ladda3").hide();
                
                  // alert("put image in div");
                  // $("#up_image").empty();
                  // $("#up_image").html(data);               
                  window.location.reload();
                }
          });
         // }
    });
        
});
 




</script>

</html>