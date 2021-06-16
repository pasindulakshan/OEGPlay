<link rel="stylesheet" href="css/pricing.css" />
  <?php 
      $title = 'pricing';
      include 'header.php'; 
  ?>

  <!--Start content of the page-->
  <div class="containerDiv">
    <div class="headerTextDiv">
      <h1>Pricing</h1>
      <p>You can start for free and Upgrade at anytime</p>
    </div>
    <div class="toggleSwithDiv">
      <p>Monthly</p>
      <label class="switch">
        <input type="checkbox" />
        <span class="slider round"></span>
      </label>
      <p>Annually (Save 20%)</p>
    </div>
      <div class="upgradeCardDiv">
        <div class="upgradeCard">
          <div class="contentDiv">
            <h3>Free</h3>
            <h3>$0/mon</h3>
            <button class="btnFree">Sign Up for free</button>
            <hr />
            <ul>
				<li>Lorem, ipsum dolor sit amet </li>
				<li>Lorem, ipsum dolor sit amet </li>
				<li>Lorem, ipsum dolor sit amet </li>
				<li>Lorem, ipsum dolor sit amet </li>
			</ul>
            <button class="btnFree">Sign Up for Free</button>
          </div>
      </div>
		  <div class="upgradeCard">
			<div class="contentDiv">
			  <h3>Free</h3>
			  <h3>$0/mon</h3>
			  <button class="btnPremium">Sign Up for Premium</button>
			  <hr />
			  <ul>
				  <li>Lorem, ipsum dolor sit amet </li>
				  <li>Lorem, ipsum dolor sit amet </li>
				  <li>Lorem, ipsum dolor sit amet </li>
				  <li>Lorem, ipsum dolor sit amet </li>
			  </ul>
			  <button class="btnPremium">Sign Up for Premium</button>
			</div>
		  </div>
    </div>
  </div>

  <script src="./js/pricing.js"></script>

    <!--End content of the page-->

  <?php include('./footer.php'); ?>