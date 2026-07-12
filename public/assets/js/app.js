// Toggle Sidebar

const toggle = document.getElementById("toggleSidebar");

const sidebar = document.getElementById("sidebar");

toggle.addEventListener("click", function(){

    sidebar.classList.toggle("collapsed");

});