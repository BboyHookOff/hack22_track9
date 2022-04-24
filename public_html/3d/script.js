let films = [];

document.addEventListener("DOMContentLoaded", function () {
  axios.
  get("https://ghibliapi.herokuapp.com/films").
  then(function (response) {
    films = response.data;
    appendFilms(films);
    window.addEventListener("scroll", moveCamera);
    setSceneHeight();
  }).
  catch(function (error) {
    console.log(error);
  });
});


let is_preview = true;
let preview = document.getElementById('prev');

document.addEventListener('scroll', function(){
  if(is_preview)
  preview.style.setProperty("opacity", '0');
  preview.style.setProperty("z-index", '-10');
  preview = false;
})
let blocks = document.getElementsByClassName('block');

function moveCamera() {
  document.documentElement.style.setProperty("--cameraZ", window.pageYOffset);
  // let Z = document.documentElement.style.getPropertyValue("--cameraZ");
  // let step = 11000 / blocks.length;
  // for (let idx = 0; idx < blocks.length; idx++) {
  //   const element = blocks[idx];
  //   if (Z >= step*(idx+1) - 800) {
  //     let delta = Z - step*(idx+1)+800;
  //     let percents = delta/650;
  //     element.style.setProperty("opacity", percents);
  //   }
  //   else element.style.setProperty("opacity", 0);
  // }
}

function setSceneHeight() {
  const numberOfItems = films.length; // Or number of items you have in `.scene3D`
  const itemZ = parseFloat(
  getComputedStyle(document.documentElement).getPropertyValue("--itemZ"));

  const scenePerspective = parseFloat(
  getComputedStyle(document.documentElement).getPropertyValue(
  "--scenePerspective"));


  const cameraSpeed = parseFloat(
  getComputedStyle(document.documentElement).getPropertyValue("--cameraSpeed"));


  const height =
  window.innerHeight +
  scenePerspective * cameraSpeed +
  itemZ * cameraSpeed * numberOfItems;

  // Update --viewportHeight value
  document.documentElement.style.setProperty("--viewportHeight", height);
}

function createFilmItem(film) {
  return `<div class="hide-perl">
        </div>
        <div class="hide-perl">
       </div>`;
}

function appendFilms(films) {
  const filmsEl = document.querySelector(".viewport .scene4D");
  let filmsNodes = [];

  for (film of films) {
    filmsNodes.push(createFilmItem(film));
  }

  filmsEl.innerHTML = filmsNodes.join(" ");
}