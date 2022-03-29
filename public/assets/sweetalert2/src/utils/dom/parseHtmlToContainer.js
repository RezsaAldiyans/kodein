<<<<<<< Updated upstream
import { setInnerHtml } from './domUtils.js'

=======
>>>>>>> Stashed changes
export const parseHtmlToContainer = (param, target) => {
  // DOM element
  if (param instanceof HTMLElement) {
    target.appendChild(param)

  // Object
  } else if (typeof param === 'object') {
    handleObject(param, target)

  // Plain string
  } else if (param) {
<<<<<<< Updated upstream
    setInnerHtml(target, param)
=======
    target.innerHTML = param
>>>>>>> Stashed changes
  }
}

const handleObject = (param, target) => {
  // JQuery element(s)
  if (param.jquery) {
    handleJqueryElem(target, param)

  // For other objects use their string representation
  } else {
<<<<<<< Updated upstream
    setInnerHtml(target, param.toString())
=======
    target.innerHTML = param.toString()
>>>>>>> Stashed changes
  }
}

const handleJqueryElem = (target, elem) => {
<<<<<<< Updated upstream
  target.textContent = ''
=======
  target.innerHTML = ''
>>>>>>> Stashed changes
  if (0 in elem) {
    for (let i = 0; i in elem; i++) {
      target.appendChild(elem[i].cloneNode(true))
    }
  } else {
    target.appendChild(elem.cloneNode(true))
  }
}
