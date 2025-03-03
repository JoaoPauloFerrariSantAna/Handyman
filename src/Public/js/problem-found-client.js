/**
 * @typedef {Array.string} string[]
 * */
import { getComplains } from "../../Private/js/get-complains.js";
import { isTitleOverLimit, isBlockTypedValid, isPostOverLimit } from "../../Private/js/post-validator.js";

document.getElementById("form-problem-found").addEventListener("submit", sendComplain, true);

/**
 * Returns if every field is valid (true) or one field is invalid (false)
 *
 * @param {string[]} complains - Represents an array with: title, block and desc
 * @returns {bool} 
 * */
function isPostInvalid(post) {
	const title = post[0];
	const block = post[1];
	const descr = post[2];

	if(isTitleOverLimit(title)) {
		return true;
	}

	if(!isBlockTypedValid(block)) {
		return true;
	}

	if(isPostOverLimit(descr)) {
		return true;
	}

	return false;
}

function sendComplain(e) {
	const complains	= getComplains();

	if(validateComplains(complains)) {
		window.alert("Um campo está com o formato errado.");
		e.preventDefault();
	}
}
