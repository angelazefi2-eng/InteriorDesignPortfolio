function addProject(){

    let client = document.getElementById("client_name").value;
    let type = document.getElementById("project_type").value;
    let budget = document.getElementById("budget").value;
    let status = document.getElementById("status").value;

    fetch("add_project.php",{
        method:"POST",
        body:new URLSearchParams({
            client_name: client,
            project_type: type,
            budget: budget,
            status: status
        })
    });

    loadProjects();
}

function loadProjects(){

    fetch("get_projects.php")
    .then(r => r.text())
    .then(data => {
        document.getElementById("projectList").innerHTML = data;
    });
}

window.onload = loadProjects;