<?php
/**
 * Template Design by Commplot, http://www.commplot.nl
 * 
 * Commplot
 * Grootzeil 11
 * 3891 KH Zeewolde (the Netherlands)
 * Phone: +31 (0)36 523 60 24
 * Email: info@commplot.nl
 * 
 * @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

defined('_JEXEC') or die('Restricted access');
?>
<?php echo '<?xml version="1.0" encoding="utf-8"?'.'>'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
<jdoc:include type="head" />
<link rel="stylesheet" href="templates/_system/css/general.css" type="text/css" />
<link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
<link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/joomla.css" type="text/css" />

<meta name="google-site-verification" content="C1-8Am2_TGsiOJjg40lsl4wFi4hsaeLssG-Rm_ywvEY" />

<!--[if lte IE 6]>
<link href="templates/<?php echo $this->template ?>/css/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->

<!--[if lte IE 7]>
<link href="css/ie7.css" rel="stylesheet" type="text/css" />
<![endif]-->

</head>
<body>

<!--START CONTAINER-->
    <div id="container">


		<!--START SEARCHBOX-->
        <div id="searchBox">
        	<jdoc:include type="modules" name="search" style="searchBox" />
		</div>
		<!--END SEARCHBOX-->  
        
        
		<!--START LOGO-->
        <div id="logo">
        <h1>
        <a href="index.php"><img src="templates/delamine-corporate-sub/images/delamineLogo.png" height="50" width="210" alt="Delamine" /></a>
        </h1>

		<!---->
        </div>
		<!--END LOGO-->   
        
        		<!--START MAINMENU-->
                <div id="mainMenu">
                	<jdoc:include type="modules" name="navigatie" style="mainMenu" />
                <!---->
                </div>
        		<!--END MAINMENU-->
                
        		<!--START HEADER-->
                <div id="header">
                	<jdoc:include type="modules" name="sfeer2" style="headerPortal" />
              <!--  <img src="templates/delamine-corporate-sub/images/headerImageSmall01.jpg" height="200" width="1000" /> -->
                </div>
				<!--END HEADER-->
                
                
        		<!--START COL CONTAINER-->
                <div id="colContainer">
                
        			<!--START RIGHT COLUMN-->
                    
                    <div id="rightCol">
                    	

        			<!-- START RIGHT COLUMN BOX -->
					
                    	<div class="rightColBox">
                        <jdoc:include type="modules" name="right" style="xhtml" />

                        </div>
        			<!--END RIGHT COLUMN BOX-->
                    	


					<!---->
        			 </div>
					<!--END RIGHT COLUMN-->


        			<!--START LEFT MENU-->
                    <div id="leftColMenu">
                    	<jdoc:include type="modules" name="left" style="xhtml" />
                    
					<!---->
        			 </div>
					<!--END LEFT MENU-->

                
			<!--START MIDDLE COLUMN-->
            <div id="middleCol">
            
        			<!--START CONTENT-->
                    <div id="content">


        			<!--START BREADCRUMB-->
                    <div id="breadcrumb">
                   <jdoc:include type="modules" name="breadcrumbs" style="xhtml" />
                    </div>
        			<!--END BREADCRUMB-->
      	
		
					<!-- START CONTENT -->
					<jdoc:include type="component" /> 
				   		
						<!-- START BOTTOM MODULES -->
				   								<div class="user1">
							<jdoc:include type="modules" name="user1" style="xhtml" />	
							</div>
					
							<div class="user2">
							<jdoc:include type="modules" name="user2" style="xhtml" />	
							</div>
										     
                    <!---->
						
                    </div>
        			<!--END CONTENT-->
    
	
	                
        			<!--START RELATED ITEMS-->
					<!--
                    
                    <div class="titleBlock">Related stories</div>
                    
                    <div class="relatedItemBlock">
                    		<div class="relatedItemBlockImage">
                        	<img src="templates/delamine-corporate-sub/images/tumb7.jpg" />                        	</div>
                            
                            <div class="relatedItemBlockContent">
                            <a href="#">
                            <h2>Epoxy curing agents</h2>
                            <p>Delamine produces a full range of Ethylene amines (lower and higher homologues) used in a wide variety of industries,</p></a>
                            </div>
                    </div>

                    <div class="relatedItemBlock">
                    		<div class="relatedItemBlockImage">
                        	<img src="templates/delamine-corporate-sub/images/tumb5.jpg" />                        	</div>
                            
                            <div class="relatedItemBlockContent">
                            <a href="#">
                            <h2>Epoxy curing agents</h2>
                            <p>Delamine produces a full range of Ethylene amines (lower and higher homologues) used in a wide variety of industries,</p></a>
                            </div>
                    </div>

                    <div class="relatedItemBlock">
                    		<div class="relatedItemBlockImage">
                        	<img src="templates/delamine-corporate-sub/images/tumb6.jpg" />                        	</div>
                            
                            <div class="relatedItemBlockContent">
                            <a href="#">
                            <h2>Epoxy curing agents</h2>
                            <p>Delamine produces a full range of Ethylene amines (lower and higher homologues) used in a wide variety of industries,</p></a>
                            </div>
                   
                   </div>
					 -->
       			<!--END RELATED ITEMS-->
                 
            <!---->        
            </div>
			<!--END MIDDLE COLUMN-->
            
        <!---->        
        </div>
		<!--END COL CONTAINER-->
        
  <div class="spacer"></div>      
        
				<!--START FOOTER-->
                
                <div id="footer"> 
                
                	<ul>
                    	<li class="firstCol">
                        	<h2>contact</h2>
                        </li>
                        
                        
                          <li>
                        	<dl>
                            <dt>Head office	</dt>
                            <dd>P.O. Box 473</dd>
                            <dd>NL-3800 AL Amersfoort</dd>
                            <dd>The Netherlands</dd>
                            <dd>&nbsp;</dd>
							<dd>t. +31 33 422 46 00</dd>
                            <dd>f. +31 33 422 46 19</dd>
                            <dd><a href="http://www.delamine.com/contact">Mail to Delamine</a></dd>
							<dd>&nbsp;</dd>
							<dt>Customer Service</dt>
								<dd><a href="http://www.delamine.com/contact/customer-service-department">Mail to Customer Service</a></dd>
                            </dl>
                        </li>
                        
                        
                        <li>
                        	<dl>
                            <dt>Sales</dt>
							<dd><a href="http://www.delamine.com/contact/sales-department">Mail to Sales Department</a></dd>
							<dd>&nbsp;</dd>
                            <dt>Technical Support</dt>
							<dd><a href="http://www.delamine.com/contact/technical-support-and-regulatory-affairs">Mail to Technical Support</a></dd>
							<dd>&nbsp;</dd>
                            <dt>Purchasing Department</dt>
							<dd><a href="http://www.delamine.com/contact/purchasing-department">Mail to Purchasing Department</a></dd>
							</dl>
                        </li>
                        
                        
                        <li>
                        	<dl>
                            <dt>Visit us</dt>
                            <dd>Barchman Wuytierslaan 10</dd>
                            <dd>3818 LH Amersfoort</dd>
							<dd>The Netherlands</dd>
			    <dd>&nbsp;</dd>
			    <dd><a href="http://www.delamine.com/road-map">Road Map</a></dd></dl>
                                </dl>
                        </li>
                        
                    </ul>               	
                 
                 <div class="spacer"></div>      

                <!---->    
                </div>
        		<!--END FOOTER-->
            


</div>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-6906235-4");
pageTracker._trackPageview();
} catch(err) {}</script>

</body>
</html>