<!DOCTYPE html>
<html>
<head>
<style>
	<?php include 'common/css/home.css'; ?>
		
	</style>
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


</head>
<body>
	
<div class="web">
  <div class="row" style="background-color: black;">
    <div class="col-md-6">
    <h1 style="font-family: 'Sriracha', cursive;">introspect</h1></div>
  
  <div class="col-md-6" style="padding-left: 80px;padding-top: 10px;">
  <a class="nava"  href="<?php echo base_url('index.php/welcome/index')?>" ><b>HOME</b></a>
  <a class="nava" href="<?php echo base_url('index.php/welcome/generic') ?>"><b>GENERIC</b></a>
  <a class="nava" href="<?php echo base_url('index.php/welcome/contact') ?>"s><b>CONTACT US</b></a></div>

  
</div></div>


<div class="mobile" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0.6px 20px 0 rgba(0,0,0,0.19); position: sticky; top: 0;z-index: 10;">
  <div class="container-fluid">
    <div class="row" style="background-color: white;">
      <div class="col-2" style="text-align: left;margin-left: 0px;font-size: x-large;background-color: white;border: none;">
      <i class="fa fa-bars" id="open" onclick="openNav()" style="color: black;margin-top: 35px;" ></i>
      <i class="fa fa-window-close" id="close" onclick="closeNav()" style="color: black;margin-top: 35px;display: none;"></i>
      </div>
         <div class="col-10">introspect</div>

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



<div class="row">
     <div class="col-md-8 offset-md-2 inset-md-2">
	<h3 style="color: red;font-size: 35px;margin-top: 40px;">GENERIC</h3>
	<p style="margin-top: 30px; font-size: 20px;">Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
	<img src="https://templated.co/items/demos/introspect/images/pic11.jpg" height="500px" style="margin-top: 30px;">
	<p style="margin-top: 30px;font-size: 20px;">Vis accumsan feugiat adipiscing nisl amet adipiscing accumsan blandit accumsan sapien blandit ac amet faucibus aliquet placerat commodo. Interdum ante aliquet commodo accumsan vis phasellus adipiscing. Ornare a in lacinia. Vestibulum accumsan ac metus massa tempor. Accumsan in lacinia ornare massa amet. Ac interdum ac non praesent. Cubilia lacinia interdum massa faucibus blandit nullam. Accumsan phasellus nunc integer. Accumsan euismod nunc adipiscing lacinia erat ut sit. Arcu amet. Id massa aliquet arcu accumsan lorem amet accumsan.</p>

<p style="font-size: 20px;">Amet nibh adipiscing adipiscing. Commodo ante vis placerat interdum massa massa primis. Tempus condimentum tempus non ac varius cubilia adipiscing placerat lorem turpis at. Aliquet lorem porttitor interdum. Amet lacus. Aliquam lobortis faucibus blandit ac phasellus. In amet magna non interdum volutpat porttitor metus a ante ac neque. Nisi turpis. Commodo col. Interdum adipiscing mollis ut aliquam id ante adipiscing commodo integer arcu amet Ac interdum ac non praesent. Cubilia lacinia interdum massa faucibus blandit nullam. Accumsan phasellus nunc integer. Accumsan euismod nunc adipiscing lacinia erat ut sit. Arcu amet. Id massa aliquet arcu accumsan lorem amet accumsan commodo odio cubilia ac eu interdum placerat placerat arcu commodo lobortis adipiscing semper ornare pellentesque.</p>

<p style="font-size: 20px;">Amet nibh adipiscing adipiscing. Commodo ante vis placerat interdum massa massa primis. Tempus condimentum tempus non ac varius cubilia adipiscing placerat lorem turpis at. Aliquet lorem porttitor interdum. Amet lacus. Aliquam lobortis faucibus blandit ac phasellus. In amet magna non interdum volutpat porttitor metus a ante ac neque. Nisi turpis. Commodo col. Interdum adipiscing mollis ut aliquam id ante adipiscing commodo integer arcu amet blandit adipiscing arcu ante.

</p>
</div>

</div>



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
        <input type="text" placeholder="Enter your name" class="form-control"><br>
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