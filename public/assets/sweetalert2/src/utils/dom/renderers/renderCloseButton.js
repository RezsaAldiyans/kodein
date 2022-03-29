import * as dom from '../../dom/index.js'

export const renderCloseButton = (instance, params) => {
  const closeButton = dom.getCloseButton()

<<<<<<< Updated upstream
  dom.setInnerHtml(closeButton, params.closeButtonHtml)
=======
  closeButton.innerHTML = params.closeButtonHtml
>>>>>>> Stashed changes

  // Custom class
  dom.applyCustomClass(closeButton, params, 'closeButton')

  dom.toggle(closeButton, params.showCloseButton)
  closeButton.setAttribute('aria-label', params.closeButtonAriaLabel)
}
