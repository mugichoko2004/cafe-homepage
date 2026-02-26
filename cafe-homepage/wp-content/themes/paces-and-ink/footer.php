<?php
/**
 * Default menu fallback
 */
function paces_and_ink_default_menu()
{
?>
<ul>
  <li><a href="#concept">Concept</a></li>
  <li><a href="#menu">Menu</a></li>
  <li><a href="#history">History</a></li>
  <li><a href="#vibe">Vibe</a></li>
  <li><a href="#access">Access</a></li>
</ul>
<?php
}
?>
<footer class="footer">
  <div class="container">
    <div class="footer-info">
      <h3>
        <?php bloginfo('name'); ?>
      </h3>
      <p>〒123-4567 東京都千代田区活版町 1-2-3</p>
      <p>Open: 10:00 - 19:00 / Close: Wednesday</p>
    </div>
    <p class="copyright">&copy;
      <?php echo date('Y'); ?>
      <?php bloginfo('name'); ?>. All Rights Reserved.
    </p>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>