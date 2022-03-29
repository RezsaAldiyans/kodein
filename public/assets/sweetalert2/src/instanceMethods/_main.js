import defaultParams, { showWarningsForParams } from '../utils/params.js'
import * as dom from '../utils/dom/index.js'
<<<<<<< Updated upstream
import Timer from '../utils/Timer.js'
import { callIfFunction } from '../utils/utils.js'
import setParameters from '../utils/setParameters.js'
import { getTemplateParams } from '../utils/getTemplateParams.js'
=======
import { swalClasses } from '../utils/classes.js'
import Timer from '../utils/Timer.js'
import { callIfFunction } from '../utils/utils.js'
import setParameters from '../utils/setParameters.js'
>>>>>>> Stashed changes
import globalState from '../globalState.js'
import { openPopup } from '../utils/openPopup.js'
import privateProps from '../privateProps.js'
import privateMethods from '../privateMethods.js'
import { handleInputOptionsAndValue } from '../utils/dom/inputUtils.js'
<<<<<<< Updated upstream
import { handleConfirmButtonClick, handleDenyButtonClick, handleCancelButtonClick } from './buttons-handlers.js'
=======
import { handleConfirmButtonClick, handleCancelButtonClick } from './buttons-handlers.js'
>>>>>>> Stashed changes
import { addKeydownHandler, setFocus } from './keydown-handler.js'
import { handlePopupClick } from './popup-click-handler.js'
import { DismissReason } from '../utils/DismissReason.js'

