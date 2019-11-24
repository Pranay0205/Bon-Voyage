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
    //---------------------------------//
    //-- ADDING MEMBER NAME HTML TAG --//
    //---------------------------------//
    var memberInput = document.querySelector("#members");
    var inputpara = document.createElement("div");
    var memberContents = ` <div class="added-member" data-aos="fade-right">
    <p>
      Name:<br /><input
        class="member-${Numbercounts}"
        name="mem-${Numbercounts}"
        type="text"
        placeholder="Name"
        required/>
    </p>
    </div>`;
    inputpara.innerHTML = memberContents;
    memberInput.appendChild(inputpara);
    // memberInput.appendChild(document.createElement("br"));

    //-----------------------------------//
    //----- ADDING GENDER HTML TAG -----//
    //----------------------------------//

    var genderInput = document.querySelector("#Gender");
    var GenderTag = document.createElement("div");
    var GenderTagContents = `
    <div class="added-gender" data-aos="fade-right">
    <p>
    Gender:<br /></p> 
    <div class="gender-${Numbercounts}" name="gen-${Numbercounts}">
      <select name="gen-${Numbercounts}">
      <option>Select</option>
        <option value="m">Male</option>
        <option value="f">Female</option>
        <option value="o">Other</option>
      </select>
    </div>
  </div>`;
    GenderTag.innerHTML = GenderTagContents;
    genderInput.appendChild(GenderTag);

    //------------------------------------//
    //------- ADDING AGE HTML TAG -------//
    //----------------------------------//

    var AgeInput = document.querySelector("#Age");
    var AgeTag = document.createElement("div");
    var AgeTagContents = `
    <div class = "added-age" data-aos="fade-right">
    <p>Age:<br /><input type="Number" name="age-${Numbercounts}" placeholder="Age" min="0" max="150" required /></p>
    </div>`;
    AgeTag.innerHTML = AgeTagContents;
    AgeInput.appendChild(AgeTag);
  } else {
    swal("Oops!", "Can only add 5 members!");
    count = 5;
  }
});

//--------------------------------//
//------- Members Remover --------//
//--------------------------------//

removeBtn.addEventListener("click", function() {
  removeAnimation();
  var Numbercounts = count;
  if (Numbercounts > 0) {
    var memberInput = document.querySelector("#members");
    memberInput.removeChild(memberInput.lastChild);

    var genderadder = document.querySelector("#Gender");
    genderadder.removeChild(genderadder.lastChild);

    var ageadder = document.querySelector("#Age");
    ageadder.removeChild(ageadder.lastChild);

    count--;
    console.log(count);
  } else {
    swal("Oops!", "Can't remove anymore members!");
    console.log(count);
    count = 0;
  }
});

function removeAnimation() {
  var removedElement1 = document.querySelector("#memebers");
}

bookbtn.addEventListener("click", function() {
  swal("Done!", "Get ready for an adventure", "success");
});
