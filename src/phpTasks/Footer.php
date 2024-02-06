<div class="footer row main-footer">
    <div class="col-4 col-sm-4 contact-info">
        <svg class="icon" width="12" height="12" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
            <path fill="currentColor" d="m493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464c0-11.2-7.7-20.9-18.6-23.4"/>
        </svg>
        <span>+31686265622</span>
        <br>
        <svg class="icon" width="12" height="12" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill="currentColor" d="m1.574 5.286l7.5 4.029c.252.135.578.199.906.199c.328 0 .654-.064.906-.199l7.5-4.029c.489-.263.951-1.286.054-1.286H1.521c-.897 0-.435 1.023.053 1.286m17.039 2.203l-7.727 4.027c-.34.178-.578.199-.906.199s-.566-.021-.906-.199s-7.133-3.739-7.688-4.028C.996 7.284 1 7.523 1 7.707V15c0 .42.566 1 1 1h16c.434 0 1-.58 1-1V7.708c0-.184.004-.423-.387-.219"/>
        </svg>
        <span>Joo-Marketti@gmail.com</span>
        <br>
        <svg class="icon" width="12" height="12" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill="currentColor" d="M10 20S3 10.87 3 7a7 7 0 1 1 14 0c0 3.87-7 13-7 13m0-11a2 2 0 1 0 0-4a2 2 0 0 0 0 4"/>
        </svg>
        <span>Visamäentie 23, 00100 Helsinki, Finland</span>
    </div>

    <div class="col-4 col-sm-4 text-center">
        <p class="footer-link">Terms & Conditions</p>
        <p class="footer-link">FAQ</p>
        <p class="footer-link">Policy</p>
    </div>

    <div class="col-4 col-sm-4 text-center social-icons">
        <svg class="icon" width="12" height="12" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
            <path fill="currentColor" d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131c.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
        </svg>
        <span class="footer-link">Facebook</span>
        <br>
        <svg class="icon" width="12" height="12" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill="currentColor" d="M20.947 8.305a6.53 6.53 0 0 0-.419-2.216a4.61 4.61 0 0 0-2.633-2.633a6.606 6.606 0 0 0-2.186-.42c-.962-.043-1.267-.055-3.709-.055s-2.755 0-3.71.055a6.606 6.606 0 0 0-2.185.42a4.607 4.607 0 0 0-2.633 2.633a6.554 6.554 0 0 0-.419 2.185c-.043.963-.056 1.268-.056 3.71s0 2.754.056 3.71c.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632a6.584 6.584 0 0 0 2.185.45c.963.043 1.268.056 3.71.056s2.755 0 3.71-.056a6.59 6.59 0 0 0 2.186-.419a4.615 4.615 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.187c.043-.962.056-1.267.056-3.71c-.002-2.442-.002-2.752-.058-3.709m-8.953 8.297c-2.554 0-4.623-2.069-4.623-4.623s2.069-4.623 4.623-4.623a4.623 4.623 0 0 1 0 9.246m4.807-8.339a1.077 1.077 0 0 1-1.078-1.078a1.077 1.077 0 1 1 2.155 0c0 .596-.482 1.078-1.077 1.078"/>
            <circle cx="11.994" cy="11.979" r="3.003" fill="currentColor"/>
        </svg>
        <span class="footer-link">Instagram</span>
        <br>
        
    </div>
</div>
</div>
<div class="copyright-box">
    <div class="container container-fluid text-center copyright">
        © Joo-Marketti
    </div>
</div>

<?php

$currentFile = basename($_SERVER['PHP_SELF']);
$lastModifiedTime = filemtime($currentFile);

echo "Last modified: " . date("F d, Y H:i:s", $lastModifiedTime);
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
</body>
</html>