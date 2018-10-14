var selectcivil={
    "semester-1":["Calculas","Engineering Physics","Engineering Mechanics","Basic Civil Engineering","Basic Mechanical Engineering","Technical Communication and Professional Ethics","Civil Engineering Workshop","Mechanical Engineering Workshop"],
    "semester-2":["Computer Programming","Engineering Chemistry","Engineering Graphics","Basic Electrical Engineering","Basic Electronics Engineering","Environmental Studies","Workshop (Electrical-Lab)","Workshop (CP Lab)"],
    "semester-3":["Linear Algebra & TC|Surveying I|Strength of Material|Concrete Technology|Fluid Mechanics I|Building technology|Concrete lab|Strength of material lab"],
    "semester-4":["Mathematics-sem4","Surveying II","Analysis of Determinate Structures","Engineering Geology","Fluid Mechanics II","Building Planning and Drawing","Survey Practical","Fluid Mechanics Lab"],
    "semester-5":["Mathematics-sem5","Design of Concrete Structure-I","Analysis of Indeterminate Structures","geotechnical Engineering-I","Transportation Engineering-I","Water resources and Irrigation Engineering","Geotechnical Engineering Lab","Transportation Engineering Lab"],
    "semester-6":["Environmental Engineering-I","Design of Steel Structures","Matrix Methods of Structures Analysis","Geotechnical Engineering-II","Transporation Engineering-II","Elective-I","Environmental Engineering Lab","Computer Application in CE-I"],
    "semester-7":["Environmetal Engineering-II","Design of Concrete STructures","Quantity Surveying and Valuation","Elective-II","Computer Application in CE-II","Structural Engineering and NDT Lab","Entrepreneurship Development","Industrial Training","Project Phase-I"],
    "semester-8":["Architectural and Town Planning","Earthquake Engineering","Construction Safety and Fire Eng","Elective-III","Seminar","Project-phase II","Comprehensive viva-voce"]
    }
    
    /* ======================================================================================================================================*/
var semester=document.getElementById("semester");
var subject=document.getElementById("subject");

for(item in selectcivil)
{
    semester.options[semester.options.length] = new Option(item, item);
}
function populateSubject() {
    subject.options.length = 0;
    var selectedSemester = semester.options[semester.selectedIndex].value;
    var list_semester = selectcivil[selectedSemester];

    list_semester.forEach(function(list_subject) {
        subject.options[subject.options.length] = new Option(list_subject, list_subject);
        console.log(list_subject);
    });
    //reinitializing select elements
    $('select').material_select();

}
// calling to set the city select box for the default selected state
populateSubject();