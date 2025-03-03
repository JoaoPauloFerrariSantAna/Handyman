function loadHTML(htmlContent, ancestor, attrName, ancestorType) {
	const content = document.createElement(ancestorType);
	content.setAttribute("id", attrName);
	content.innerHTML = htmlContent;
	ancestor.appendChild(content);
}

export default loadHTML;
