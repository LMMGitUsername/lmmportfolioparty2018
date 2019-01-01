<!doctype html>
<!--makin' it sticky with info from https://www.w3schools.com/howto/howto_js_navbar_sticky.asp-->
  <div id="navbar" style="padding: 2em; background-color: rgb(255, 255, 255); text-shadow: 2px 2px red;">
    <a href="/index.php">home</a>
	<a href="/otherPages/consolidatedLists.php">the already done and the to do</a>
	<a href="/otherPages/journal.php">journal</a>
	<a href="/otherPages/sitesOnlineWhereIDoThings.php">things that i get up to from time to time</a>
  </div>
  <script>
  window.onscroll = function() {myFunction()};

  var navbar = document.getElementById("navbar");
  var sticky = navbar.offsetTop;

  function myFunction() {
    if (window.pageYOffset >= sticky) {
      navbar.classList.add("sticky")
    } else {
      navbar.classList.remove("sticky");
    }
  }
</script>
</html>