<html>
    <head> 
        
        <?= $this->include("layout/assets");?> 
 </head> 
 <body>
 <?= $this->include("layout/navbar");?>
 <!--Dynamický obsah -->
 <div class="container">
    
 <?= $this->renderSection("content");?> 
 <body>
</html>