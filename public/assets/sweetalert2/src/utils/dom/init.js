<<<<<<< Updated upstream
import { swalClasses } from '../classes.js'
import { getContainer, getPopup } from './getters.js'
import { addClass, removeClass, getChildByClass, setInnerHtml } from './domUtils.js'
=======
import { swalClasses, iconTypes } from '../classes.js'
import { getContainer, getPopup, getContent } from './getters.js'
import { addClass, removeClass, getChildByClass } from './domUtils.js'
>>>>>>> Stashed changes
import { isNodeEnv } from '../isNodeEnv.js'
import { error } from '../utils.js'
import sweetAlert from '../../sweetalert2.js'

const sweetHTML = `
<<<<<<< Updated upstream
 <div aria-labelledby="${swalClasses.title}" aria-describedby="${swalClasses['html-container']}" class="${swalClasses.popup}" tabindex="-1">
   <button type="button" class="${swalClasses.close}"></button>
   <ul class="${swalClasses['progress-steps']}"></ul>
   <div class="${swalClasses.icon}"></div>
   <img class="${swalClasses.image}" />
   <h2 class="${swalClasses.title}" id="${swalClasses.title}"></h2>
   <div class="${swalClasses['html-container']}"></div>
   <input class="${swalClasses.input}" />
   <input type="file" class="${swalClasses.file}" />
   <div class="${swalClasses.range}">
     <input type="range" />
     <output></output>
   </div>
   <select class="${swalClasses.select}"></select>
   <div class="${swalClasses.radio}"></div>
   <label for="${swalClasses.checkbox}" class="${swalClasses.checkbox}">
     <input type="checkbox" />
     <span class="${swalClasses.label}"></span>
   </label>
   <textarea class="${swalClasses.textarea}"></textarea>
   <div class="${swalClasses['validation-message']}" id="${swalClasses['validation-message']}"></div>
   <div class="${swalClasses.actions}">
     <div class="${swalClasses.loader}"></div>
     <button type="button" class="${swalClasses.confirm}"></button>
     <button type="button" class="${swalClasses.deny}"></button>
     <button type="button" class="${swalClasses.cancel}"></button>
   </div>
   <div class="${swalClasses.footer}"></div>
   <div class="${swalClasses['timer-progress-bar-container']}">
     <div class="${swalClasses['timer-progress-bar']}"></div>
   </div>
=======
 <div aria-labelledby="${swalClasses.title}" aria-describedby="${swalClasses.content}" class="${swalClasses.popup}" tabindex="-1">
   <div class="${swalClasses.header}">
     <ul class="${swalClasses['progress-steps']}"></ul>
     <div class="${swalClasses.icon} ${iconTypes.error}"></div>
     <div class="${swalClasses.icon} ${iconTypes.question}"></div>
     <div class="${swalClasses.icon} ${iconTypes.warning}"></div>
     <div class="${swalClasses.icon} ${iconTypes.info}"></div>
     <div class="${swalClasses.icon} ${iconTypes.success}"></div>
     <img class="${swalClasses.image}" />
     <h2 class="${swalClasses.title}" id="${swalClasses.title}"></h2>
     <button type="button" class="${swalClasses.close}"></button>
   </div>
   <div class="${swalClasses.content}">
     <div id="${swalClasses.content}" class="${swalClasses['html-container']}"></div>
     <input class="${swalClasses.input}" />
     <input type="file" class="${swalClasses.file}" />
     <div class="${swalClasses.range}">
       <input type="range" />
       <output></output>
     </div>
     <select class="${swalClasses.select}"></select>
     <div class="${swalClasses.radio}"></div>
     <label for="${swalClasses.checkbox}" class="${swalClasses.checkbox}">
       <input type="checkbox" />
       <span class="${swalClasses.label}"></span>
     </label>
     <textarea class="${swalClasses.textarea}"></textarea>
     <div class="${swalClasses['validation-message']}" id="${swalClasses['validation-message']}"></div>
   </div>
   <div class="${swalClasses.actions}">
     <button type="button" class="${swalClasses.confirm}">OK</button>
     <button type="button" class="${swalClasses.cancel}">Cancel</button>
   </div>
   <div class="${swalClasses.footer}"></div>
   <div class="${swalClasses['timer-progress-bar']}"></div>
>>>>>>> Stashed changes
 </div>
`.replace(/(^|\n)\s*/g, '')

