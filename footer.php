<footer>
    <div class="footer-most-left">
        <?php
        if (is_active_sidebar('footer-widget-1')) :
            dynamic_sidebar('footer-widget-1');
        endif; ?>
    </div>
    <div class="footer-middle">
        <div class="footer-col footer-middle-first">
            <p>Services</p>
            <?php
            if (is_active_sidebar('footer-widget-2')) :
                dynamic_sidebar('footer-widget-2');
            endif; ?>
        </div>
        <div class="footer-col footer-middle-second">
            <p>Information</p>
            <?php
            if (is_active_sidebar('footer-widget-3')) :
                dynamic_sidebar('footer-widget-3');
            endif; ?>
        </div>
        <div class="footer-col footer-middle-third">
            <p>About Us</p>
            <?php
            if (is_active_sidebar('footer-widget-4')) :
                dynamic_sidebar('footer-widget-4');
            endif; ?>
        </div>
        <div class="footer-col footer-middle-fourth">
            <p>Contact Info</p>
            <?php
            if (is_active_sidebar('footer-widget-5')) :
                dynamic_sidebar('footer-widget-5');
            endif; ?>
        </div>
    </div>
    <div class="footer-last-row">
        <p>
            We use cookies to improve your experience. By using ui design daily, you're agreeing to the
            collection
            of data as described in our <span>"Privacy Policy".</span>
        </p>
        <div>
            <button onclick="this.parentElement.parentElement.style.display = 'none'">Decline</button>
            <button onclick="this.parentElement.parentElement.style.display = 'none'">Accept</button>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>