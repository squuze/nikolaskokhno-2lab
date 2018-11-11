<?php

function COMMENTS(){
  if (isset($_SESSION['email']) != 1) {
    echo '
    <div class="container">
      <div class="row">
        <div class="col-lg-4">

        </div>
        <div class="col-lg-8 text-center">
          <div class="error-comments mt-3 mb-3 border border-danger rounded text-white text-center bg-danger">
            Comments can be posted only by registered users
          </div>
        </div>
      </div>
    </div>
      ';
  }else {
    echo '
    <div class="container">
      <div class="row">
        <div class="col-lg-4">

        </div>
        <div class="col-lg-8 border rounded bg-light">
          <div class="text-center">
            <div class="title-commets mt-3 mb-2 border rounded text-white text-center bg-primary">
              <b>Here you can leave a comment</b>
            </div>
          </div>
          <div class="comments-form">
            <form method="POST">
              <div>
                <textarea class="commectMessage form-control" name="text" placeholder="Enter this form you comments..." require></textarea>
              </div>
              <div class="text-right">
                <input type="submit" class="btn btn-danger" name="clear" value="Clear" />
                <input type="submit" class="btn btn-success" name="enter" value="Enter" />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    ';
  }
}

?>
