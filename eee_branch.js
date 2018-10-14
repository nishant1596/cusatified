var selecteee={
    "semester-1":["Calculas","Engineering Physics","Engineering Mechanics","Basic Civil Engineering","Basic Mechanical Engineering","Technical Communication and Professional Ethics","Civil Engineering Workshop","Mechanical Engineering Workshop"],
    "semester-2":["Computer Programming","Engineering Chemistry","Engineering Graphics","Basic Electrical Engineering","Basic Electronics Engineering","Environmental Studies","Workshop (Electrical-Lab)","Workshop (CP Lab)"],
    "semester-3":["Linear Algebra and TC","Fluid Machinery &amp; Heat Engines","Circuits and Networks","Elecrical Measurements &amp; Measuring Instruments","Electronic Devices &amp; Circuits","Electrical Machines I","Electronic Circuit Lab","Electrical Measurements Lab"],
    "semester-4":["Mathematics-sem4","Circuits, Signals &amp; Systems","Electrical Machines II","Electrical Engineering Materials","Digital Electronics","Power Electronics","Digital Electronics Lab","Electrical Machines Lab I"],
    "semester-5":["Mathematics-sem5","Linear Integrated Circuits FT","Microprocessor &amp; Microcontroller BS","Electrical Drawing","Power Systems I","Electrical Machines Lab II","Microprocessor &amp; Microcontroller Lab"],
    "semester-6":["Electronic Communication","Digital Signal Processing","Power System II","Electric Drives","Control System I","Linear Integrated Circuits Lab","Mini Project"],
    "semester-7":["Principles of Management","Electrical System Design","New and Renewable Sources of Energy","Control System II","Elective II","Power Electronics lab","Advanced Electrical Engg Lab","Entrepreneurship Development","Project phase I &amp; Industrial Internship"],
    "semester-8":["Electronic Instrumentation","Utilization of Electrical Power","Power System III","Seminar","Project phase II","Comprehensive Viva-voce"]
    }
    
    
    /* ======================================================================================================================================*/
var semester=document.getElementById("semester");
var subject=document.getElementById("subject");

for(item in selecteee)
{
    semester.options[semester.options.length] = new Option(item, item);
}
function populateSubject() {
    subject.options.length = 0;
    var selectedSemester = semester.options[semester.selectedIndex].value;
    var list_semester = selecteee[selectedSemester];

    list_semester.forEach(function(list_subject) {
        subject.options[subject.options.length] = new Option(list_subject, list_subject);
        console.log(list_subject);
    });
    //reinitializing select elements
    $('select').material_select();

}
// calling to set the city select box for the default selected state
populateSubject();