<div></div>
<?php
$contentobj = cms_utils::get_current_content(); 
if($_COOKIE["womanIsChange"]){ 
  ?>
  <style type="text/css">
    .peknaZena{
      background: url("../../images/chick.png") repeat scroll 0 0 transparent;
      float: left;
      height: 385px;
      left: -53px;
      position: relative;
      top: -35px;
      width: 323px;
      z-index: 1;
    } 
    .skaredaZena{
      visibility:hidden;
    } 
  </style>
  <?php
  if($contentobj->Name() == "Kontakt"){
    ?>
    <style type="text/css">
    .getFancyButtonBox{
      width:97px;
    }
    </style>
    <script type="text/javascript">
      $(".getFancyButtonBox a").attr("href","referencie.html");  
    </script>
    <?php
  }else if($contentobj->Name() == "Contact"){
    ?>
    <style type="text/css">
    .getFancyButtonBox{
      width:100px;
    }
    </style>
    <script type="text/javascript">
      $(".getFancyButtonBox a").attr("href","en/references.html");  
    </script>
    <?php
  }
}else{
  ?>
  <style type="text/css">
    .peknaZena{
      visibility:hidden;
    }
    .skaredaZena{
      height: 386px;
    }
  </style>
  <?php
  if($contentobj->Name() == "Kontakt"){
    ?>
    <style type="text/css">
    .getFancyButtonBox{
      width:97px;
    }
    </style>
    <script type="text/javascript">
      $(".getFancyButtonBox a").attr("href","referencie.html");  
    </script>
    <?php
  }else if($contentobj->Name() == "Contact"){
    ?>
    <style type="text/css">
    .getFancyButtonBox{
      width:100px;
    }
    </style>
    <script type="text/javascript">
      $(".getFancyButtonBox a").attr("href","en/references.html");  
    </script>
    <?php 
  }else{
  ?>
    <script type="text/javascript">
      $(".getFancyButton").one("click",function(){
        $(".peknaZena").css("visibility","visible");
        $(".skaredaZena").css("height", + $(".anim").css("height"));
        hideSkaredaZena();
        $.post("ajax.php")
          .done(function() {   
          })
          .fail(function() { console.log("error"); }); 
      }); 
    </script>
    <?php
  }
} 
?>