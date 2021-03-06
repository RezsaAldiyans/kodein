import * as dom from '../utils/dom/index.js'
import * as domUtils from '../utils/dom/domUtils.js'

export {
  getContainer,
  getPopup,
  getTitle,
<<<<<<< Updated upstream
  getHtmlContainer,
  getImage,
  getIcon,
  getInputLabel,
  getCloseButton,
  getActions,
  getConfirmButton,
  getDenyButton,
  getCancelButton,
  getLoader,
  getFooter,
  getTimerProgressBar,
=======
  getContent,
  getHtmlContainer,
  getImage,
  getIcon,
  getIcons,
  getCloseButton,
  getActions,
  getConfirmButton,
  getCancelButton,
  getHeader,
  getFooter,
>>>>>>> Stashed changes
  getFocusableElements,
  getValidationMessage,
  isLoading
} from '../utils/dom/index.js'

/*
 * Global function to determine if SweetAlert2 popup is shown
 */
export const isVisible = () => {
  return domUtils.isVisible(dom.getPopup())
}

/*
 * Global function to click 'Confirm' button
 */
export const clickConfirm = () => dom.getConfirmButton() && dom.getConfirmButton().click()

/*
<<<<<<< Updated upstream
 * Global function to click 'Deny' button
 */
export const clickDeny = () => dom.getDenyButton() && dom.getDenyButton().click()

/*
=======
>>>>>>> Stashed changes
 * Global function to click 'Cancel' button
 */
export const clickCancel = () => dom.getCancelButton() && dom.getCancelButton().click()
