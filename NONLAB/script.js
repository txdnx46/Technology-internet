let slideindex  = 1;

function plusslide(n){
    showslide(slideindex += n);
}

function currentslide(n){
    showslide(slideindex = n);
}

function showslide(n){
    let slide = document.getElementsByClassName("myslide");
    let dots = document.getElementsByClassName("dot");

    if(n > slide.length){
        slideindex =1;
    }

    if(n < 1){
        slideindex = slide.length ;
    }

    for(let i =0 ; i<slide.length; i++){
        slide[i].style.display = "none";
    }

    for(let i=0 ; i<dots.length; i++){
        dots[i].className = dots[i].className.replace(" active","");
    }

    slide[slideindex-1].style.display="block";

    dots[slideindex-1].className += " active";
}


showslide(slideindex)