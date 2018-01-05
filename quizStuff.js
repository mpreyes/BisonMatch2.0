
// function submitForm(x){
//   console.log("Form submitted");
//   document.getElementById('pls').style.display = "none";
//
// }
//
//
// function Next(){
//   let i = 0;
//   for(i; i < 9; i++){
//     console.log("question: " + i);
//   //document.getElementById('frm').style.display = "none";
//   document.getElementById(i).style.display = "none";
// }
//
// }
let i = 0;
let questionArr = [];

let radQuestions = document.getElementsByName("answer1");

function previousQuestion(){
  if(i > 0){
      i--;
    }
  console.log("question: "+ i);
}



function nextQuestion(){
//questionArr.push(x);
for(let j =0; j < radQuestions.length;j++ ){
  if(radQuestions[j].checked){
    questionArr.push(radQuestions[j].value);
  }
}
console.log(questionArr.toString());
if(i < 9){
  i++;
}
console.log("question: "+ i);

}
