import { swalClasses } from '../../classes.js'
import { warn, error, isPromise } from '../../utils.js'
import * as dom from '../../dom/index.js'
import privateProps from '../../../privateProps.js'

const inputTypes = ['input', 'file', 'range', 'select', 'radio', 'checkbox', 'textarea']

export const renderInput = (instance, params) => {
<<<<<<< Updated upstream
  const popup = dom.getPopup()
=======
  const content = dom.getContent()
>>>>>>> Stashed changes
  const innerParams = privateProps.innerParams.get(instance)
  const rerender = !innerParams || params.input !== innerParams.input

  inputTypes.forEach((inputType) => {
    const inputClass = swalClasses[inputType]
<<<<<<< Updated upstream
    const inputContainer = dom.getChildByClass(popup, inputClass)
=======
    const inputContainer = dom.getChildByClass(content, inputClass)
>>>>>>> Stashed changes

    // set attributes
    setAttributes(inputType, params.inputAttributes)

    // set class
    inputContainer.className = inputClass

    if (rerender) {
      dom.hide(inputContainer)
    }
  })

  if (params.input) {
    if (rerender) {
      showInput(params)
    }
    // set custom class
    setCustomClass(params)
  }
}

const showInput = (params) => {
  if (!renderInputType[params.input]) {
    return error(`Unexpected type of input! Expected "text", "email", "password", "number", "tel", "select", "radio", "checkbox", "textarea", "file" or "url", got "${params.input}"`)
  }

  const inputContainer = getInputContainer(params.input)
  const input = renderInputType[params.input](inputContainer, params)
  dom.show(input)

  // input autofocus
  setTimeout(() => {
    dom.focusInput(input)
  })
}

const removeAttributes = (input) => {
  for (let i = 0; i < input.attributes.length; i++) {
    const attrName = input.attributes[i].name
    if (!['type', 'value', 'style'].includes(attrName)) {
      input.removeAttribute(attrName)
    }
  }
}

const setAttributes = (inputType, inputAttributes) => {
<<<<<<< Updated upstream
  const input = dom.getInput(dom.getPopup(), inputType)
=======
  const input = dom.getInput(dom.getContent(), inputType)
>>>>>>> Stashed changes
  if (!input) {
    return
  }

  removeAttributes(input)

  for (const attr in inputAttributes) {
<<<<<<< Updated upstream
=======
    // Do not set a placeholder for <input type="range">
    // it'll crash Edge, #1298
    if (inputType === 'range' && attr === 'placeholder') {
      continue
    }

>>>>>>> Stashed changes
    input.setAttribute(attr, inputAttributes[attr])
  }
}

const setCustomClass = (params) => {
  const inputContainer = getInputContainer(params.input)
  if (params.customClass) {
    dom.addClass(inputContainer, params.customClass.input)
  }
}

const setInputPlaceholder = (input, params) => {
  if (!input.placeholder || params.inputPlaceholder) {
    input.placeholder = params.inputPlaceholder
  }
}

<<<<<<< Updated upstream
const setInputLabel = (input, prependTo, params) => {
  if (params.inputLabel) {
    input.id = swalClasses.input
    const label = document.createElement('label')
    const labelClass = swalClasses['input-label']
    label.setAttribute('for', input.id)
    label.className = labelClass
    dom.addClass(label, params.customClass.inputLabel)
    label.innerText = params.inputLabel
    prependTo.insertAdjacentElement('beforebegin', label)
  }
}

