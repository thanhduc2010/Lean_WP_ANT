
<div class="footer">
    <!-- <ul class="d-flex justify-content-center">
      <li class="tds-footer-item">
      <a href="/about" title="Copyright 2022 Tesla Motors" class="tds-link tcl-link">Tesla © 2022</a>
                </li>
        <li class="tds-footer-item">
      <a href="/legal" class="tds-link tcl-link">Privacy &amp; Legal</a>
                </li>
        <li class="tds-footer-item">
      <a href="https://www.tesla.com/vin-recall-search" class="tds-link tcl-link">Vehicle Recalls</a>
                </li>
        <li class="tds--hideon-phone-only tds-footer-item">
      <a href="/contact" class="tds-link tcl-link">Contact</a>
                </li>
        <li class="tds-footer-item">
      <a href="/careers" class="tds-link tcl-link">Careers</a>
                </li>
        <li class="tds-footer-item">
      <a href="/blog" class="tds-link tcl-link">News</a>
                </li>
        <li class="tds--hideon-phone-only tds-footer-item">
      <a href="https://engage.tesla.com/" class="tds-link tcl-link">Engage</a>
                </li>
        <li class="tds--hideon-phone-only tds-footer-item">  
      <a href="/findus/list" class="tds-link tcl-link">Locations</a>
                </li>
    </ul> -->


    <ul class="d-flex justify-content-around">
        <li class="tds--hideon-phone-only tds-footer-item">  
          <a href="#" class="tds-link tcl-link"><?php do_action('show_copyright');?></a>
        </li>
        <li class="tds--hideon-phone-only tds-footer-item">  
          <a href="#" class="tds-link tcl-link"><?php do_action('show_brought');?></a>
        </li>
    </ul>
</div>



<!--End #tesla --> 
</div>

<?php wp_footer(); ?>

      
    <!-- Bootstrap JavaScript Libraries -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script> -->
    <script src="<?php echo get_template_directory_uri_child(); ?>/assets/bootstrap-5.0.2/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->
  </body>
</html>