const resetOldContainer = () => {
  const oldContainer = getContainer()
  if (!oldContainer) {
<<<<<<< Updated upstream
    return false
  }

  oldContainer.remove()
=======
    return
  }

  oldContainer.parentNode.removeChild(oldContainer)
>>>>>>> Stashed changes
  removeClass(
    [document.documentElement, document.body],
    [
      swalClasses['no-backdrop'],
      swalClasses['toast-shown'],
      swalClasses['has-column']
    ]
  )
<<<<<<< Updated upstream

  return true
}

const resetValidationMessage = () => {
  if (sweetAlert.isVisible()) {
    sweetAlert.resetValidationMessage()
  }
}

const addInputChangeListeners = () => {
  const popup = getPopup()

  const input = getChildByClass(popup, swalClasses.input)
  const file = getChildByClass(popup, swalClasses.file)
  const range = popup.querySelector(`.${swalClasses.range} input`)
  const rangeOutput = popup.querySelector(`.${swalClasses.range} output`)
  const select = getChildByClass(popup, swalClasses.select)
  const checkbox = popup.querySelector(`.${swalClasses.checkbox} input`)
  const textarea = getChildByClass(popup, swalClasses.textarea)
=======
}

let oldInputVal // IE11 workaround, see #1109 for details
const resetValidationMessage = (e) => {
  if (sweetAlert.isVisible() && oldInputVal !== e.target.value) {
    sweetAlert.resetValidationMessage()
  }
  oldInputVal = e.target.value
}

const addInputChangeListeners = () => {
  const content = getContent()

  const input = getChildByClass(content, swalClasses.input)
  const file = getChildByClass(content, swalClasses.file)
  const range = content.querySelector(`.${swalClasses.range} input`)
  const rangeOutput = content.querySelector(`.${swalClasses.range} output`)
  const select = getChildByClass(content, swalClasses.select)
  const checkbox = content.querySelector(`.${swalClasses.checkbox} input`)
  const textarea = getChildByClass(content, swalClasses.textarea)
>>>>>>> Stashed changes

  input.oninput = resetValidationMessage
  file.onchange = resetValidationMessage
  select.onchange = resetValidationMessage
  checkbox.onchange = resetValidationMessage
  textarea.oninput = resetValidationMessage

<<<<<<< Updated upstream
  range.oninput = () => {
    resetValidationMessage()
    rangeOutput.value = range.value
  }

  range.onchange = () => {
    resetValidationMessage()
=======
  range.oninput = (e) => {
    resetValidationMessage(e)
    rangeOutput.value = range.value
  }

  range.onchange = (e) => {
    resetValidationMessage(e)
>>>>>>> Stashed changes
    range.nextSibling.value = range.value
  }
}

const getTarget = (target) => typeof target === 'string' ? document.querySelector(target) : target

const setupAccessibility = (params) => {
  const popup = getPopup()

  popup.setAttribute('role', params.toast ? 'alert' : 'dialog')
  popup.setAttribute('aria-live', params.toast ? 'polite' : 'assertive')
  if (!params.toast) {
    popup.setAttribute('aria-modal', 'true')
  }
}

const setupRTL = (targetElement) => {
  if (window.getComputedStyle(targetElement).direction === 'rtl') {
    addClass(getContainer(), swalClasses.rtl)
  }
}

/*
 * Add modal + backdrop to DOM
 */
export const init = (params) => {
  // Clean up the old popup container if it exists
<<<<<<< Updated upstream
  const oldContainerExisted = resetOldContainer()
=======
  resetOldContainer()
>>>>>>> Stashed changes

  /* istanbul ignore if */
  if (isNodeEnv()) {
    error('SweetAlert2 requires document to initialize')
    return
  }

  const container = document.createElement('div')
  container.className = swalClasses.container
<<<<<<< Updated upstream
  if (oldContainerExisted) {
    addClass(container, swalClasses['no-transition'])
  }
  setInnerHtml(container, sweetHTML)
=======
  container.innerHTML = sweetHTML
>>>>>>> Stashed changes

  const targetElement = getTarget(params.target)
  targetElement.appendChild(container)

  setupAccessibility(params)
  setupRTL(targetElement)
  addInputChangeListeners()
}
