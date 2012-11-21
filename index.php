<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>My Contact Form</title>
</head>
<body>
    <header class="main">
        <h1>My Contact Form</h1>
    </header>
    <section class="main">
        
        <?php
       $name = $_POST['name'];
       $email = $_POST['email'];
       $message = $_POST['message'];
       $from = 'From: My Contact Form';
       $to = 'info@srcsync.com';
       $subject = 'Online Inquiry';

       $body = "From: $name\n E-Mail: $email\n Message:\n $message";

       if ($_POST['submit']) {
           if (mail ($to, $subject, $body, $from)) {
           echo '<p>Message Sent Successfully!</p>';
           } else {
           echo '<p>Ah! Try again, please?</p>';
           }
       	  }
    	?>

        <form method="post" action="index.php">						

							<fieldset>
								<div class="clearfix">
									<label for="name"><span>Name:</span></label>
									<div class="input">
										<input tabindex="1" size="18" id="name" name="name" type="text" value="">
									</div>
								</div>
								<!--Hide Company Name--
								<div class="clearfix">
									<label for="name"><span>Company Name:</span></label>
									<div class="input">
										<input tabindex="1" size="18" id="name" name="company" type="text" value="">
									</div>
								</div>
								<!--Hide Company Name-->
								<!--Hide Phone
								<div class="clearfix">
									<label for="name"><span>Phone:</span></label>
									<div class="input">
										<input tabindex="1" size="18" id="name" name="phone" type="text" value="">
									</div>
								</div>
								<!--Hide Phone-->
								<div class="clearfix">
									<label for="email"><span>Email:</span></label>
									<div class="input">
										<input tabindex="2" size="25" id="email" name="email" type="text" value="" class="input-xlarge">
									</div>
								</div>

								<div class="clearfix">
									<label for="message"><span>Message:</span></label>
									<div class="input">
										<textarea tabindex="3" class="input-xlarge" id="message" name="body" rows="7"></textarea>
									</div>
								</div>

								<div class="actions">
									<button tabindex="3" type="submit" class="btn btn-succes btn-large">Send message</button>
								</div>
							</fieldset>

		</form>

    </section>
</body>
</html>