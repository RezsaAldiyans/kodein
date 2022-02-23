export const consolePrefix = 'SweetAlert2:'

/**
 * Filter the unique values into a new array
 * @param arr
 */
export const uniqueArray = (arr) => {
  const result = []
  for (let i = 0; i < arr.length; i++) {
    if (result.indexOf(arr[i]) === -1) {
      result.push(arr[i])
    }
  }
  return result
}

/**
 * Capitalize the first letter of a string
 * @param str
 */
export const capitalizeFirstLetter = (str) => str.charAt(0).toUpperCase() + str.slice(1)

/**
<<<<<<< Updated upstream
=======
 * Returns the array ob object values (Object.values isn't supported in IE11)
 * @param obj
 */
export const objectValues = (obj) => Object.keys(obj).map(key => obj[key])

/**
>>>>>>> Stashed changes
 * Convert NodeList to Array
 * @param nodeList
 */
export const toArray = (nodeList) => Array.prototype.slice.call(nodeList)

/**
 * Standardise console warnings
 * @param message
 */
export const warn = (message) => {
<<<<<<< Updated upstream
  console.warn(`${consolePrefix} ${typeof message === 'object' ? message.join(' ') : message}`)
=======
  console.warn(`${consolePrefix} ${message}`)
>>>>>>> Stashed changes
}

/**
 * Standardise console errors
 * @param message
 */
export const error = (message) => {
  console.error(`${consolePrefix} ${message}`)
}

/**
 * Private global state for `warnOnce`
 * @type {Array}
 * @private
 */
const previousWarnOnceMessages = []

/**
 * Show a console warning, but only if it hasn't already been shown
 * @param message
 */
export const warnOnce = (message) => {
  if (!previousWarnOnceMessages.includes(message)) {
    previousWarnOnceMessages.push(message)
    warn(message)
  }
}

/**
 * Show a one-time console warning about deprecated params/methods
 */
<<<<<<< Updated upstream
export const warnAboutDeprecation = (deprecatedParam, useInstead) => {
=======
export const warnAboutDepreation = (deprecatedParam, useInstead) => {
>>>>>>> Stashed changes
  warnOnce(`"${deprecatedParam}" is deprecated and will be removed in the next major release. Please use "${useInstead}" instead.`)
}

/**
 * If `arg` is a function, call it (with no arguments or context) and return the result.
 * Otherwise, just pass the value through
 * @param arg
 */
export const callIfFunction = (arg) => typeof arg === 'function' ? arg() : arg

<<<<<<< Updated upstream
export const hasToPromiseFn = (arg) => arg && typeof arg.toPromise === 'function'

export const asPromise = (arg) => hasToPromiseFn(arg) ? arg.toPromise() : Promise.resolve(arg)

=======
>>>>>>> Stashed changes
export const isPromise = (arg) => arg && Promise.resolve(arg) === arg
