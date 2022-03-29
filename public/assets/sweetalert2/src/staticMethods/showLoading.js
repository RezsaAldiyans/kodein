import * as dom from '../utils/dom/index.js'
import Swal from '../sweetalert2.js'
import { swalClasses } from '../utils/classes.js'

/**
<<<<<<< Updated upstream
 * Shows loader (spinner), this is useful with AJAX requests.
 * By default the loader be shown instead of the "Confirm" button.
 */
const showLoading = (buttonToReplace) => {
=======
 * Show spinner instead of Confirm button
 */
const showLoading = () => {
>>>>>>> Stashed changes
  let popup = dom.getPopup()
  if (!popup) {
    Swal.fire()
  }
  popup = dom.getPopup()
<<<<<<< Updated upstream
  const loader = dom.getLoader()

  if (dom.isToast()) {
    dom.hide(dom.getIcon())
  } else {
    replaceButton(popup, buttonToReplace)
  }
  dom.show(loader)
=======
  const actions = dom.getActions()
  const confirmButton = dom.getConfirmButton()

  dom.show(actions)
  dom.show(confirmButton, 'inline-block')
  dom.addClass([popup, actions], swalClasses.loading)
  confirmButton.disabled = true
>>>>>>> Stashed changes

  popup.setAttribute('data-loading', true)
  popup.setAttribute('aria-busy', true)
  popup.focus()
}

<<<<<<< Updated upstream
const replaceButton = (popup, buttonToReplace) => {
  const actions = dom.getActions()
  const loader = dom.getLoader()

  if (!buttonToReplace && dom.isVisible(dom.getConfirmButton())) {
    buttonToReplace = dom.getConfirmButton()
  }

  dom.show(actions)
  if (buttonToReplace) {
    dom.hide(buttonToReplace)
    loader.setAttribute('data-button-to-replace', buttonToReplace.className)
  }
  loader.parentNode.insertBefore(loader, buttonToReplace)
  dom.addClass([popup, actions], swalClasses.loading)
}

=======
>>>>>>> Stashed changes
export {
  showLoading,
  showLoading as enableLoading
}