<<<<<<< Updated upstream
export function _main (userParams, mixinParams = {}) {
  showWarningsForParams(Object.assign({}, mixinParams, userParams))
=======
export function _main (userParams) {
  showWarningsForParams(userParams)
>>>>>>> Stashed changes

  if (globalState.currentInstance) {
    globalState.currentInstance._destroy()
  }
  globalState.currentInstance = this

<<<<<<< Updated upstream
  const innerParams = prepareParams(userParams, mixinParams)
=======
  const innerParams = prepareParams(userParams)
>>>>>>> Stashed changes
  setParameters(innerParams)
  Object.freeze(innerParams)

  // clear the previous timer
  if (globalState.timeout) {
    globalState.timeout.stop()
    delete globalState.timeout
  }

  // clear the restore focus timeout
  clearTimeout(globalState.restoreFocusTimeout)

  const domCache = populateDomCache(this)

  dom.render(this, innerParams)

  privateProps.innerParams.set(this, innerParams)

  return swalPromise(this, domCache, innerParams)
}

<<<<<<< Updated upstream
const prepareParams = (userParams, mixinParams) => {
  const templateParams = getTemplateParams(userParams)
  const params = Object.assign({}, defaultParams, mixinParams, templateParams, userParams) // precedence is described in #2131
  params.showClass = Object.assign({}, defaultParams.showClass, params.showClass)
  params.hideClass = Object.assign({}, defaultParams.hideClass, params.hideClass)
=======
const prepareParams = (userParams) => {
  const showClass = Object.assign({}, defaultParams.showClass, userParams.showClass)
  const hideClass = Object.assign({}, defaultParams.hideClass, userParams.hideClass)
  const params = Object.assign({}, defaultParams, userParams)
  params.showClass = showClass
  params.hideClass = hideClass
  // @deprecated
  if (userParams.animation === false) {
    params.showClass = {
      popup: '',
      backdrop: 'swal2-backdrop-show swal2-noanimation'
    }
    params.hideClass = {}
  }
>>>>>>> Stashed changes
  return params
}

const swalPromise = (instance, domCache, innerParams) => {
  return new Promise((resolve) => {
    // functions to handle all closings/dismissals
    const dismissWith = (dismiss) => {
<<<<<<< Updated upstream
      instance.closePopup({ isDismissed: true, dismiss })
=======
      instance.closePopup({ dismiss })
>>>>>>> Stashed changes
    }

    privateMethods.swalPromiseResolve.set(instance, resolve)

<<<<<<< Updated upstream
    domCache.confirmButton.onclick = () => handleConfirmButtonClick(instance, innerParams)
    domCache.denyButton.onclick = () => handleDenyButtonClick(instance, innerParams)
=======
    setupTimer(globalState, innerParams, dismissWith)

    domCache.confirmButton.onclick = () => handleConfirmButtonClick(instance, innerParams)
>>>>>>> Stashed changes
    domCache.cancelButton.onclick = () => handleCancelButtonClick(instance, dismissWith)

    domCache.closeButton.onclick = () => dismissWith(DismissReason.close)

    handlePopupClick(instance, domCache, dismissWith)

    addKeydownHandler(instance, globalState, innerParams, dismissWith)

<<<<<<< Updated upstream
=======
    if (innerParams.toast && (innerParams.input || innerParams.footer || innerParams.showCloseButton)) {
      dom.addClass(document.body, swalClasses['toast-column'])
    } else {
      dom.removeClass(document.body, swalClasses['toast-column'])
    }

>>>>>>> Stashed changes
    handleInputOptionsAndValue(instance, innerParams)

    openPopup(innerParams)

<<<<<<< Updated upstream
    setupTimer(globalState, innerParams, dismissWith)

    initFocus(domCache, innerParams)

    // Scroll container to top on open (#1247, #1946)
    setTimeout(() => {
      domCache.container.scrollTop = 0
    })
=======
    initFocus(domCache, innerParams)

    // Scroll container to top on open (#1247)
    domCache.container.scrollTop = 0
>>>>>>> Stashed changes
  })
}

const populateDomCache = (instance) => {
  const domCache = {
    popup: dom.getPopup(),
    container: dom.getContainer(),
<<<<<<< Updated upstream
    actions: dom.getActions(),
    confirmButton: dom.getConfirmButton(),
    denyButton: dom.getDenyButton(),
    cancelButton: dom.getCancelButton(),
    loader: dom.getLoader(),
=======
    content: dom.getContent(),
    actions: dom.getActions(),
    confirmButton: dom.getConfirmButton(),
    cancelButton: dom.getCancelButton(),
>>>>>>> Stashed changes
    closeButton: dom.getCloseButton(),
    validationMessage: dom.getValidationMessage(),
    progressSteps: dom.getProgressSteps()
  }
  privateProps.domCache.set(instance, domCache)

  return domCache
}

const setupTimer = (globalState, innerParams, dismissWith) => {
  const timerProgressBar = dom.getTimerProgressBar()
  dom.hide(timerProgressBar)
  if (innerParams.timer) {
    globalState.timeout = new Timer(() => {
      dismissWith('timer')
      delete globalState.timeout
    }, innerParams.timer)
    if (innerParams.timerProgressBar) {
      dom.show(timerProgressBar)
      setTimeout(() => {
<<<<<<< Updated upstream
        if (globalState.timeout && globalState.timeout.running) { // timer can be already stopped or unset at this point
          dom.animateTimerProgressBar(innerParams.timer)
        }
=======
        dom.animateTimerProgressBar(innerParams.timer)
>>>>>>> Stashed changes
      })
    }
  }
}

const initFocus = (domCache, innerParams) => {
  if (innerParams.toast) {
    return
  }

  if (!callIfFunction(innerParams.allowEnterKey)) {
    return blurActiveElement()
  }

<<<<<<< Updated upstream
  if (!focusButton(domCache, innerParams)) {
    setFocus(innerParams, -1, 1)
  }
}

const focusButton = (domCache, innerParams) => {
  if (innerParams.focusDeny && dom.isVisible(domCache.denyButton)) {
    domCache.denyButton.focus()
    return true
  }

  if (innerParams.focusCancel && dom.isVisible(domCache.cancelButton)) {
    domCache.cancelButton.focus()
    return true
  }

  if (innerParams.focusConfirm && dom.isVisible(domCache.confirmButton)) {
    domCache.confirmButton.focus()
    return true
  }

  return false
=======
  if (innerParams.focusCancel && dom.isVisible(domCache.cancelButton)) {
    return domCache.cancelButton.focus()
  }

  if (innerParams.focusConfirm && dom.isVisible(domCache.confirmButton)) {
    return domCache.confirmButton.focus()
  }

  setFocus(innerParams, -1, 1)
>>>>>>> Stashed changes
}

const blurActiveElement = () => {
  if (document.activeElement && typeof document.activeElement.blur === 'function') {
    document.activeElement.blur()
  }
}
