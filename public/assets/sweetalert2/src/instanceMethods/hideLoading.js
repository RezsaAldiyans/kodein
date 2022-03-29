import * as dom from '../utils/dom/index.js'
import { swalClasses } from '../utils/classes.js'
import privateProps from '../privateProps.js'

/**
<<<<<<< Updated upstream
 * Hides loader and shows back the button which was hidden by .showLoading()
=======
 * Enables buttons and hide loader.
>>>>>>> Stashed changes
 */
function hideLoading () {
  // do nothing if popup is closed
  const innerParams = privateProps.innerParams.get(this)
  if (!innerParams) {
    return
  }
  const domCache = privateProps.domCache.get(this)
<<<<<<< Updated upstream
  dom.hide(domCache.loader)
  if (dom.isToast()) {
    if (innerParams.icon) {
      dom.show(dom.getIcon())
    }
  } else {
    showRelatedButton(domCache)
=======
  if (!innerParams.showConfirmButton) {
    dom.hide(domCache.confirmButton)
    if (!innerParams.showCancelButton) {
      dom.hide(domCache.actions)
    }
>>>>>>> Stashed changes
  }
  dom.removeClass([domCache.popup, domCache.actions], swalClasses.loading)
  domCache.popup.removeAttribute('aria-busy')
  domCache.popup.removeAttribute('data-loading')
  domCache.confirmButton.disabled = false
<<<<<<< Updated upstream
  domCache.denyButton.disabled = false
  domCache.cancelButton.disabled = false
}

const showRelatedButton = (domCache) => {
  const buttonToReplace = domCache.popup.getElementsByClassName(domCache.loader.getAttribute('data-button-to-replace'))
  if (buttonToReplace.length) {
    dom.show(buttonToReplace[0], 'inline-block')
  } else if (dom.allButtonsAreHidden()) {
    dom.hide(domCache.actions)
  }
}

=======
  domCache.cancelButton.disabled = false
}

>>>>>>> Stashed changes
export {
  hideLoading,
  hideLoading as disableLoading
}
