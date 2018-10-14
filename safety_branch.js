var selectsafety={
    "semester-1":["Calculas","Engineering Physics","Engineering Mechanics","Basic Civil Engineering","Basic Mechanical Engineering","Technical Communication and Professional Ethics","Civil Engineering Workshop","Mechanical Engineering Workshop"],
    "semester-2":["Computer Programming","Engineering Chemistry","Engineering Graphics","Basic Electrical Engineering","Basic Electronics Engineering","Environmental Studies","Workshop (Electrical-Lab)","Workshop (CP Lab)"],
    "semester-3":["Linear Algebra &amp; TC","Chemical Process principles","Engineering Fluid Mechanics &amp; Machinery","Principles of safety Management","Elements of Machine Drawing","Safety in Construction","Fluid Mechanics &amp; Machinery Lab","Safety Engineering Lab"],
    "semester-4":["Mathematics sem-4","Heat &amp; Mass Transfer","Strength of Materials","Fire Engineering Fundametals","Electrical Technology &amp; Safety","Occupational Health &amp; First Aid","Strength of Materials Lab","Electrical Technology Lab"],
    "semester-5":["Mathematics sem-5","Chemical technology &amp; Reaction Eng.","Principle of Engineering Design","Planning and Design of Fire Protection System","Manufacturing processes","Chemical process Safety","Chemical Engineering Lab","Fire Safety Training"],
    "semester-6":["Legal Aspects of HSE","process Instrumentation &amp; Control","Hazard Control in Manufacturing","Structural Fire Safety","Environmental Eng. &amp; Management","Elective I","Machine Shop","Environmental Eng. &amp; management Lab"],
    "semester-7":["Hazard Identification &amp; Risk Assessment","Transportation System and safety","Principles of Industrial management","Elective II","Fire Engineering Lab","Industrial Hygiene Lab","Entrepreneurship Development","Computational Laboratory"],
    "semester-8":["human factors Engineering","Advanced safety Eng. &amp; Mng.","Disaster management","Elective III","Seminar","Project","Comprehensive Viva voce"]
   }
    
    /* ======================================================================================================================================*/
var semester=document.getElementById("semester");
var subject=document.getElementById("subject");

for(item in selectsafety)
{
    semester.options[semester.options.length] = new Option(item, item);
}
function populateSubject() {
    subject.options.length = 0;
    var selectedSemester = semester.options[semester.selectedIndex].value;
    var list_semester = selectsafety[selectedSemester];

    list_semester.forEach(function(list_subject) {
        subject.options[subject.options.length] = new Option(list_subject, list_subject);
        console.log(list_subject);
    });
    //reinitializing select elements
    $('select').material_select();

}
// calling to set the city select box for the default selected state
populateSubject();