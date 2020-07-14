var d = new Date();
var time = d.getHours();
if (time<12){
  document.write("<h2><b>Morning at the lake....</h2></b>");
  /*  function addTheImage() {
      var img = document.createElement('img');
      img.src = "morningDock.JPG";
      document.body.appendChild(img);
      alt="Morning on the Dock";
    }*/
    //img = new Image;
    //img.source = "morningDock.JPG";
  /*  <img src="morningDock.JPG"
       alt="Morning on the Dock"
       width="1000" height="400"/> */
       /*<a href="pictures.html">
         <img src="northViewFromShore.JPG"
         alt="North View From Shore"
         width="600" height="300"/>
       </a> */


}
else if (time>=12 && time<18)
{
  document.write("<h2><b>An afternoon at Camp Lake Cabin...</h2></b>");
  /* document.write(<img src="lakeview.jpg"
     alt="Pink Sunset Lakeview Through Black Trees"
     width="1000" height="400"/>);*/
}
else
{
  document.write("<h2><b>An evening at Camp Lake Cabin....</h2></b>");
  /* <img src="lakeview.jpg"
     alt="Pink Sunset Lakeview Through Black Trees"
     width="1000" height="400"/> */
}
