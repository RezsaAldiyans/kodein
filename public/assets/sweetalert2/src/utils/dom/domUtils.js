<<<<<<< Updated upstream
import { getTimerProgressBar, getConfirmButton, getDenyButton, getCancelButton } from './getters.js'
import { swalClasses, iconTypes } from '../classes.js'
import { toArray, warn } from '../utils.js'
=======
import { getTimerProgressBar } from './getters.js'
import { swalClasses, iconTypes } from '../classes.js'
import { toArray, objectValues, warn } from '../utils.js'
>>>>>>> Stashed changes

// Remember state in cases where opening and handling a modal will fiddle with it.
export const states = {
  previousBodyPadding: null
}

<<<<<<< Updated upstream
export const setInnerHtml = (elem, html) => { // #1926
  elem.textContent = ''
  if (html) {
    const parser = new DOMParser()
    const parsed = parser.parseFromString(html, `text/html`)
    toArray(parsed.querySelector('head').childNodes).forEach((child) => {
      elem.appendChild(child)
    })
    toArray(parsed.querySelector('body').childNodes).forEach((child) => {
      elem.appendChild(child)
    })
  }
}

=======
>>>>>>> Stashed changes
export const hasClass = (elem, className) => {
  if (!className) {
    return false
  }
  const classList = className.split(/\s+/)
  for (let i = 0; i < classList.length; i++) {
    if (!elem.classList.contains(classList[i])) {
      return false
    }
  }
  return true
}

const removeCustomClasses = (elem, params) => {
  toArray(elem.classList).forEach(className => {
    if (
<<<<<<< Updated upstream
      !Object.values(swalClasses).includes(className) &&
      !Object.values(iconTypes).includes(className) &&
      !Object.values(params.showClass).includes(className)
=======
      !objectValues(swalClasses).includes(className) &&
      !objectValues(iconTypes).includes(className) &&
      !objectValues(params.showClass).includes(className)
>>>>>>> Stashed changes
    ) {
      elem.classList.remove(className)
    }
  })
}

export const applyCustomClass = (elem, params, className) => {
  removeCustomClasses(elem, params)

  if (params.customClass && params.customClass[className]) {
    if (typeof params.customClass[className] !== 'string' && !params.customClass[className].forEach) {
      return warn(`Invalid type of customClass.${className}! Expected string or iterable object, got "${typeof params.customClass[className]}"`)
    }

    addClass(elem, params.customClass[className])
  }
}

