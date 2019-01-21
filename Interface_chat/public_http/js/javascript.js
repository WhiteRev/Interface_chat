//carousel_video1




function preload() {
  loadStrings('test.txt', setup);


}

function setup(result) {
  console.log(result[0]);
  text=result[0]
  document.getElementById("Reponse").innerHTML = text;

}
