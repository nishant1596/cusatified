// List of semester vice subjects of IT branch
var selectit={
    "semester-1":[
    "Computer Programming",
    "Engineering Chemistry",
    "Engineering Graphics",
    "Basic Electrical Engineering",
    "Basic Electronics Engineering",
    "Environmental Studies",
    "Workshop (Electrical-Lab)",
    "Workshop (CP Lab)"
    ],
    "semester-2":[
    "Calculas",
    "Engineering Physics",
    "Engineering Mechanics",
    "Basic Civil Engineering",
    "Basic Mechanical Engineering",
    "Technical Communication and Professional Ethics",
    "Civil Engineering Workshop",
    "Mechanical Engineering Workshop"
    ],
    "semester-3":[
    "Linear Algebra and TC",
    "Logic Design and Electronic Circuits",
    "Descrete Computational Structures",
    "Object Oriented Programming",
    "Computer Organization",
    "Data Communication and Networking",
    "LDEC Lab|OOP Lab"
    ],
    "semester-4":[
    "Mathematics-sem4",
    "Formal Language", "Automata",
    "System Programming",
    "Microprocessor and Microcontroller Acrh",
    "Data Structure and Algorithm",
    "Database Management System",
    "PC hardware and Microprocessor Lab",
    "Data Structure Lab"
    ],
    "semester-5":[
    "Mathematics-sem5",
    "Operating Systems",
    "Knowledge Engineering",
    "Software Engineering",
    "Internet Programming",
    "Operating sys and Networking lab",
    "Mini Project (RDBMS)"
    ],
    "semester-6":[
    "Financial Management and E-Banking",
    "Compiler Construction",
    "Object oriented Modeling and Design",
    "Big Data Analytics",
    "Cloud and DC Lab",
    "Mini Project (Android based)",
    ],
    "semester-7":[
    "Principal of Management",
    "Operating Research",
    "Computer Graphics",
    "Internet of Things",
    "Elective II",
    "Computer Graphics Lab",
    "Mini Project-Multimedia Project",
    "Entrepreneurship Development"
    ],
    "semester-8":["Electronic Business and Services",
    "Real Time Systems",
    "Security and Cyber Laws",
    "Elective III",
    "project phase II",
    "comprehensive Viva voce"
]
}

var semester=document.getElementById("semester");
var subject=document.getElementById("subject");

for(item in selectit)
{
    semester.options[semester.options.length] = new Option(item, item);
}
function populateSubject() {
    subject.options.length = 0;
    var selectedSemester = semester.options[semester.selectedIndex].value;
    var list_semester = selectit[selectedSemester];

    list_semester.forEach(function(list_subject) {
        subject.options[subject.options.length] = new Option(list_subject, list_subject);
        console.log(list_subject);
    });
    //reinitializing select elements
    $('select').material_select();

}
// calling to set the city select box for the default selected state
populateSubject();