const getInputContainer = (inputType) => {
  const inputClass = swalClasses[inputType] ? swalClasses[inputType] : swalClasses.input
  return dom.getChildByClass(dom.getPopup(), inputClass)
=======
const getInputContainer = (inputType) => {
  const inputClass = swalClasses[inputType] ? swalClasses[inputType] : swalClasses.input
  return dom.getChildByClass(dom.getContent(), inputClass)
>>>>>>> Stashed changes
}

const renderInputType = {}

renderInputType.text =
renderInputType.email =
renderInputType.password =
renderInputType.number =
renderInputType.tel =
renderInputType.url = (input, params) => {
  if (typeof params.inputValue === 'string' || typeof params.inputValue === 'number') {
    input.value = params.inputValue
  } else if (!isPromise(params.inputValue)) {
    warn(`Unexpected type of inputValue! Expected "string", "number" or "Promise", got "${typeof params.inputValue}"`)
  }
<<<<<<< Updated upstream
  setInputLabel(input, input, params)
=======
>>>>>>> Stashed changes
  setInputPlaceholder(input, params)
  input.type = params.input
  return input
}

renderInputType.file = (input, params) => {
<<<<<<< Updated upstream
  setInputLabel(input, input, params)
=======
>>>>>>> Stashed changes
  setInputPlaceholder(input, params)
  return input
}

renderInputType.range = (range, params) => {
  const rangeInput = range.querySelector('input')
  const rangeOutput = range.querySelector('output')
  rangeInput.value = params.inputValue
  rangeInput.type = params.input
  rangeOutput.value = params.inputValue
<<<<<<< Updated upstream
  setInputLabel(rangeInput, range, params)
=======
>>>>>>> Stashed changes
  return range
}

renderInputType.select = (select, params) => {
<<<<<<< Updated upstream
  select.textContent = ''
  if (params.inputPlaceholder) {
    const placeholder = document.createElement('option')
    dom.setInnerHtml(placeholder, params.inputPlaceholder)
=======
  select.innerHTML = ''
  if (params.inputPlaceholder) {
    const placeholder = document.createElement('option')
    placeholder.innerHTML = params.inputPlaceholder
>>>>>>> Stashed changes
    placeholder.value = ''
    placeholder.disabled = true
    placeholder.selected = true
    select.appendChild(placeholder)
  }
<<<<<<< Updated upstream
  setInputLabel(select, select, params)
=======
>>>>>>> Stashed changes
  return select
}

renderInputType.radio = (radio) => {
<<<<<<< Updated upstream
  radio.textContent = ''
=======
  radio.innerHTML = ''
>>>>>>> Stashed changes
  return radio
}

renderInputType.checkbox = (checkboxContainer, params) => {
<<<<<<< Updated upstream
  const checkbox = dom.getInput(dom.getPopup(), 'checkbox')
=======
  const checkbox = dom.getInput(dom.getContent(), 'checkbox')
>>>>>>> Stashed changes
  checkbox.value = 1
  checkbox.id = swalClasses.checkbox
  checkbox.checked = Boolean(params.inputValue)
  const label = checkboxContainer.querySelector('span')
<<<<<<< Updated upstream
  dom.setInnerHtml(label, params.inputPlaceholder)
=======
  label.innerHTML = params.inputPlaceholder
>>>>>>> Stashed changes
  return checkboxContainer
}

renderInputType.textarea = (textarea, params) => {
  textarea.value = params.inputValue
  setInputPlaceholder(textarea, params)
<<<<<<< Updated upstream
  setInputLabel(textarea, textarea, params)

  const getMargin = (el) => parseInt(window.getComputedStyle(el).marginLeft) + parseInt(window.getComputedStyle(el).marginRight)

  if ('MutationObserver' in window) { // #1699
    const initialPopupWidth = parseInt(window.getComputedStyle(dom.getPopup()).width)
    const outputsize = () => {
      const textareaWidth = textarea.offsetWidth + getMargin(textarea)
      if (textareaWidth > initialPopupWidth) {
        dom.getPopup().style.width = `${textareaWidth}px`
=======

  if ('MutationObserver' in window) { // #1699
    const initialPopupWidth = parseInt(window.getComputedStyle(dom.getPopup()).width)
    const popupPadding = parseInt(window.getComputedStyle(dom.getPopup()).paddingLeft) + parseInt(window.getComputedStyle(dom.getPopup()).paddingRight)
    const outputsize = () => {
      const contentWidth = textarea.offsetWidth + popupPadding
      if (contentWidth > initialPopupWidth) {
        dom.getPopup().style.width = `${contentWidth}px`
>>>>>>> Stashed changes
      } else {
        dom.getPopup().style.width = null
      }
    }
    new MutationObserver(outputsize).observe(textarea, {
      attributes: true, attributeFilter: ['style']
    })
  }

  return textarea
}
