<div class="modal fade" id="contact_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center">CONTACT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="contact-config.php" method="post">
        <div class="modal-body">
          <div class="model-form">

            <div class="d-flex flex-column">
              <input type="text" placeholder="Name" name="name">
              <input type="text" placeholder="E-mail" name="email">
              <textarea placeholder="Your Message/Request" name="message" rows="3"></textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="portfolio-btn-1">Sent</button>
          <button type="button" class="portfolio-btn-2" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- <div id="frmContact">
    <div id="mail-status"></div>
    <div>
        <label style="padding-top:20px;">Name</label><span id="userName-info" class="info"></span><br/>
        <input type="text" name="userName" id="userName" class="demoInputBox">
    </div>
    <div>
        <label>Email</label><span id="userEmail-info" class="info"></span><br/>
        <input type="text" name="userEmail" id="userEmail" class="demoInputBox">
    </div>
    <div>
        <label>Subject</label><span id="subject-info" class="info"></span><br/>
        <input type="text" name="subject" id="subject" class="demoInputBox">
    </div>
    <div>
        <label>Content</label><span id="content-info" class="info"></span><br/>
        <textarea name="content" id="content" class="demoInputBox" cols="60" rows="6"></textarea>
    </div>
    <div>
        <button name="submit" class="btnAction" onClick="sendContact();">Send</button>
    </div>
</div> -->