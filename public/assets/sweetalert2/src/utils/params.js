<<<<<<< Updated upstream
import { warn, warnAboutDeprecation } from '../utils/utils.js'
=======
import { warn, warnAboutDepreation } from '../utils/utils.js'
>>>>>>> Stashed changes

export const defaultParams = {
  title: '',
  titleText: '',
  text: '',
  html: '',
  footer: '',
  icon: undefined,
<<<<<<< Updated upstream
  iconColor: undefined,
  iconHtml: undefined,
  template: undefined,
  toast: false,
=======
  iconHtml: undefined,
  toast: false,
  animation: true,
>>>>>>> Stashed changes
  showClass: {
    popup: 'swal2-show',
    backdrop: 'swal2-backdrop-show',
    icon: 'swal2-icon-show',
  },
  hideClass: {
    popup: 'swal2-hide',
    backdrop: 'swal2-backdrop-hide',
    icon: 'swal2-icon-hide',
  },
<<<<<<< Updated upstream
  customClass: {},
=======
  customClass: undefined,
>>>>>>> Stashed changes
  target: 'body',
  backdrop: true,
  heightAuto: true,
  allowOutsideClick: true,
  allowEscapeKey: true,
  allowEnterKey: true,
  stopKeydownPropagation: true,
  keydownListenerCapture: false,
  showConfirmButton: true,
<<<<<<< Updated upstream
  showDenyButton: false,
  showCancelButton: false,
  preConfirm: undefined,
  preDeny: undefined,
  confirmButtonText: 'OK',
  confirmButtonAriaLabel: '',
  confirmButtonColor: undefined,
  denyButtonText: 'No',
  denyButtonAriaLabel: '',
  denyButtonColor: undefined,
=======
  showCancelButton: false,
  preConfirm: undefined,
  confirmButtonText: 'OK',
  confirmButtonAriaLabel: '',
  confirmButtonColor: undefined,
>>>>>>> Stashed changes
  cancelButtonText: 'Cancel',
  cancelButtonAriaLabel: '',
  cancelButtonColor: undefined,
  buttonsStyling: true,
  reverseButtons: false,
  focusConfirm: true,
<<<<<<< Updated upstream
  focusDeny: false,
  focusCancel: false,
  returnFocus: true,
  showCloseButton: false,
  closeButtonHtml: '&times;',
  closeButtonAriaLabel: 'Close this dialog',
  loaderHtml: '',
  showLoaderOnConfirm: false,
  showLoaderOnDeny: false,
=======
  focusCancel: false,
  showCloseButton: false,
  closeButtonHtml: '&times;',
  closeButtonAriaLabel: 'Close this dialog',
  showLoaderOnConfirm: false,
>>>>>>> Stashed changes
  imageUrl: undefined,
  imageWidth: undefined,
  imageHeight: undefined,
  imageAlt: '',
  timer: undefined,
  timerProgressBar: false,
  width: undefined,
  padding: undefined,
  background: undefined,
  input: undefined,
  inputPlaceholder: '',
<<<<<<< Updated upstream
  inputLabel: '',
=======
>>>>>>> Stashed changes
  inputValue: '',
  inputOptions: {},
  inputAutoTrim: true,
  inputAttributes: {},
  inputValidator: undefined,
<<<<<<< Updated upstream
  returnInputValueOnDeny: false,
=======
>>>>>>> Stashed changes
  validationMessage: undefined,
  grow: false,
  position: 'center',
  progressSteps: [],
  currentProgressStep: undefined,
  progressStepsDistance: undefined,
<<<<<<< Updated upstream
  willOpen: undefined,
  didOpen: undefined,
  didRender: undefined,
  willClose: undefined,
  didClose: undefined,
  didDestroy: undefined,
=======
  onBeforeOpen: undefined,
  onOpen: undefined,
  onRender: undefined,
  onClose: undefined,
  onAfterClose: undefined,
  onDestroy: undefined,
>>>>>>> Stashed changes
  scrollbarPadding: true
}

