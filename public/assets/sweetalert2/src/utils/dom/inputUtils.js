import * as dom from './index.js'
import { swalClasses } from '../classes.js'
import { getChildByClass } from './domUtils.js'
<<<<<<< Updated upstream
import { asPromise, error, hasToPromiseFn, isPromise } from '../utils.js'
=======
import { error, isPromise } from '../utils.js'
>>>>>>> Stashed changes
import { showLoading } from '../../staticMethods/showLoading.js'

export const handleInputOptionsAndValue = (instance, params) => {
  if (params.input === 'select' || params.input === 'radio') {
    handleInputOptions(instance, params)
<<<<<<< Updated upstream
  } else if (
    ['text', 'email', 'number', 'tel', 'textarea'].includes(params.input) &&
    (hasToPromiseFn(params.inputValue) || isPromise(params.inputValue))
  ) {
    showLoading(dom.getConfirmButton())
=======
  } else if (['text', 'email', 'number', 'tel', 'textarea'].includes(params.input) && isPromise(params.inputValue)) {
>>>>>>> Stashed changes
    handleInputValue(instance, params)
  }
}

export const getInputValue = (instance, innerParams) => {
  const input = instance.getInput()
  if (!input) {
    return null
  }
  switch (innerParams.input) {
    case 'checkbox':
      return getCheckboxValue(input)
    case 'radio':
      return getRadioValue(input)
    case 'file':
      return getFileValue(input)
    default:
      return innerParams.inputAutoTrim ? input.value.trim() : input.value
  }
}

const getCheckboxValue = (input) => input.checked ? 1 : 0

const getRadioValue = (input) => input.checked ? input.value : null

const getFileValue = (input) => input.files.length ? (input.getAttribute('multiple') !== null ? input.files : input.files[0]) : null

