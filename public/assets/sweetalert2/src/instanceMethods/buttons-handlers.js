import { isVisible } from '../utils/dom/domUtils.js'
import { getInputValue } from '../utils/dom/inputUtils.js'
<<<<<<< Updated upstream
import { getDenyButton, getValidationMessage } from '../utils/dom/getters.js'
import { asPromise } from '../utils/utils.js'
=======
import { getValidationMessage } from '../utils/dom/getters.js'
>>>>>>> Stashed changes
import { showLoading } from '../staticMethods/showLoading.js'
import { DismissReason } from '../utils/DismissReason.js'

export const handleConfirmButtonClick = (instance, innerParams) => {
  instance.disableButtons()
  if (innerParams.input) {
<<<<<<< Updated upstream
    handleConfirmOrDenyWithInput(instance, innerParams, 'confirm')
=======
    handleConfirmWithInput(instance, innerParams)
>>>>>>> Stashed changes
  } else {
    confirm(instance, innerParams, true)
  }
}

<<<<<<< Updated upstream
export const handleDenyButtonClick = (instance, innerParams) => {
  instance.disableButtons()
  if (innerParams.returnInputValueOnDeny) {
    handleConfirmOrDenyWithInput(instance, innerParams, 'deny')
  } else {
    deny(instance, innerParams, false)
  }
}

=======
>>>>>>> Stashed changes
export const handleCancelButtonClick = (instance, dismissWith) => {
  instance.disableButtons()
  dismissWith(DismissReason.cancel)
}

<<<<<<< Updated upstream
const handleConfirmOrDenyWithInput = (instance, innerParams, type /* type is either 'confirm' or 'deny' */) => {
  const inputValue = getInputValue(instance, innerParams)
  if (innerParams.inputValidator) {
    handleInputValidator(instance, innerParams, inputValue, type)
  } else if (!instance.getInput().checkValidity()) {
    instance.enableButtons()
    instance.showValidationMessage(innerParams.validationMessage)
  } else if (type === 'deny') {
    deny(instance, innerParams, inputValue)
  } else {
    confirm(instance, innerParams, inputValue)
  }
}

const handleInputValidator = (instance, innerParams, inputValue, type /* type is either 'confirm' or 'deny' */) => {
  instance.disableInput()
  const validationPromise = Promise.resolve().then(() => asPromise(
    innerParams.inputValidator(inputValue, innerParams.validationMessage))
  )
  validationPromise.then(
    (validationMessage) => {
      instance.enableButtons()
      instance.enableInput()
      if (validationMessage) {
        instance.showValidationMessage(validationMessage)
      } else if (type === 'deny') {
        deny(instance, innerParams, inputValue)
      } else {
        confirm(instance, innerParams, inputValue)
      }
    }
  )
}

const deny = (instance, innerParams, value) => {
  if (innerParams.showLoaderOnDeny) {
    showLoading(getDenyButton())
  }

  if (innerParams.preDeny) {
    const preDenyPromise = Promise.resolve().then(() => asPromise(
      innerParams.preDeny(value, innerParams.validationMessage))
    )
    preDenyPromise.then(
      (preDenyValue) => {
        if (preDenyValue === false) {
          instance.hideLoading()
        } else {
          instance.closePopup({ isDenied: true, value: typeof preDenyValue === 'undefined' ? value : preDenyValue })
        }
      }
    )
  } else {
    instance.closePopup({ isDenied: true, value })
=======
const handleConfirmWithInput = (instance, innerParams) => {
  const inputValue = getInputValue(instance, innerParams)

  if (innerParams.inputValidator) {
    instance.disableInput()
    const validationPromise = Promise.resolve().then(() => innerParams.inputValidator(inputValue, innerParams.validationMessage))
    validationPromise.then(
      (validationMessage) => {
        instance.enableButtons()
        instance.enableInput()
        if (validationMessage) {
          instance.showValidationMessage(validationMessage)
        } else {
          confirm(instance, innerParams, inputValue)
        }
      }
    )
  } else if (!instance.getInput().checkValidity()) {
    instance.enableButtons()
    instance.showValidationMessage(innerParams.validationMessage)
  } else {
    confirm(instance, innerParams, inputValue)
>>>>>>> Stashed changes
  }
}

const succeedWith = (instance, value) => {
<<<<<<< Updated upstream
  instance.closePopup({ isConfirmed: true, value })
=======
  instance.closePopup({ value })
>>>>>>> Stashed changes
}

const confirm = (instance, innerParams, value) => {
  if (innerParams.showLoaderOnConfirm) {
    showLoading() // TODO: make showLoading an *instance* method
  }

  if (innerParams.preConfirm) {
    instance.resetValidationMessage()
<<<<<<< Updated upstream
    const preConfirmPromise = Promise.resolve().then(() => asPromise(
      innerParams.preConfirm(value, innerParams.validationMessage))
    )
=======
    const preConfirmPromise = Promise.resolve().then(() => innerParams.preConfirm(value, innerParams.validationMessage))
>>>>>>> Stashed changes
    preConfirmPromise.then(
      (preConfirmValue) => {
        if (isVisible(getValidationMessage()) || preConfirmValue === false) {
          instance.hideLoading()
        } else {
<<<<<<< Updated upstream
          succeedWith(instance, typeof preConfirmValue === 'undefined' ? value : preConfirmValue)
=======
          succeedWith(instance, typeof (preConfirmValue) === 'undefined' ? value : preConfirmValue)
>>>>>>> Stashed changes
        }
      }
    )
  } else {
    succeedWith(instance, value)
  }
}
