export const swalPrefix = 'swal2-'

export const prefix = (items) => {
  const result = {}
  for (const i in items) {
    result[items[i]] = swalPrefix + items[i]
  }
  return result
}

export const swalClasses = prefix([
  'container',
  'shown',
  'height-auto',
  'iosfix',
  'popup',
  'modal',
  'no-backdrop',
<<<<<<< Updated upstream
  'no-transition',
  'toast',
  'toast-shown',
=======
  'toast',
  'toast-shown',
  'toast-column',
>>>>>>> Stashed changes
  'show',
  'hide',
  'close',
  'title',
<<<<<<< Updated upstream
  'html-container',
  'actions',
  'confirm',
  'deny',
  'cancel',
  'default-outline',
=======
  'header',
  'content',
  'html-container',
  'actions',
  'confirm',
  'cancel',
>>>>>>> Stashed changes
  'footer',
  'icon',
  'icon-content',
  'image',
  'input',
  'file',
  'range',
  'select',
  'radio',
  'checkbox',
  'label',
  'textarea',
  'inputerror',
<<<<<<< Updated upstream
  'input-label',
=======
>>>>>>> Stashed changes
  'validation-message',
  'progress-steps',
  'active-progress-step',
  'progress-step',
  'progress-step-line',
<<<<<<< Updated upstream
  'loader',
=======
>>>>>>> Stashed changes
  'loading',
  'styled',
  'top',
  'top-start',
  'top-end',
  'top-left',
  'top-right',
  'center',
  'center-start',
  'center-end',
  'center-left',
  'center-right',
  'bottom',
  'bottom-start',
  'bottom-end',
  'bottom-left',
  'bottom-right',
  'grow-row',
  'grow-column',
  'grow-fullscreen',
  'rtl',
  'timer-progress-bar',
<<<<<<< Updated upstream
  'timer-progress-bar-container',
=======
>>>>>>> Stashed changes
  'scrollbar-measure',
  'icon-success',
  'icon-warning',
  'icon-info',
  'icon-question',
  'icon-error',
])

export const iconTypes = prefix([
  'success',
  'warning',
  'info',
  'question',
  'error'
])
