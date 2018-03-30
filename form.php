<?php include('form_process.php'); ?>
<link rel="stylesheet" href="css/style.css" type="text/css">
<div class="container">
    <form id="contact" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <h4>Say Hello!</h4>
        <p>Use this form to connect. Tell me about your project goals, needs, an idea or whatever you'd like. I'll will reply within normal social time =).</p>
        <fieldset>
            <input placeholder="Your name" type="text" name="name" value="<?= $name ?>" tabindex="1" autofocus>
            <span class="error"><?= $name_error ?></span>
        </fieldset>
        <fieldset>
            <input placeholder="Your Email Address" type="text" name="email" value="<?= $email ?>" tabindex="2">
            <span class="error"><?= $email_error ?></span>
        </fieldset>
        <fieldset>
            <input placeholder="Your Phone Number" type="text" name="phone" value="<?= $phone ?>" tabindex="3">
            <span class="error"><?= $phone_error ?></span>
        </fieldset>
        <fieldset>
            <input placeholder="Your Web Site starts with http://" type="text" name="url" value="<?= $url ?>" tabindex="4" >
            <span class="error"><?= $url_error ?></span>
        </fieldset>
        <fieldset>
      <textarea value="<?= $message ?>" name="message" tabindex="5">
      </textarea>
        </fieldset>
        <fieldset>
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
        </fieldset>
        <div class="success"><?= $success ?></div>
    </form>
</div>