<script type="text/javascript">
  var dialog = document.querySelector('dialog');
  var showModalButton = document.querySelector('.show-modal<?php echo $row['id']?>');
  if (! dialog.showModal) {
    dialogPolyfill.registerDialog(dialog);
  }
  showModalButton.addEventListener('click', function() {
    dialog.showModal();
  });
  dialog.querySelector('.exit').addEventListener('click', function() {
    dialog.close();
  });
</script>
<script type="text/javascript">
//DELETE DATA FROM DATABASE
  function deletedata(str){
  var id = str;
  $.ajax({
   type: "GET",
   url: "delete/notice_delete.php?id="+id
  }).done(function( data ) {
  $('#info').html(data);
  viewdata();
  });
  document.location.reload(true);
  }
</script>
