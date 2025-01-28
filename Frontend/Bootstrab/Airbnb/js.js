const searchBar = document.querySelector(".bar");
const mid = document.querySelector(".mid");
const where  = document.querySelector(".where");
const whereContent = where.innerHTML
const who = document.querySelector(".whoText");
const whoContent = who.innerHTML
const searchMid = document.querySelector(".search-mid");
const searchMidContent = searchMid.innerHTML
const scrollLeft = document.querySelector(".scrollLeft");
const cat = document.querySelector('.cat');



addEventListener("scroll",  () => {
  if (window.scrollY > 0 ) {
    searchBar.classList.remove("w-75");
    searchBar.style.width = "400px";
    searchBar.style.padding = "3px";
    searchBar.style.alignItems = "center";
    searchBar.parentElement.style.height = "0px";
    searchBar.parentElement.classList.remove("p-3");
    mid.style.transform = "translateY(-200px)";
    where.innerHTML = "<h6>Anywhere</h6>";
    who.innerHTML = "<p>Add guests</p>";
    searchBar.style.transform = "translateY(-20px)";
    searchMid.innerHTML = `<div class="borderLeft w-100 d-flex align-items-center justify-content-between ">
                            <div class="nav-item w-100 search-item rounded-pill text-start checkin ">
                              <h6>Any week</h6>
                            </div>
                          </div>`;
   
  } else if (window.scrollY === 0) {

    searchBar.classList.add("w-75");
    searchBar.style.transform = "translateY(0px)";
    mid.style.transform = "translateY(0px)";
    searchBar.parentElement.style.height = "80px";
    searchBar.classList.contains("w-75")
    where.innerHTML = whereContent
    who.innerHTML = whoContent;
    searchMid.innerHTML = searchMidContent

  }
})


function scrollDiv(direction) {
  const scrollAmount = 200; 
  if (direction === 'left') {
    cat.scrollLeft -= scrollAmount; 
    if (cat.scrollLeft <=  200) { 
      scrollLeft.style.visibility = 'hidden';
    }
    
  } else if (direction === 'right') {
    cat.scrollLeft += scrollAmount; 
    scrollLeft.style.visibility = 'visible';
  }


  
}