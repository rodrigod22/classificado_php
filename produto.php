<?php require 'pages/header.php';
 
   
        require 'classes/Anuncios.php';
        require 'classes/Usuarios.php';
        $a = new Anuncios();
        $u = new Usuarios();
        
        if(isset($_GET['id']) && !empty($_GET['id'])){
            
             $id = addslashes($_GET['id']);
        }else{  ?>
        
        <script type="text/javascript"> window.location.href='index.php';</script>    
        <?php
        exit();
        }
        
        $info = $a->getAnuncio($id)
        
      ?> 
<div class="container-fluid">
           
              
            <div class="row">
                
                <div class="col-sm-5">
                    <div class="carousel slide" data-ride="carousel" id="meuCarousel">
                        <div class="carousel-inner" role='listbox'>
                            <?php foreach ($info['fotos'] as $chave=> $foto){ ?>
                            <div class="carousel-item  <?php echo ($chave =='0')?'active':''?>">
                                <img src="assets/images/anuncios/<?php echo $foto['url']; ?>"/>
                           
                            </div>
                          <?php
                            }
                          ?>
                        </div> 
                        <a class="carousel-control-prev" href="#meuCarousel"  data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        
                         <a class="carousel-control-next " href="#meuCarousel"  data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                    
                    
                </div>
                
                <div class="col-sm-7">
                    <h1><?php echo $info['titulo'];?></h1>
                    <h4><?php echo utf8_encode($info['categoria']);?></h4>
                    <p><?php echo $info['descricao'];?></p>
                    <br><br>
                    <h3>R$ <?php echo number_format($info['valor'],2); ?></h3>
                    <h4><?php echo $info['telefone'];?></h4>
                              
                    
                </div>
            </div>            
        
</div>
<?php require 'pages/footer.php';?>

