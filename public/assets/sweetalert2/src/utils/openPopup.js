import * as dom from './dom/index.js'
import { swalClasses } from './classes.js'
import { fixScrollbar } from './scrollbarFix.js'
import { iOSfix } from './iosFix.js'
<<<<<<< Updated upstream
import { setAriaHidden } from './aria.js'
import globalState from '../globalState.js'

export const SHOW_CLASS_TIMEOUT = 10

/**
 * Open popup, add necessary classes and styles, fix scrollbar
 *
 * @param params
=======
import { IEfix } from './ieFix.js'
import { setAriaHidden } from './aria.js'
import globalState from '../globalState.js'

/**
 * Open popup, add necessary classes and styles, fix scrollbar
 *
 * @param {Array} params
>>>>>>> Stashed changes
 */
export const openPopup = (params) => {
  const container = dom.getContainer()
  const popup = dom.getPopup()

<<<<<<< Updated upstream
  if (typeof params.willOpen === 'function') {
    params.willOpen(popup)
  }

  const bodyStyles = window.getComputedStyle(document.body)
  const initialBodyOverflow = bodyStyles.overflowY
  addClasses(container, popup, params)

  // scrolling is 'hidden' until animation is done, after that 'auto'
  setTimeout(() => {
    setScrollingVisibility(container, popup)
  }, SHOW_CLASS_TIMEOUT)

  if (dom.isModal()) {
    fixScrollContainer(container, params.scrollbarPadding, initialBodyOverflow)
    setAriaHidden()
=======
  if (typeof params.onBeforeOpen === 'function') {
    params.onBeforeOpen(popup)
  }

  addClasses(container, popup, params)

  // scrolling is 'hidden' until animation is done, after that 'auto'
  setScrollingVisibility(container, popup)

  if (dom.isModal()) {
    fixScrollContainer(container, params.scrollbarPadding)
>>>>>>> Stashed changes
  }

  if (!dom.isToast() && !globalState.previousActiveElement) {
    globalState.previousActiveElement = document.activeElement
  }
<<<<<<< Updated upstream

  if (typeof params.didOpen === 'function') {
    setTimeout(() => params.didOpen(popup))
  }

  dom.removeClass(container, swalClasses['no-transition'])
}

const swalOpenAnimationFinished = (event) => {
=======
  if (typeof params.onOpen === 'function') {
    setTimeout(() => params.onOpen(popup))
  }
}

function swalOpenAnimationFinished (event) {
>>>>>>> Stashed changes
  const popup = dom.getPopup()
  if (event.target !== popup) {
    return
  }
  const container = dom.getContainer()
  popup.removeEventListener(dom.animationEndEvent, swalOpenAnimationFinished)
  container.style.overflowY = 'auto'
}

const setScrollingVisibility = (container, popup) => {
  if (dom.animationEndEvent && dom.hasCssAnimation(popup)) {
    container.style.overflowY = 'hidden'
    popup.addEventListener(dom.animationEndEvent, swalOpenAnimationFinished)
  } else {
    container.style.overflowY = 'auto'
  }
}

<<<<<<< Updated upstream
const fixScrollContainer = (container, scrollbarPadding, initialBodyOverflow) => {
  iOSfix()

  if (scrollbarPadding && initialBodyOverflow !== 'hidden') {
=======
const fixScrollContainer = (container, scrollbarPadding) => {
  iOSfix()
  IEfix()
  setAriaHidden()

  if (scrollbarPadding) {
>>>>>>> Stashed changes
    fixScrollbar()
  }

  // sweetalert2/issues/1247
  setTimeout(() => {
    container.scrollTop = 0
  })
}

const addClasses = (container, popup, params) => {
  dom.addClass(container, params.showClass.backdrop)
<<<<<<< Updated upstream
  // the workaround with setting/unsetting opacity is needed for #2019 and 2059
  popup.style.setProperty('opacity', '0', 'important')
  dom.show(popup, 'grid')
  setTimeout(() => {
    // Animate popup right after showing it
    dom.addClass(popup, params.showClass.popup)
    // and remove the opacity workaround
    popup.style.removeProperty('opacity')
  }, SHOW_CLASS_TIMEOUT) // 10ms in order to fix #2062
=======
  dom.show(popup)
  // Animate popup right after showing it
  dom.addClass(popup, params.showClass.popup)
>>>>>>> Stashed changes

  dom.addClass([document.documentElement, document.body], swalClasses.shown)
  if (params.heightAuto && params.backdrop && !params.toast) {
    dom.addClass([document.documentElement, document.body], swalClasses['height-auto'])
  }
}
