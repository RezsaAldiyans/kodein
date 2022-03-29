import * as dom from '../../dom/index.js'

export const renderTitle = (instance, params) => {
  const title = dom.getTitle()

<<<<<<< Updated upstream
  dom.toggle(title, params.title || params.titleText, 'block')
=======
  dom.toggle(title, params.title || params.titleText)
>>>>>>> Stashed changes

  if (params.title) {
    dom.parseHtmlToContainer(params.title, title)
  }

  if (params.titleText) {
    title.innerText = params.titleText
  }

  // Custom class
  dom.applyCustomClass(title, params, 'title')
}