<<<<<<< Updated upstream
export const getInput = (popup, inputType) => {
=======
export function getInput (content, inputType) {
>>>>>>> Stashed changes
  if (!inputType) {
    return null
  }
  switch (inputType) {
    case 'select':
    case 'textarea':
    case 'file':
<<<<<<< Updated upstream
      return getChildByClass(popup, swalClasses[inputType])
    case 'checkbox':
      return popup.querySelector(`.${swalClasses.checkbox} input`)
    case 'radio':
      return popup.querySelector(`.${swalClasses.radio} input:checked`) ||
        popup.querySelector(`.${swalClasses.radio} input:first-child`)
    case 'range':
      return popup.querySelector(`.${swalClasses.range} input`)
    default:
      return getChildByClass(popup, swalClasses.input)
=======
      return getChildByClass(content, swalClasses[inputType])
    case 'checkbox':
      return content.querySelector(`.${swalClasses.checkbox} input`)
    case 'radio':
      return content.querySelector(`.${swalClasses.radio} input:checked`) ||
        content.querySelector(`.${swalClasses.radio} input:first-child`)
    case 'range':
      return content.querySelector(`.${swalClasses.range} input`)
    default:
      return getChildByClass(content, swalClasses.input)
>>>>>>> Stashed changes
  }
}

export const focusInput = (input) => {
  input.focus()

  // place cursor at end of text in text input
  if (input.type !== 'file') {
    // http://stackoverflow.com/a/2345915
    const val = input.value
    input.value = ''
    input.value = val
  }
}

export const toggleClass = (target, classList, condition) => {
  if (!target || !classList) {
    return
  }
  if (typeof classList === 'string') {
    classList = classList.split(/\s+/).filter(Boolean)
  }
  classList.forEach((className) => {
    if (target.forEach) {
      target.forEach((elem) => {
        condition ? elem.classList.add(className) : elem.classList.remove(className)
      })
    } else {
      condition ? target.classList.add(className) : target.classList.remove(className)
    }
  })
}

export const addClass = (target, classList) => {
  toggleClass(target, classList, true)
}

export const removeClass = (target, classList) => {
  toggleClass(target, classList, false)
}

export const getChildByClass = (elem, className) => {
  for (let i = 0; i < elem.childNodes.length; i++) {
    if (hasClass(elem.childNodes[i], className)) {
      return elem.childNodes[i]
    }
  }
}

export const applyNumericalStyle = (elem, property, value) => {
<<<<<<< Updated upstream
  if (value === `${parseInt(value)}`) {
    value = parseInt(value)
  }
=======
>>>>>>> Stashed changes
  if (value || parseInt(value) === 0) {
    elem.style[property] = (typeof value === 'number') ? `${value}px` : value
  } else {
    elem.style.removeProperty(property)
  }
}

export const show = (elem, display = 'flex') => {
<<<<<<< Updated upstream
=======
  elem.style.opacity = ''
>>>>>>> Stashed changes
  elem.style.display = display
}

export const hide = (elem) => {
<<<<<<< Updated upstream
  elem.style.display = 'none'
}

export const setStyle = (parent, selector, property, value) => {
  const el = parent.querySelector(selector)
  if (el) {
    el.style[property] = value
  }
}

=======
  elem.style.opacity = ''
  elem.style.display = 'none'
}

>>>>>>> Stashed changes
export const toggle = (elem, condition, display) => {
  condition ? show(elem, display) : hide(elem)
}

// borrowed from jquery $(elem).is(':visible') implementation
export const isVisible = (elem) => !!(elem && (elem.offsetWidth || elem.offsetHeight || elem.getClientRects().length))

<<<<<<< Updated upstream
export const allButtonsAreHidden = () => !isVisible(getConfirmButton()) && !isVisible(getDenyButton()) && !isVisible(getCancelButton())

=======
/* istanbul ignore next */
>>>>>>> Stashed changes
export const isScrollable = (elem) => !!(elem.scrollHeight > elem.clientHeight)

// borrowed from https://stackoverflow.com/a/46352119
export const hasCssAnimation = (elem) => {
  const style = window.getComputedStyle(elem)

  const animDuration = parseFloat(style.getPropertyValue('animation-duration') || '0')
  const transDuration = parseFloat(style.getPropertyValue('transition-duration') || '0')

  return animDuration > 0 || transDuration > 0
}

<<<<<<< Updated upstream
=======
export const contains = (haystack, needle) => {
  if (typeof haystack.contains === 'function') {
    return haystack.contains(needle)
  }
}

>>>>>>> Stashed changes
export const animateTimerProgressBar = (timer, reset = false) => {
  const timerProgressBar = getTimerProgressBar()
  if (isVisible(timerProgressBar)) {
    if (reset) {
      timerProgressBar.style.transition = 'none'
      timerProgressBar.style.width = '100%'
    }
    setTimeout(() => {
      timerProgressBar.style.transition = `width ${timer / 1000}s linear`
      timerProgressBar.style.width = '0%'
    }, 10)
  }
}

export const stopTimerProgressBar = () => {
  const timerProgressBar = getTimerProgressBar()
  const timerProgressBarWidth = parseInt(window.getComputedStyle(timerProgressBar).width)
  timerProgressBar.style.removeProperty('transition')
  timerProgressBar.style.width = '100%'
  const timerProgressBarFullWidth = parseInt(window.getComputedStyle(timerProgressBar).width)
  const timerProgressBarPercent = parseInt(timerProgressBarWidth / timerProgressBarFullWidth * 100)
  timerProgressBar.style.removeProperty('transition')
  timerProgressBar.style.width = `${timerProgressBarPercent}%`
}
