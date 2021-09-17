<!--bottom starts-->
<div class="container-fluid bottom-bar bg-light pb-5">
  <nav class="nav d-flex justify-content-between">
      <a class="p-2 text-muted" href="terms.php">Terms & Condition</a>
      <a class="p-2 text-muted" href="about.php">About us</a>
      <a class="p-2 text-muted" href="faq.php">FAQs</a>
      <a class="p-2 text-muted" href="partner.php">Partners</a>
      <a class="p-2 text-muted" href="contact.php">Contact us</a>
  </nav>
    <center><p>&copy; 2017-2018 &middot;</p></center>
</div>
<!--bottom ends-->
<script src="js/custom.js"></script>
<script src="js/jquery.js"></script>
<script src=js/"popper.js"></script>
<script src="js/bootstrap.js"></script>

<script>
$('#radioBtn a').on('click', function(){
  var sel = $(this).data('title');
  var tog = $(this).data('toggle');
  $('#'+tog).prop('value', sel);

  $('a[data-toggle="'+tog+'"]').not('[data-title="'+sel+'"]').removeClass('active').addClass('notActive');
  $('a[data-toggle="'+tog+'"][data-title="'+sel+'"]').removeClass('notActive').addClass('active');
})
</script>
</body>
</html>