export const updatableParams = [
<<<<<<< Updated upstream
  'allowEscapeKey',
  'allowOutsideClick',
  'background',
  'buttonsStyling',
  'cancelButtonAriaLabel',
  'cancelButtonColor',
  'cancelButtonText',
  'closeButtonAriaLabel',
  'closeButtonHtml',
  'confirmButtonAriaLabel',
  'confirmButtonColor',
  'confirmButtonText',
  'currentProgressStep',
  'customClass',
  'denyButtonAriaLabel',
  'denyButtonColor',
  'denyButtonText',
  'didClose',
  'didDestroy',
  'footer',
  'hideClass',
  'html',
  'icon',
  'iconColor',
  'iconHtml',
  'imageAlt',
  'imageHeight',
  'imageUrl',
  'imageWidth',
  'progressSteps',
  'returnFocus',
  'reverseButtons',
  'showCancelButton',
  'showCloseButton',
  'showConfirmButton',
  'showDenyButton',
  'text',
  'title',
  'titleText',
  'willClose',
]

export const deprecatedParams = {}
=======
  'title',
  'titleText',
  'text',
  'html',
  'icon',
  'customClass',
  'allowOutsideClick',
  'allowEscapeKey',
  'showConfirmButton',
  'showCancelButton',
  'confirmButtonText',
  'confirmButtonAriaLabel',
  'confirmButtonColor',
  'cancelButtonText',
  'cancelButtonAriaLabel',
  'cancelButtonColor',
  'buttonsStyling',
  'reverseButtons',
  'imageUrl',
  'imageWidth',
  'imageHeight',
  'imageAlt',
  'progressSteps',
  'currentProgressStep'
]

export const deprecatedParams = {
  animation: 'showClass" and "hideClass',
}
>>>>>>> Stashed changes

const toastIncompatibleParams = [
  'allowOutsideClick',
  'allowEnterKey',
  'backdrop',
  'focusConfirm',
<<<<<<< Updated upstream
  'focusDeny',
  'focusCancel',
  'returnFocus',
=======
  'focusCancel',
>>>>>>> Stashed changes
  'heightAuto',
  'keydownListenerCapture'
]

/**
 * Is valid parameter
 * @param {String} paramName
 */
export const isValidParameter = (paramName) => {
  return Object.prototype.hasOwnProperty.call(defaultParams, paramName)
}

/**
 * Is valid parameter for Swal.update() method
 * @param {String} paramName
 */
export const isUpdatableParameter = (paramName) => {
  return updatableParams.indexOf(paramName) !== -1
}

/**
 * Is deprecated parameter
 * @param {String} paramName
 */
export const isDeprecatedParameter = (paramName) => {
  return deprecatedParams[paramName]
}

const checkIfParamIsValid = (param) => {
  if (!isValidParameter(param)) {
    warn(`Unknown parameter "${param}"`)
  }
}

const checkIfToastParamIsValid = (param) => {
  if (toastIncompatibleParams.includes(param)) {
    warn(`The parameter "${param}" is incompatible with toasts`)
  }
}

const checkIfParamIsDeprecated = (param) => {
  if (isDeprecatedParameter(param)) {
<<<<<<< Updated upstream
    warnAboutDeprecation(param, isDeprecatedParameter(param))
=======
    warnAboutDepreation(param, isDeprecatedParameter(param))
>>>>>>> Stashed changes
  }
}

/**
 * Show relevant warnings for given params
 *
 * @param params
 */
export const showWarningsForParams = (params) => {
<<<<<<< Updated upstream
  if (!params.backdrop && params.allowOutsideClick) {
    warn('"allowOutsideClick" parameter requires `backdrop` parameter to be set to `true`')
  }

=======
>>>>>>> Stashed changes
  for (const param in params) {
    checkIfParamIsValid(param)

    if (params.toast) {
      checkIfToastParamIsValid(param)
    }

    checkIfParamIsDeprecated(param)
  }
}

export default defaultParams
