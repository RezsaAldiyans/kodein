import { undoScrollbar } from '../utils/scrollbarFix.js'
import { undoIOSfix } from '../utils/iosFix.js'
<<<<<<< Updated upstream
=======
import { undoIEfix } from '../utils/ieFix.js'
>>>>>>> Stashed changes
import { unsetAriaHidden } from '../utils/aria.js'
import * as dom from '../utils/dom/index.js'
import { swalClasses } from '../utils/classes.js'
import globalState, { restoreActiveElement } from '../globalState.js'
import privateProps from '../privateProps.js'
import privateMethods from '../privateMethods.js'

/*
 * Instance method to close sweetAlert
 */

<<<<<<< Updated upstream
function removePopupAndResetState (instance, container, returnFocus, didClose) {
  if (dom.isToast()) {
    triggerDidCloseAndDispose(instance, didClose)
  } else {
    restoreActiveElement(returnFocus).then(() => triggerDidCloseAndDispose(instance, didClose))
=======
function removePopupAndResetState (instance, container, isToast, onAfterClose) {
  if (isToast) {
    triggerOnAfterCloseAndDispose(instance, onAfterClose)
  } else {
    restoreActiveElement().then(() => triggerOnAfterCloseAndDispose(instance, onAfterClose))
>>>>>>> Stashed changes
    globalState.keydownTarget.removeEventListener('keydown', globalState.keydownHandler, { capture: globalState.keydownListenerCapture })
    globalState.keydownHandlerAdded = false
  }

<<<<<<< Updated upstream
  const isSafari = /^((?!chrome|android).)*safari/i.test(navigator.userAgent)
  // workaround for #2088
  // for some reason removing the container in Safari will scroll the document to bottom
  if (isSafari) {
    container.setAttribute('style', 'display:none !important')
    container.removeAttribute('class')
    container.innerHTML = ''
  } else {
    container.remove()
=======
  if (container.parentNode) {
    container.parentNode.removeChild(container)
>>>>>>> Stashed changes
  }

  if (dom.isModal()) {
    undoScrollbar()
    undoIOSfix()
<<<<<<< Updated upstream
=======
    undoIEfix()
>>>>>>> Stashed changes
    unsetAriaHidden()
  }

  removeBodyClasses()
}

function removeBodyClasses () {
  dom.removeClass(
    [document.documentElement, document.body],
    [
      swalClasses.shown,
      swalClasses['height-auto'],
      swalClasses['no-backdrop'],
      swalClasses['toast-shown'],
<<<<<<< Updated upstream
=======
      swalClasses['toast-column']
>>>>>>> Stashed changes
    ]
  )
}

export function close (resolveValue) {
  const popup = dom.getPopup()

  if (!popup) {
    return
  }

<<<<<<< Updated upstream
  resolveValue = prepareResolveValue(resolveValue)

=======
>>>>>>> Stashed changes
  const innerParams = privateProps.innerParams.get(this)
  if (!innerParams || dom.hasClass(popup, innerParams.hideClass.popup)) {
    return
  }
  const swalPromiseResolve = privateMethods.swalPromiseResolve.get(this)

  dom.removeClass(popup, innerParams.showClass.popup)
  dom.addClass(popup, innerParams.hideClass.popup)

  const backdrop = dom.getContainer()
  dom.removeClass(backdrop, innerParams.showClass.backdrop)
  dom.addClass(backdrop, innerParams.hideClass.backdrop)

  handlePopupAnimation(this, popup, innerParams)

  // Resolve Swal promise
<<<<<<< Updated upstream
  swalPromiseResolve(resolveValue)
}

const prepareResolveValue = (resolveValue) => {
  // When user calls Swal.close()
  if (typeof resolveValue === 'undefined') {
    return {
      isConfirmed: false,
      isDenied: false,
      isDismissed: true,
    }
  }

  return Object.assign({
    isConfirmed: false,
    isDenied: false,
    isDismissed: false,
  }, resolveValue)
=======
  swalPromiseResolve(resolveValue || {})
>>>>>>> Stashed changes
}

const handlePopupAnimation = (instance, popup, innerParams) => {
  const container = dom.getContainer()
  // If animation is supported, animate
  const animationIsSupported = dom.animationEndEvent && dom.hasCssAnimation(popup)

<<<<<<< Updated upstream
  if (typeof innerParams.willClose === 'function') {
    innerParams.willClose(popup)
  }

  if (animationIsSupported) {
    animatePopup(instance, popup, container, innerParams.returnFocus, innerParams.didClose)
  } else {
    // Otherwise, remove immediately
    removePopupAndResetState(instance, container, innerParams.returnFocus, innerParams.didClose)
  }
}

const animatePopup = (instance, popup, container, returnFocus, didClose) => {
  globalState.swalCloseEventFinishedCallback = removePopupAndResetState.bind(null, instance, container, returnFocus, didClose)
=======
  const { onClose, onAfterClose } = innerParams

  if (onClose !== null && typeof onClose === 'function') {
    onClose(popup)
  }

  if (animationIsSupported) {
    animatePopup(instance, popup, container, onAfterClose)
  } else {
    // Otherwise, remove immediately
    removePopupAndResetState(instance, container, dom.isToast(), onAfterClose)
  }
}

const animatePopup = (instance, popup, container, onAfterClose) => {
  globalState.swalCloseEventFinishedCallback = removePopupAndResetState.bind(null, instance, container, dom.isToast(), onAfterClose)
>>>>>>> Stashed changes
  popup.addEventListener(dom.animationEndEvent, function (e) {
    if (e.target === popup) {
      globalState.swalCloseEventFinishedCallback()
      delete globalState.swalCloseEventFinishedCallback
    }
  })
}

<<<<<<< Updated upstream
const triggerDidCloseAndDispose = (instance, didClose) => {
  setTimeout(() => {
    if (typeof didClose === 'function') {
      didClose.bind(instance.params)()
=======
const triggerOnAfterCloseAndDispose = (instance, onAfterClose) => {
  setTimeout(() => {
    if (typeof onAfterClose === 'function') {
      onAfterClose()
>>>>>>> Stashed changes
    }
    instance._destroy()
  })
}

export {
  close as closePopup,
  close as closeModal,
  close as closeToast
}
