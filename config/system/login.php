<?php session_start(); if(@$_SESSION['keepsession']){ header('Location: master.php?page=token.php'); } ?>
<script>
var LANG_LOGIN_ERRCODEAUTH0 = "<?php print LANG_LOGIN_ERRCODEAUTH0; ?>";
var LANG_LOGIN_ERRCODEAUTH1 = "<?php print LANG_LOGIN_ERRCODEAUTH1; ?>";
var LANG_LOGIN_ERRCODECONN0 = "<?php print LANG_LOGIN_ERRCODECONN0; ?>";
var LANG_LOGIN_ERRCODEAUTH2 = "<?php print LANG_LOGIN_ERRCODEAUTH2; ?>";
var LANG_TOKEN_E0 = "<?php print LANG_TOKEN_E0; ?>";
var LANG_TOKEN_E1 = "<?php print LANG_TOKEN_E1; ?>";
</script>
<input type="hidden" name="redirectFail" value="system/master.php?page=login.php&auth=true" />
<input type="hidden" name="redirectPass" value="system/master.php?page=token.php" />
<div class="CONTENT">     
	<div class="BODY_CONTAINER">
    	<?php if(MAINTENANCE_MODE=='true'){ ?>
    		<div class="ui-state-highlight" style="padding: 0 .7em;">
    		<p><span class="ui-icon ui-icon-info" style="float: left; margin-right: .3em;"></span>
    		<strong>Lo sentimos!</strong> <?php print LANG_LOGIN_MAINTENANCEMSG; ?></p>
    		</div>
    	<?php } ?>		
        <div class="_FRAME" title="">	
             <div id="_DIVLOGINFRM" style="float: right;width: 399px;">
                <div style="text-align:center;">
                <p><img src="../../<?php print IMG_DIR.LOGIN_TOP_IMAGE; ?>" style="margin-botton:10px;"></p>
                <br/>
                </div>
                <div class="_FRAME" title="" style="margin-top: 10px;"><label class="CONTENT_TITLE"><?php echo LANG_LOGIN_TITLE; ?></label>
	            	 	
                        <label class="INPUT_LABEL"><?php echo LANG_LOGIN_USER; ?>:</label>
                        <div class="_INPUT_TEXT">
                        <input id="username" name="username" autocapitalize="off" placeholder="<?php echo LANG_LOGIN_PLCHOLDER_USERNAME; ?>" style="width:170px" />
	                    </div><br>
	                    
                        <label class="INPUT_LABEL"><?php echo LANG_LOGIN_PASSWORD; ?>:</label>
                        <div class="_INPUT_TEXT">
                        <input type="password" id="password" autocapitalize="off" name="password" placeholder="<?php echo LANG_LOGIN_PLCHOLDER_PASSWORD; ?>" style="width:170px" />
                        </div>

                        <div style=" margin-top: 10px; ">
                             <div class="CHECKBOX">							 	  
								  <input type="checkbox" id="keepsession" name="keepsession" />
								  <label for="keepsession"><?php echo LANG_LOGIN_KEEPSESSION; ?></label>						  
							 </div> 
                        </div>                

                </div>
					  <p><input type="submit" ID="SUBMIT_F1" class="_INPUT_BUTTON" value="<?php echo LANG_LOGIN_BT1; ?>" style="float:right; margin-right:22px" /></p>
             </div>
                                
       <div id="_DIVIMG1" style="width:300px; height:385px; float:left; background-repeat:no-repeat;  background-image:url('../../<?php print IMG_DIR.LOGIN_LEFT_IMAGE; ?>');float: left;">
		 <div style="width:100%; height:250px;"></div>		
		     <div class="_BKGSTYLE1" style="width:100%; height:50px; padding-top:10px;">
                  <div class="_FRAME _BKGSTYLE1" style="margin-top: 10px;" title="">
                      <label class="CONTENT_TITLE"><?php echo LANG_LOGIN_ACCT1; ?></label><?php echo LANG_LOGIN_ACCT2; ?>
	    	          <br />
                      <input type="button" ID="REQUESTACC" style="float:right;" class="_INPUT_BUTTON" onclick="" value="<?php echo LANG_LOGIN_ACCT3; ?>" />
		          </div>		
		    </div>
       	</div>
   	  </div>            
   </div>        
</div>
