<<<<<<< Updated upstream
=======
import { swalClasses } from '../../classes.js'
>>>>>>> Stashed changes
import * as dom from '../../dom/index.js'
import { renderInput } from './renderInput.js'

export const renderContent = (instance, params) => {
<<<<<<< Updated upstream
  const htmlContainer = dom.getHtmlContainer()

  dom.applyCustomClass(htmlContainer, params, 'htmlContainer')

  // Content as HTML
  if (params.html) {
    dom.parseHtmlToContainer(params.html, htmlContainer)
    dom.show(htmlContainer, 'block')

  // Content as plain text
  } else if (params.text) {
    htmlContainer.textContent = params.text
    dom.show(htmlContainer, 'block')

  // No content
  } else {
    dom.hide(htmlContainer)
  }

  renderInput(instance, params)
=======
  const content = dom.getContent().querySelector(`#${swalClasses.content}`)

  // Content as HTML
  if (params.html) {
    dom.parseHtmlToContainer(params.html, content)
    dom.show(content, 'block')

  // Content as plain text
  } else if (params.text) {
    content.textContent = params.text
    dom.show(content, 'block')

  // No content
  } else {
    dom.hide(content)
  }

  renderInput(instance, params)

  // Custom class
  dom.applyCustomClass(dom.getContent(), params, 'content')
>>>>>>> Stashed changes
}
