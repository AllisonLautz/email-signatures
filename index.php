<?php ?>

<!DOCTYPE html>
<html>
<head>
	<title>Custom Plugins | Signatures</title>
	<link rel="stylesheet" type="text/css" href="styles/screen.min.css">
</head>
<body>
	<section class="intro">
		<h1>Email Signatures. Hmm.</h1>
		<p>Simply fill out the form below with your Walker Sands company division and contact information. Your custom email signature will automatically populate underneath; select and copy the signature in the white box.</p>
		<p><strong>Gmail Users:</strong> Select the gear icon at the top-right corner of your Gmail inbox. Click <em>Settings</em> and paste your signature in the <em>Signature</em> box toward the bottom of the page. Save changes.</p>
		<p><strong>Outlook Users:</strong> Open a new message. On the Message tab, click <em> Signature &gt;&gt; Signatures</em>. Click <em>New</em> and give your new signature a name. In the <em>Edit Signature</em> text box, paste your signature and select <em>OK</em>.</p>
	</section>

	<section class="form">
		<form>
			
			<!-- <div class="row">
				<label>First Name:</label>
				<input class="name first" name="first" type="text" placeholder="First">
			</div>
			<div class="row">
				<label>Last Name:</label>
				<input class="name last" name="last" type="text" placeholder="Last">
			</div>
			<div class="row">
				<label>Job Title:</label>
				<input class="title" name="jobtitle" type="text" placeholder="Job Title">
			</div>
			<div class="row">
				<label>Email Address:</label>
				<input class="email" name="email" type="text" value="Email.Address">
				<label>@walkersands.com</label>
			</div>
			<div class="row">
				<label>Work Phone:</label>
				<input type="text" class="work" name="work" placeholder="xxx-xxx-xxxx">
			</div>
			<div class="row">
				<label>Mobile Phone: (optional)</label>
				<input type="text" class="mobile" name="mobile" placeholder="xxx-xxx-xxxx">
			</div> -->

			<div class="row">
				<label>First Name</label>
				<input name="first" type="text" placeholder="First Name">
			</div>
			<div class="row">
				<label>Last Name</label>
				<input name="last" type="text" placeholder="Last Name">
			</div>
			<div class="row">
				<label>Job Title</label>
				<input name="job" type="text" placeholder="Job Title">
			</div>
			<div class="row">
				<label>Work Phone <small>(optional)</small></label>
				<input class="optional" name="work" type="text" placeholder="xxx xxx xxxx">
				
			</div>
			<div class="row">
				<label>Mobile Phone <small>(optional)</small></label>
				<input class="optional" name="mobile" type="text" placeholder="xxx xxx xxxx">
			</div>


		</form>
	</section>


	<section class="output">
		<table>
			<tr>
				<td><a href="https://www.walkersands.com" target="_blank"><img src="imgs/ws-signature.png" alt="Walker Sands Communications Logo" border="0"></a></td>
				<td style="width:10px;">&nbsp;</td>
				<td>
					<p>
						<strong>
							<span class="first">First</span> 
							<span class="last">Last</span> &mdash; 
							<em><span class="job">Job Title</span></em>
						</strong>
						<br>Walker Sands Communications
						<br>o. <a href="tel:xxx-xxx-xxxx" target="_blank"><span class="work">xxx-xxx-xxxx</span></a> 
						<span id="hidden" class="hide"><em> / </em>m. <a href="tel:xxx-xxx-xxxx" target="_blank"><span class="mobile">xxx-xxx-xxxx</span></a></span>
						<em>/</em> <a href="https://www.walkersands.com" target="_blank">walkersands.com</a>
					</p>
					<p class="tagline">Public Relations / Digital Marketing / Content Marketing / Strategy & Branding</p>
				</td>
			</tr>
		</table>


	</section>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="min/script.min.js"></script>

</body>
</html>