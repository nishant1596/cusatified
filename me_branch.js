var selectme={
    "semester-1":["Calculas","Engineering Physics","Engineering Mechanics","Basic Civil Engineering","Basic Mechanical Engineering","Technical Communication and Professional Ethics","Civil Engineering Workshop","Mechanical Engineering Workshop"],
    "semester-2":["Computer Programming","Engineering Chemistry","Engineering Graphics","Basic Electrical Engineering","Basic Electronics Engineering","Environmental Studies","Workshop (Electrical-Lab)","Workshop (CP Lab)"],
    "semester-3":["Linear Algebra and TC","Electrical Technology","Mechanics of Solids","Fluid Mechanics","Metallurgy and Material Science","Machine Drawing","Strength of Material Lab","Fluid Mechanics Lab"],
    "semester-4":["Mathematics-sem4","Metrology and Instrumentation","Mechatronics","Applied Thermodynamics","Hydraulic Machinery","Manufacturing Processes","Metrology Lab","Hydraulic Machinery Lab"],
    "semester-5":["Mathematics-sem5","Mechanics of Machinery","Machine Tools and Machining Science","Industrial Management","Power plant Engineering","Computational Methods lab","Machine Shop"],
    "semester-6":["Dynamics of Machinery","Machine Design-I","Operations Management","Heat and Mass Transfer","CAD/CAM","Elective-I","CAD/CAM Lab","Heat and Mass Transfer Lab"],
    "semester-7":["Refrigeration and Air Conditioning","Vibration and Air Control","Machine Design-II","Automobile Engineering","Elective II","Thermal Engineering Lab","Automobile Lab","Entrepreneurship Development","Project Phase I and Industrial Internship"],
    "semester-8":["Compressible Fluid Flow|Productio Technology|Operational Research|Elective III|Seminar|Project Phase II|Comprehensive Viva Voce"]
    }
    
    /* ======================================================================================================================================*/
var semester=document.getElementById("semester");
var subject=document.getElementById("subject");

for(item in selectme)
{
    semester.options[semester.options.length] = new Option(item, item);
}
function populateSubject() {
    subject.options.length = 0;
    var selectedSemester = semester.options[semester.selectedIndex].value;
    var list_semester = selectme[selectedSemester];

    list_semester.forEach(function(list_subject) {
        subject.options[subject.options.length] = new Option(list_subject, list_subject);
        console.log(list_subject);
    });
    //reinitializing select elements
    $('select').material_select();

}
// calling to set the city select box for the default selected state
populateSubject();