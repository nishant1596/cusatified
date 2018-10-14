var selectece={
    "semester-1":["Computer Programming","Engineering Chemistry","Engineering Graphics","Basic Electrical Engineering","Basic Electronics Engineering","Environmental Studies","Workshop (Electrical-Lab)","Workshop (CP Lab)"],
    "semester-2":["Calculas","Engineering Physics","Engineering Mechanics","Basic Civil Engineering","Basic Mechanical Engineering","Technical Communication and Professional Ethics","Civil Engineering Workshop","Mechanical Engineering Workshop"],
    "semester-3":["Linear Algebra and TC","Discrete Computational Structures","Network Theory","Digital Electronics","Solid State Electronics","Electronic Circuit I","Basic Electronic Lab","Digital Electronic Lab"],
    "semester-4":["Mathematics sem-4","Microprocessor Architecure and Programming","Electronic Circuit II","Signal and System","Communication Engineering I","Digital System Design","Digital Programming Lab","Electronic Circuit Lab I"],
    "semester-5":["Mathematics-sem5","Electromagnetic Theory","Embedded Systems","Communication Engineering II","Analog and Integrated Circuits","Digital Signal Processing","Mini project","Electronic Circuits Lab II"],
    "semester-6":["Electronic Measurements and Instrumentation","Microwave techniques and Devices","VSLI Design","Information Theory and Coding","Power Electronics","Elective I","Digital Signal Processing Lab","Comunication Lab I"],
    "semester-7":["Principles of Management","Antennas and Propagation","Digital Image Processing","Control Systems Engineering","Elective II","Embedded Systems Lab","Communication Lab II","Entrepreneurship Development","Project Phase I &amp; Industrial Internship"],
    "semester-8":["Electronic Production Design","Wireless Communication","Computer Communication &amp; Networking","Elective III","Seminar","Project Phase 2","Comprehensive Viva Voce"]
}

/* ======================================================================================================================================*/
var semester=document.getElementById("semester");
var subject=document.getElementById("subject");

for(item in selectece)
{
    semester.options[semester.options.length] = new Option(item, item);
}
function populateSubject() {
    subject.options.length = 0;
    var selectedSemester = semester.options[semester.selectedIndex].value;
    var list_semester = selectece[selectedSemester];

    list_semester.forEach(function(list_subject) {
        subject.options[subject.options.length] = new Option(list_subject, list_subject);
        console.log(list_subject);
    });
    //reinitializing select elements
    $('select').material_select();

}
// calling to set the city select box for the default selected state
populateSubject();