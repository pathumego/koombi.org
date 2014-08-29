    	<div id="header" class="iHeader">
            
            <div id="mainHeader" class="iMainHeader iContent">
            
            	<h1>DASHBOARD</h1>
            
            </div> <!--/mainHeader-->
            
            <div id="secHeader" class="iSecHeader iContent">
            
            	<h2><?php print APP_NAME; ?></h2>
            
            </div> <!--/secHeader-->
            
		</div> <!--/header-->
                
        <div id="mainContainer" class="iMainContainer">
            
            <div id="main" class="iMain">
            
            	<div class="iContent">
                
                	<div id="breadcrumb" class="iBreadcrumb">
                    
                    	<ul>
                        	<li onclick="openPage(this)" data-slug="home" data-route="<?php print site_url('/admin'); ?>">home</li>
                        </ul>
                    
                    </div> <!--/breadcrumb-->
                    
                    <div id="iPage">

                        <ul class="iHomeTiles">
                        
                        	<li onclick="openPage(this)" 
                            	data-slug="tile1" 
                            	data-route="test.php">
            						<center><img src="<?php print site_url('/images/sample-tile.png'); ?>"></center>
                					<h4>Tile Name</h4>
                					<p>Tile Description</p>
            				</li>
                            
                            <li onclick="openPage(this)" 
                            	data-slug="tile1" 
                            	data-route="test.php">
            						<center><img src="<?php print site_url('/images/sample-tile.png'); ?>"></center>
                					<h4>Tile Name</h4>
                					<p>Tile Description</p>
            				</li>
                            
                            <li onclick="openPage(this)" 
                            	data-slug="tile1" 
                            	data-route="test.php">
            						<center><img src="<?php print site_url('/images/sample-tile.png'); ?>"></center>
                					<h4>Tile Name</h4>
                					<p>Tile Description</p>
            				</li>
                            
                            <li onclick="openPage(this)" 
                            	data-slug="tile1" 
                            	data-route="test.php">
            						<center><img src="<?php print site_url('/images/sample-tile.png'); ?>"></center>
                					<h4>Tile Name</h4>
                					<p>Tile Description</p>
            				</li>
                            
                            <li onclick="openPage(this)" 
                            	data-slug="tile1" 
                            	data-route="test.php">
            						<center><img src="<?php print site_url('/images/sample-tile.png'); ?>"></center>
                					<h4>Tile Name</h4>
                					<p>Tile Description</p>
            				</li>
                            
                            <li onclick="openPage(this)" 
                            	data-slug="tile1" 
                            	data-route="test.php">
            						<center><img src="<?php print site_url('/images/sample-tile.png'); ?>"></center>
                					<h4>Tile Name</h4>
                					<p>Tile Description</p>
            				</li>
            
                		</ul>
                        
                        <div class="clr"></div>                                        	
                    </div> <!--/page-->
                    
                </div> <!--/.iContent-->
            
            </div> <!--/main-->
            
            <div id="right" class="iRight">
            
            </div> <!--/right-->
            
            <div class="clr"></div>
        
        </div> <!--/mainContainer-->
        
        <div id="footer" class="iFooter iContent">
        
        	<p>&copy; <?php print APP_NAME; ?> &bull; 2014 &bull; Powered by iDashboard v2.1</p>
        
        </div> <!--/footer-->