var selectcs={
  "semester-1":["Computer Programming","Engineering Chemistry","Engineering Graphics","Basic Electrical Engineering","Basic Electronics Engineering","Environmental Studies","Workshop (Electrical-Lab)","Workshop (CP Lab)"],
  "semester-2":["Calculas","Engineering Physics","Engineering Mechanics","Basic Civil Engineering","Basic Mechanical Engineering","Technical Communication and Professional Ethics","Civil Engineering Workshop","Mechanical Engineering Workshop"],
  "semester-3":["Linear Algebra and TC","Logic Design","Descrete Computational Structures","Object Oriented Programming","Principles of Programming Languages","Data and Computer Communication","Digital Electronic lab","OOP Lab"],
  "semester-4":["Mathematics-sem4","Microprocessors","Computer Architecture and Organization","Automata Language and Computations","Data Structures and Algorithm","Database Management System","Database Management System Lab","Data Structure lab"],
  "semester-5":["Mathematics-sem5","System programming","Object Oriented Software Eng","Operating Systems","Advances Microprocessors and Microcontrollers","Computer Graphics","Computer Graphics Lab","Microprocessor Lab"],
  "semester-6":["Computer Networks","Compiler Construction","Cryptography an Network Security","Data Mining","Elective I","Operating System Lab","Mini project"],
  "semester-7":["Principles of Management","Advanced Computer Networks","Analysis and Design of Algorithms","Web Technology","Elective II","language Processor Lab","Network Lab","Entrepreneurship Development","Project phase I and Industrial Internship"],
  "semester-8":["Advanced Architectural and Parallel processing","Elective III","Seminar","Project phase II","Comprehensive Viva voce"]
}

/* ======================================================================================================================================*/
var semester=document.getElementById("semester");
var subject=document.getElementById("subject");

for(item in selectcs)
{
    semester.options[semester.options.length] = new Option(item, item);
}
function populateSubject() {
    subject.options.length = 0;
    var selectedSemester = semester.options[semester.selectedIndex].value;
    var list_semester = selectcs[selectedSemester];

    list_semester.forEach(function(list_subject) {
        subject.options[subject.options.length] = new Option(list_subject, list_subject);
        console.log(list_subject);
    });
    //reinitializing select elements
    $('select').material_select();

}
// calling to set the city select box for the default selected state
populateSubject();