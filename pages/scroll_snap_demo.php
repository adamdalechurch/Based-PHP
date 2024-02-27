<?php include 'header.php'; ?>

<style>

/* scroll snap demo */
#main {
  overflow-y: scroll;
  scroll-snap-type: y mandatory;
  height: 30vh;
  display: flex;
  flex-direction: column;
}

#section1 {
  scroll-snap-align: start;
  height: 50vh;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 5em;
}

</style>

<div id="main">
<div id="section1"
    style="background-color:red">
ddd
</div>
<div id="section2"
    style="background-color:blue">
fff
</div>
</div>
