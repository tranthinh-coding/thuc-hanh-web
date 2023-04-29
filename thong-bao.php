<div class="popper-container">
  <script type="text/javascript">
    function closeNotification() {
      document.querySelector('.notification').style.display = 'none';
    }
  </script>

  <?php if ($message = Session::get('message', [ 'clear' => true ])): ?>
    <div class="notification">
      <div class="notification-content">
        <?php if ($messageTitle = Session::get('message-title', [ 'clear' => true ])): ?>
        <header class="notification-content-header">
          <h4><?php echo $messageTitle ?></h4>
        </header>
        <?php endif ?>
        <p class="notification-content-text"><?php echo $message ?></p>
      </div>
      <div class="notification-close">
        <i class="icon-close" onclick="closeNotification()"></i>
      </div>
    </div>
  <?php endif ?>
</div>
