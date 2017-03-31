<div class="email-modal">
  <div class="email-modal-box">
    <i class="fa fa-times modal-close" aria-hidden="true"></i>
    <a href="index.php"><img src="./img/logo/logo4.svg" alt="make-your-vote-up logo"></a>
    <h2>Are you enjoying?</h2>
    <p>Why not sign up for email updates? I promise I won't spam you, and I'll only send out an email when I've written something truly worth reading.</p>
    <form class="form-modal" id="form-modal" action="mail-data.php" method="post">
      <input type="text" id="form-email" name="email" placeholder="Email Address">
      <button type="submit" name="button">Subscribe</button>
    </form>
    <div id="form-messages"></div>
  </div>
</div>

<div class="vote-modal">
  <div class="vote-modal-box">
    <i class="fa fa-times modal-close" aria-hidden="true"></i>
    <h2>Vote Status</h2>
    <p id="vote-status"></p>
    <div class="svg-box">
    <div class="party-tag">
      <span>G</span>
      <span>L</span>
      <span>D</span>
      <span>C</span>
    </div>
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			 viewBox="0 0 300 200" enable-background="new 0 0 400 300" xml:space="preserve" style="background-color: rgb(184, 184, 184); transform: rotate(180deg);">
		<rect id="bar-conservative" x="24" y="0" fill="blue" width="45" height="0"/>
		<rect id="bar-democratic" x="93" y="0" fill="orange" width="45" height="0"/>
		<rect id="bar-liberal" x="162" y="0" fill="red" width="45" height="0"/>
		<rect id="bar-green" x="231" y="0" fill="green" width="45" height="0"/>
		</svg>
  </div>
  </div>
</div>

<footer class="main-footer">
 <div class="row expanded small-collapse">
   <div class="small-12 medium-4 columns footer-side footer-social">
     <a href="http://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a>
     <a href="http://www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a>
   </div>
   <div class="small-12 medium-8 columns footer-side footer-subscribe">
     <div id="subscribe-open">
       <span>subscribe</span>
       <i class="fa fa-envelope-o" aria-hidden="true"></i>
    </div>
    <div id="vote-open">
      <span>vote status</span>
      <i class="fa fa-bar-chart-o" aria-hidden="true"></i>
   </div>
   </div>
 </div>
</footer>

<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
  integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
  crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/selectbox.js"></script>
<script type="text/javascript" src="js/parties.js"></script>
<script type="text/javascript" src="js/mail.js"></script>
