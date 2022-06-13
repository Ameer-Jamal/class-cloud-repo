var dateObj = new Date();
var day = dateObj.getUTCDate();
var year = dateObj.getUTCFullYear();


const monthNames = ["January", "February", "March", "April", "May", "June",
"July", "August", "September", "October", "November", "December"
];


month=monthNames[dateObj.getUTCMonth() + 1];



newdate = day + " - " + month + " - " + year;
document.getElementById("date").innerHTML = newdate;

document.body.style.zoom = "155%";
window.onload = function(){
let menuBtn = document.querySelector("#menuBtn");
let sidebar = document.querySelector(".sidebar");
let searchBtn = document.querySelector("#searchBtn");

menuBtn.onmousedown = function() {
sidebar.classList.toggle("active");
console.log("menu button has been pressed");
};


searchBtn.onmousedown = function() {
if(sidebar.classList.contains("active")){
let input = document.querySelector("#searchValue").value;
let query = "https://www.youtube.com/results?search_query=".concat(input)
console.log(query)
window.open(
query, "_blank");
console.log("Search button has been pressed");
}
else{ sidebar.classList.toggle("active");}

};




};