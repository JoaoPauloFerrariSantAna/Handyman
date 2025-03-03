import loadHTML from "../../Private/js/load-html.js"

export function loadHeader(headerImgPath) {
	const header = document.querySelector("header.header");
	loadHTML(`
	<div id="logo-container">
		<img src="${headerImgPath}" alt="ManuTech logo" class="icon-site"id="manutech-logo">
	</div>
	<div id="site-title">
		<h1>MANUTECH</h1>
	</div>`,
	header,
	"main-container",
	"div");
};

export function loadNavbar(pages) {
	const ol = document.createElement("ol");
	const header = document.querySelector("header.header");

	ol.setAttribute("class", "navbar");

	// TODO: Try to create function
	for(let i = 0; i < pages.length; i++) {
		const li = document.createElement("li");
		const a = document.createElement('a');
		const aTxt = document.createTextNode(pages[i]);

		a.setAttribute("href", `${pages[i]}.html`);
		a.appendChild(aTxt);

		li.appendChild(a);
		ol.appendChild(li);
	}

	loadHTML(ol.innerHTML, header, "navigation", "div");
}

export function loadTools() {
	const tools = ["Hypertext Markup Language", "Cascading Styling Sheets", "Javascript", "PHP", "PHPUnit", "Figma"];
	const ol = document.createElement("ol");
	const container = document.querySelector("div.tools-used");
	let li = null;

	ol.setAttribute("class", "tools");

	for(let i = 0; i < tools.length; i++) {
		const txtNode = document.createTextNode(tools[i]);
 
		li = document.createElement("li");

		li.appendChild(txtNode);
		ol.appendChild(li);
	}

	loadHTML(ol.innerHTML, container, "tools", "div");
}

export function loadMembers() {
	const container = document.querySelector("div.members-name");

	const members = ["João Paulo Ferrari Sant'Ana", "Noah Vêri de Morais Franco Aleluia", "Higor Luiz Bicudo", "Joaquim Pedro Augusto de Castro Leite Oliveira", "José Rodolfo Faustino Guimares Junior"];

	const ol = document.createElement("ol");

	let txtNode = null;
	let li = null;

	ol.setAttribute("class", "members-second-container");

	for(let i = 0; i < members.length; i++) {
		txtNode = document.createTextNode(members[i])

		li = document.createElement("li");
		li.setAttribute("class", "member");

		li.appendChild(txtNode);
		ol.appendChild(li);
	}

	loadHTML(ol.innerHTML, container, "members", "div");
}