const handleInputOptions = (instance, params) => {
<<<<<<< Updated upstream
  const popup = dom.getPopup()
  const processInputOptions = (inputOptions) => populateInputOptions[params.input](popup, formatInputOptions(inputOptions), params)
  if (hasToPromiseFn(params.inputOptions) || isPromise(params.inputOptions)) {
    showLoading(dom.getConfirmButton())
    asPromise(params.inputOptions).then((inputOptions) => {
=======
  const content = dom.getContent()
  const processInputOptions = (inputOptions) => populateInputOptions[params.input](content, formatInputOptions(inputOptions), params)
  if (isPromise(params.inputOptions)) {
    showLoading()
    params.inputOptions.then((inputOptions) => {
>>>>>>> Stashed changes
      instance.hideLoading()
      processInputOptions(inputOptions)
    })
  } else if (typeof params.inputOptions === 'object') {
    processInputOptions(params.inputOptions)
  } else {
    error(`Unexpected type of inputOptions! Expected object, Map or Promise, got ${typeof params.inputOptions}`)
  }
}

const handleInputValue = (instance, params) => {
  const input = instance.getInput()
  dom.hide(input)
<<<<<<< Updated upstream
  asPromise(params.inputValue).then((inputValue) => {
=======
  params.inputValue.then((inputValue) => {
>>>>>>> Stashed changes
    input.value = params.input === 'number' ? parseFloat(inputValue) || 0 : `${inputValue}`
    dom.show(input)
    input.focus()
    instance.hideLoading()
  })
    .catch((err) => {
      error(`Error in inputValue promise: ${err}`)
      input.value = ''
      dom.show(input)
      input.focus()
      instance.hideLoading()
    })
}

const populateInputOptions = {
<<<<<<< Updated upstream
  select: (popup, inputOptions, params) => {
    const select = getChildByClass(popup, swalClasses.select)
    const renderOption = (parent, optionLabel, optionValue) => {
      const option = document.createElement('option')
      option.value = optionValue
      dom.setInnerHtml(option, optionLabel)
      option.selected = isSelected(optionValue, params.inputValue)
      parent.appendChild(option)
    }
    inputOptions.forEach(inputOption => {
      const optionValue = inputOption[0]
      const optionLabel = inputOption[1]
      // <optgroup> spec:
      // https://www.w3.org/TR/html401/interact/forms.html#h-17.6
      // "...all OPTGROUP elements must be specified directly within a SELECT element (i.e., groups may not be nested)..."
      // check whether this is a <optgroup>
      if (Array.isArray(optionLabel)) { // if it is an array, then it is an <optgroup>
        const optgroup = document.createElement('optgroup')
        optgroup.label = optionValue
        optgroup.disabled = false // not configurable for now
        select.appendChild(optgroup)
        optionLabel.forEach(o => renderOption(optgroup, o[1], o[0]))
      } else { // case of <option>
        renderOption(select, optionLabel, optionValue)
      }
=======
  select: (content, inputOptions, params) => {
    const select = getChildByClass(content, swalClasses.select)
    inputOptions.forEach(inputOption => {
      const optionValue = inputOption[0]
      const optionLabel = inputOption[1]
      const option = document.createElement('option')
      option.value = optionValue
      option.innerHTML = optionLabel
      if (params.inputValue.toString() === optionValue.toString()) {
        option.selected = true
      }
      select.appendChild(option)
>>>>>>> Stashed changes
    })
    select.focus()
  },

<<<<<<< Updated upstream
  radio: (popup, inputOptions, params) => {
    const radio = getChildByClass(popup, swalClasses.radio)
=======
  radio: (content, inputOptions, params) => {
    const radio = getChildByClass(content, swalClasses.radio)
>>>>>>> Stashed changes
    inputOptions.forEach(inputOption => {
      const radioValue = inputOption[0]
      const radioLabel = inputOption[1]
      const radioInput = document.createElement('input')
      const radioLabelElement = document.createElement('label')
      radioInput.type = 'radio'
      radioInput.name = swalClasses.radio
      radioInput.value = radioValue
<<<<<<< Updated upstream
      if (isSelected(radioValue, params.inputValue)) {
        radioInput.checked = true
      }
      const label = document.createElement('span')
      dom.setInnerHtml(label, radioLabel)
=======
      if (params.inputValue.toString() === radioValue.toString()) {
        radioInput.checked = true
      }
      const label = document.createElement('span')
      label.innerHTML = radioLabel
>>>>>>> Stashed changes
      label.className = swalClasses.label
      radioLabelElement.appendChild(radioInput)
      radioLabelElement.appendChild(label)
      radio.appendChild(radioLabelElement)
    })
    const radios = radio.querySelectorAll('input')
    if (radios.length) {
      radios[0].focus()
    }
  }
}

/**
 * Converts `inputOptions` into an array of `[value, label]`s
 * @param inputOptions
 */
const formatInputOptions = (inputOptions) => {
  const result = []
  if (typeof Map !== 'undefined' && inputOptions instanceof Map) {
    inputOptions.forEach((value, key) => {
<<<<<<< Updated upstream
      let valueFormatted = value
      if (typeof valueFormatted === 'object') { // case of <optgroup>
        valueFormatted = formatInputOptions(valueFormatted)
      }
      result.push([key, valueFormatted])
    })
  } else {
    Object.keys(inputOptions).forEach(key => {
      let valueFormatted = inputOptions[key]
      if (typeof valueFormatted === 'object') { // case of <optgroup>
        valueFormatted = formatInputOptions(valueFormatted)
      }
      result.push([key, valueFormatted])
=======
      result.push([key, value])
    })
  } else {
    Object.keys(inputOptions).forEach(key => {
      result.push([key, inputOptions[key]])
>>>>>>> Stashed changes
    })
  }
  return result
}
<<<<<<< Updated upstream

const isSelected = (optionValue, inputValue) => {
  return inputValue && inputValue.toString() === optionValue.toString()
}
=======
>>>>>>> Stashed changes
