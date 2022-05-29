// add hovered class to selected list item
let list = document.querySelectorAll(".navigation li");

function activeLink() {
  list.forEach((item) => {
    item.classList.remove("hovered");
  });
  this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));

// Menu Toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function () {
  navigation.classList.toggle("active");
  main.classList.toggle("active");
};

// small menu profie

function menuToggle(){
  const toggleMenu = document.querySelector('.menu_profile');
  toggleMenu.classList.toggle('active')
}
  

// recupiration ids et afectation links

// function id_link(){

// if(this.id=="horen"){
 
// }

// if(this.id=="lesen"){
//   alert(this.id)

// }
// if(this.id=="sprechen"){
//   alert(this.id)
// }
// if(this.id=="schreiben"){
//   alert(this.id)
// }
// if(this.id=="QCM"){
//   alert(this.id)
//   window.open()
// }
// if(this.id=="Jeux"){
//   alert(this.id)
// }
// if(this.id=="vocabulaire"){
//   alert(this.id)
// }
// if(this.id=="synonyme"){
//   alert(this.id)
// }
// if(this.id=="against"){
//   alert(this.id)
// }

// }

// ====================horen test ================
const realFileBtn = document.getElementById("real-file");
const customBtn = document.getElementById("custom-button");
const customTxt = document.getElementById("custom-text");

customBtn.addEventListener("click", function() {
  realFileBtn.click();
});

realFileBtn.addEventListener("change", function() {
  if (realFileBtn.value) {
    customTxt.innerHTML = realFileBtn.value.match(
      /[\/\\]([\w\d\s\.\-\(\)]+)$/
    )[1];
  } else {
    customTxt.innerHTML = "No file chosen, yet.";
  }
});




function add_question(){
  

  // input parent pour tout les element 
  // var parent_div=document.getElementById('rechtig_falsch');
  // div pour autre question 
  // let div_question=document.createElement('div');
  // input pour ecrire une question
  // let input_question=document.createElement('input');
  // input_question.type = 'text';
  // input_question.name = 'question2';
  // input_question.placeholder='question2';

// //1er label pour choi vrai
//   let label1=document.createElement('label');
//   //2eme label pour choi faux
//   let label2=document.createElement('label'); 
// // input pour le choi vrai 
//   let input_true=document.createElement('input');
//   input_true.type='radio';
//   input_true.name='question2_choi';
//   input_true.value='question2_true';
//   // span pour le text vrai
//   let span_true=document.createElement('span');
//   // pour ajouter une text vrai dans span vrai
//   let text_true=document.createTextNode('  vrai  ');
//     span_true.appendChild(text_true);
// // ajouter un id  a element span vrai
//     span_true.setAttribute('id','vrai');

// // input pour le choi faux
//   let input_false=document.createElement('input');
//   input_false.type='radio';
//   input_false.name='question2_choi';
//   input_false.value='question2_false';
// // span pour le text faux
//   let span_false=document.createElement('span');
//   // pour ajouter une text vrai dans span faux
//   let text_false=document.createTextNode(' faux');
//   span_false.appendChild(text_false);
//  // ajouter un id  a element span faux
// span_false.setAttribute('id','faux');

//   label1.appendChild(span_true);
//   label2.appendChild(span_false);
//   label1.appendChild(input_true);
//   label2.appendChild(input_false);


  
//   div_question.setAttribute('class','question');
//   div_question.setAttribute('id','question2');

//   div_question.appendChild(input_question);
//   div_question.appendChild(label1);
//   div_question.appendChild(label2);
// div_question.appendChild(input_question);
//   parent_div.appendChild(div_question);
  
 
}

// ================ menu groupe list name ==========================
function register_add(){
  var menu_remove=document.getElementById('register_etudian');
  menu_remove.setAttribute('style','display: flex;');
}
