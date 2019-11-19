//--------------------------------//
//------- GLOBAL VARIABLES -------//
//--------------------------------//

var addMemberbtn = document.querySelector(".add-btn");
var removeBtn = document.querySelector(".rmv-btn");
var bookbtn = document.querySelector(".sub-btn");
var count = 0;

//--------------------------------//
//------------ Counter -----------//
//--------------------------------//

function counts() {
  if (count <= 5) {
    count = count + 1;
    console.log(count);
    return count;
  } else {
    count = 6;
  }
}

//--------------------------------//
//--------- Members Adder --------//
//--------------------------------//

addMemberbtn.addEventListener("click", function() {
  var Numbercounts = count;
  if (Numbercounts <= 5) {
    var memberInput = document.querySelector("#members");
    var inputpara = document.createElement("div");
    var memberContents = `<p class="added-member">Member Name:</br><input class = "member-${Numbercounts}" name = "mem-${Numbercounts}" type="text" placeholder="Member Name" required></p>`;
    inputpara.innerHTML = memberContents;
    memberInput.appendChild(inputpara);
    // memberInput.appendChild(document.createElement("br"));
  } else {
    swal("Oops!", "Can only add 5 members!");
    count = 5;
  }
});

//--------------------------------//
//------- Members Remover --------//
//--------------------------------//
removeBtn.addEventListener("click", function() {
  var Numbercounts = count;
  if (Numbercounts > 0) {
    var memberInput = document.querySelector(".added-member");
    // console.log(memberInput);
    memberInput.parentElement.lastChild.remove();
    count--;
    console.log(count);
  } else {
    swal("Oops!", "Can't remove anymore members!");
    console.log(count);
    count = 0;
  }
});

bookbtn.addEventListener("click", function() {
  swal("Done!", "Get ready for an adventure", "success");
});
