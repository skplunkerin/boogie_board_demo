<div class="row">
  <div class="large-12 columns">
    <h1><?php echo $geocontact['title_1']; ?></h1>
    <hr>
  </div>
</div>

<form role="form">
  <div class="row">
    <div class="form-group large-12 columns floating-label-form-group">
      <label for="name">Name</label>
      <input class="form-control" type="text" name="name" placeholder="<?php echo $geocontact['name_placeholder']; ?>">
    </div>
  </div>
  <div class="row">
    <div class="form-group large-12 columns floating-label-form-group">
      <label for="email">Email Address</label>
      <input class="form-control" type="email" name="email" placeholder="<?php echo $geocontact['email_placeholder']; ?>">
    </div>
  </div>
  <div class="row">
    <div class="form-group large-12 columns floating-label-form-group">
      <label for="message">Message</label>
      <textarea placeholder="<?php echo $geocontact['message_placeholder']; ?>" class="form-control" rows="5"></textarea>
    </div>
  </div>
  <br />
  <div class="row">
    <div class="form-group large-12 columns">
      <button type="submit" class="btn btn-lg btn-success" disabled="disabled">Send</button>
    </div>
  </div>
</form>
