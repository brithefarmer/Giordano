<?php /* Smarty version 2.6.18, created on 2014-09-26 15:26:00
         compiled from Login.tpl */ ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "LoginHeader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<div class ="toplogo">
		<!-- <center><img src="Image/images.jpg" alt="logo"/> </center>-->
		<!-- <img align="absmiddle" src="test/logo/<?php echo $this->_tpl_vars['COMPANY_DETAILS']['logo']; ?>
" alt="logo"/>-->
		<!--<center><font style="font-family:Arial;font-weight:800;font-size:14px;" align="center"><a target="_blank" href="http://<?php echo $this->_tpl_vars['COMPANY_DETAILS']['website']; ?>
"><?php echo $this->_tpl_vars['COMPANY_DETAILS']['name']; ?>
</a></font></center>-->
		<br />
</div>
<br/>
<br/>
<br/>
<div class ="centerlog" style = "border:2px solid rgba(222, 215, 216, 0.45);padding:70px;box-shadow:10px 10px 5px #888888;">
	<table>
		<tr>
			<td style="padding-right:40px;">
			
				<img width= "200px" src="Image/imagex.jpg" alt="logo"/>
					<center><h3>Reward System</h3></center>
			</td>
			<td>
				<div class="loginForm">
					<form action="index.php" method="post" name="DetailView" id="form">
		
						<input type="hidden" name="module" value="Users" />
						<input type="hidden" name="action" value="Authenticate" />
						<input type="hidden" name="return_module" value="Users" />
						<input type="hidden" name="return_action" value="Login" />
						
						
						<div class="inputs">
							<br />
							<div class ="signlabel"></div>
							<br />
							<!--  <div class="label" >User Name</div> -->
							<div class="input"><input type="text" name="user_name" onfocus="cu(this,0);" onblur="cu(this,1);" value="username"/></div>
							<br />
							<!-- <div class="label">Password</div> -->
							<div class="input"><input type="password" name="user_password" onfocus="cp(this,0);" onblur="cp(this,1);" value="password"/></div>
							<br />
							
							<div class="button" align="right">
								<input type="image" id="submitButton" src="Image/button2.jpg" value="Sign In" />
							</div>
						</div>
					</form>
				</div>
			</td>
		</tr>
	
	</table>

</div>

<?php if ($this->_tpl_vars['LOGIN_ERROR'] != ''): ?>
<div class="errorMessage">
	<center><?php echo $this->_tpl_vars['LOGIN_ERROR']; ?>
</center>
</div>
<?php endif; ?>


<div class = "bottomlinks">
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "LoginFooter.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>