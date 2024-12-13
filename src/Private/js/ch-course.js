function updateStudentCourse() {
	const newCourse = document.getElementById("new-course");
	const xhr	= new XMLHttpRequest();

	xhr.open("POST", "../ServerSide/ch-cour-server.php", true);

	if(newCourse.value.length === 0) {
		window.alert("Campo não foi preenchido")
		newCourse.focus();
		return false;
	}

	xhr.onload = function() {
		window.alert("Atualizando curso...");
		localStorage.setItem("student-course", newCourse.value.trim());
		window.location.reload();
	}

	xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded")
	xhr.send(`${newCourse.getAttribute("name")}=${newCourse.value.trim()}`);

	return false;
}
