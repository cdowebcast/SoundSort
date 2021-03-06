
<div class="container" id="main_container">
	<div class="row">
		<div class="span6 offset2">
			<div class="alert alert-success hidden">
				Get ready to discover new music
			</div>
			<div id="fb-root"></div>
			<script>
				window.fbAsyncInit = function() {
					FB.init({
						appId      : '244647508989780', // App ID
						channelUrl : '//WWW.soundsort.COM/channel.html', // Channel File
						status     : true, // check login status
						cookie     : true, // enable cookies to allow the server to access the session
						xfbml      : true  // parse XFBML
					});
					// Additional initialization code here
				};
				// Load the SDK Asynchronously
				(function(d){
					var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
					if (d.getElementById(id)) {return;}
					js = d.createElement('script'); js.id = id; js.async = true;
					js.src = "//connect.facebook.net/en_US/all.js";
					ref.parentNode.insertBefore(js, ref);
				}(document));
			</script>
			<form class="form-horizontal" id="registerHere" method='post' action='/register/confirm'>
				<fieldset>
					<legend>Registration</legend>
					<div class="control-group">
						<label class="control-label" for="input01">Username</label>
						<div class="controls">
							<input type="text" class="input-large" id="user_name" name="user_name" rel="popover" data-original-title="Username">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="input01">Email</label>
						<div class="controls">
							<input type="text" class="input-large" id="user_email" name="user_email" rel="popover" data-content="What's your email address?" data-original-title="Email">
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="input01">Password</label>
						<div class="controls">
							<input type="password" class="input-large" id="pwd" name="pwd" rel="popover" data-content="6 characters or more! Be tricky" data-original-title="Password" >
							<div id="password_errors" class="hidden"></div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="input01">Confirm Password</label>
						<div class="controls">
							<input type="password" class="input-large" id="cpwd" name="cpwd" rel="popover" data-content="Re-enter your password for confirmation." data-original-title="Re-Password" >
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="input01"></label>
						<div class="controls">
							<button id="register" class="btn btn-success" rel="tooltip" title="first tooltip">Create My Account</button>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript" src="/js/register.js"></script>