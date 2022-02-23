import { swalClasses } from '../../classes.js'
import * as dom from '../../dom/index.js'
import { capitalizeFirstLetter } from '../../utils.js'

export const renderActions = (instance, params) => {
  const actions = dom.getActions()
<<<<<<< Updated upstream
  const loader = dom.getLoader()
  const confirmButton = dom.getConfirmButton()
  const denyButton = dom.getDenyButton()
  const cancelButton = dom.getCancelButton()

  // Actions (buttons) wrapper
  if (!params.showConfirmButton && !params.showDenyButton && !params.showCancelButton) {
=======
  const confirmButton = dom.getConfirmButton()
  const cancelButton = dom.getCancelButton()

  // Actions (buttons) wrapper
  if (!params.showConfirmButton && !params.showCancelButton) {
>>>>>>> Stashed changes
    dom.hide(actions)
  }

  // Custom class
  dom.applyCustomClass(actions, params, 'actions')

<<<<<<< Updated upstream
  // Render buttons
  renderButton(confirmButton, 'confirm', params)
  renderButton(denyButton, 'deny', params)
  renderButton(cancelButton, 'cancel', params)
  handleButtonsStyling(confirmButton, denyButton, cancelButton, params)

  if (params.reverseButtons) {
    actions.insertBefore(cancelButton, loader)
    actions.insertBefore(denyButton, loader)
    actions.insertBefore(confirmButton, loader)
  }

  // Loader
  dom.setInnerHtml(loader, params.loaderHtml)
  dom.applyCustomClass(loader, params, 'loader')
}

function handleButtonsStyling (confirmButton, denyButton, cancelButton, params) {
  if (!params.buttonsStyling) {
    return dom.removeClass([confirmButton, denyButton, cancelButton], swalClasses.styled)
  }

  dom.addClass([confirmButton, denyButton, cancelButton], swalClasses.styled)
=======
  // Render confirm button
  renderButton(confirmButton, 'confirm', params)
  // render Cancel Button
  renderButton(cancelButton, 'cancel', params)

  if (params.buttonsStyling) {
    handleButtonsStyling(confirmButton, cancelButton, params)
  } else {
    dom.removeClass([confirmButton, cancelButton], swalClasses.styled)
    confirmButton.style.backgroundColor = confirmButton.style.borderLeftColor = confirmButton.style.borderRightColor = ''
    cancelButton.style.backgroundColor = cancelButton.style.borderLeftColor = cancelButton.style.borderRightColor = ''
  }

  if (params.reverseButtons) {
    confirmButton.parentNode.insertBefore(cancelButton, confirmButton)
  }
}

function handleButtonsStyling (confirmButton, cancelButton, params) {
  dom.addClass([confirmButton, cancelButton], swalClasses.styled)
>>>>>>> Stashed changes

  // Buttons background colors
  if (params.confirmButtonColor) {
    confirmButton.style.backgroundColor = params.confirmButtonColor
<<<<<<< Updated upstream
    dom.addClass(confirmButton, swalClasses['default-outline'])
  }
  if (params.denyButtonColor) {
    denyButton.style.backgroundColor = params.denyButtonColor
    dom.addClass(denyButton, swalClasses['default-outline'])
  }
  if (params.cancelButtonColor) {
    cancelButton.style.backgroundColor = params.cancelButtonColor
    dom.addClass(cancelButton, swalClasses['default-outline'])
  }
=======
  }
  if (params.cancelButtonColor) {
    cancelButton.style.backgroundColor = params.cancelButtonColor
  }

  // Loading state
  const confirmButtonBackgroundColor = window.getComputedStyle(confirmButton).getPropertyValue('background-color')
  confirmButton.style.borderLeftColor = confirmButtonBackgroundColor
  confirmButton.style.borderRightColor = confirmButtonBackgroundColor
>>>>>>> Stashed changes
}

function renderButton (button, buttonType, params) {
  dom.toggle(button, params[`show${capitalizeFirstLetter(buttonType)}Button`], 'inline-block')
<<<<<<< Updated upstream
  dom.setInnerHtml(button, params[`${buttonType}ButtonText`]) // Set caption text
=======
  button.innerHTML = params[`${buttonType}ButtonText`] // Set caption text
>>>>>>> Stashed changes
  button.setAttribute('aria-label', params[`${buttonType}ButtonAriaLabel`]) // ARIA label

  // Add buttons custom classes
  button.className = swalClasses[buttonType]
  dom.applyCustomClass(button, params, `${buttonType}Button`)
  dom.addClass(button, params[`${buttonType}ButtonClass`])
}
