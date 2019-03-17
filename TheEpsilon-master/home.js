function showCard(){
    //create divone with style
    var divOne=document.createElement("div");
    divOne.setAttribute("class","card bg-primary text-dark");
    //created divtwo with style 
    var divTwo=document.createElement("div");
    divTwo.setAttribute("class","card-body");
    var brdiv=document.createElement("br");
   //created edit icon using font-awesome and applied the style
    var I=document.createElement("i");
    I.setAttribute("class","fas fa-edit float-right");
    //appending all the divs to show in virtual dom
    divTwo.innerHTML=document.getElementById("comment").value;
    divOne.appendChild(divTwo);
    divTwo.appendChild(I);

    I.onclick=function() { prompt("Enter Answer"); }
    
    document.getElementById("posts").appendChild(divOne);
    document.getElementById("posts").appendChild(brdiv);

    //empty the value of comment box after clicking the submit button
    document.getElementById("comment").value="";

}